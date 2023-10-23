<?php

namespace OFFLINE\GDPR\Classes\Cleanup;


use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use OFFLINE\GDPR\Models\DataRetentionSettings;
use OFFLINE\GDPR\Plugin as GDPRPlugin;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Style\OutputStyle;

class CleanupService
{
    protected $output;
    protected $logger;
    protected $settings;

    public function __construct(OutputStyle $output = null, LoggerInterface $logger = null)
    {
        $this->output = $output;
        $this->logger = $logger ?? app('log');
    }

    public function run()
    {
        $settings = $this->getSettings();
        if ( ! $settings['enabled']) {
            return $this->log('Skipping deletion of old data since feature is disabled');
        }

        foreach ($this->getPlugins() as $plugin) {
            $this->handlePlugin($plugin);
        }
    }

    public function getPlugins()
    {
        return collect(Event::fire(GDPRPlugin::EVENT_CLEANUP_REGISTER))->keyBy('id');
    }

    protected function handlePlugin($plugin)
    {
        foreach ($plugin['models'] as $model) {
            $this->handleModel($model);
        }
    }

    protected function handleModel($model)
    {
        $useClosure = isset($model['closure']);
        $settingKey = $useClosure ? str_replace('-', '\\', $model['id']) : $model['class'];
        $config     = $this->settings['models'][$settingKey] ?? null;

        if ( ! $config) {
            return $this->log(
                sprintf('Cannot find configuration for %s, skipping data deletion.', $model['class'])
            );
        }

        if ( ! $config['enabled']) {
            return $this->log(
                sprintf(
                    'Skipping deletion of %s model data since the feature has been disabled',
                    $settingKey
                )
            );
        }

        $keepDays = $config['keep_days'] ?? $this->settings['default_keep_days'];
        $deadline = Carbon::now()->subDays($keepDays);

        if ($useClosure && $model['closure'] instanceof \Closure) {
            return $this->cleanup(function () use ($model, $deadline, $keepDays) {
                return $model['closure']($deadline, $keepDays);
            }, $model);
        }

        if (!$useClosure && method_exists($model['class'], 'gdprCleanup')) {
            return $this->cleanup(function () use ($model, $deadline, $keepDays) {
                $class = new $model['class'];
                $class->gdprCleanup($deadline, $keepDays);
            }, $model);
        }

        $this->log('[ERROR] No valid deletion method found for class ' . $settingKey, 'error');
    }

    protected function cleanup(\Closure $closure, $model)
    {
        try {
            $closure();
        } catch (\Throwable $e) {
            $this->log('Failed to cleanup ' . $model['class'], 'error', ['ex' => $e]);
        }
    }

    protected function log($line, $method = 'debug', $context = [])
    {
        $this->logger->$method($line, $context);
        if ($this->output) {
            $this->output->writeln($line);
        }
    }

    public function getSection($plugin)
    {
        return [
            'label' => $plugin['label'],
            'span'  => 'full',
            'type'  => 'section',
            'tab'   => 'Plugins',
        ];
    }

    public function getSwitch($model)
    {
        return [
            'label'   => $model['label'],
            'comment' => $model['comment'] ?? '',
            'span'    => 'auto',
            'default' => 0,
            'type'    => 'switch',
            'tab'     => 'Plugins',
        ];
    }

    public function getKeepDays()
    {
        return [
            'label' => 'offline.gdpr::lang.settings.data_retention.keep_days.label',
            'span'  => 'auto',
            'type'  => 'number',
            'tab'   => 'Plugins',
        ];
    }

    protected function getSettings()
    {
        if ($this->settings) {
            return $this->settings;
        }

        $settings = optional(
            DataRetentionSettings::where('item', 'offline_gdpr_data_retention_settings')->first()
        )->value;

        $base   = array_merge(DataRetentionSettings::$defaults, array_wrap($settings));
        $return = [];
        foreach ($base as $key => $value) {
            if (in_array($key, ['enabled', 'default_keep_days'])) {
                $return[$key] = $value;
                continue;
            }

            $field = ends_with($key, '_enabled') ? 'enabled' : 'keep_days';

            $class = str_replace('-', '\\', $key);
            $class = str_replace('_' . $field, '', $class);

            $return['models'][$class][$field] = $value;
        }

        return $this->settings = $return;
    }
}
