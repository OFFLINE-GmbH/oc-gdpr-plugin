<?php namespace OFFLINE\GDPR\Models;

use Model;
use OFFLINE\GDPR\Classes\Cleanup\CleanupService;
use OFFLINE\GDPR\Plugin;

class DataRetentionSettings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'offline_gdpr_data_retention_settings';
    public $settingsFields = 'fields.yaml';

    public static $defaults = [
        "enabled"           => false,
        "default_keep_days" => 365,
    ];

    /**
     * Extend the setting form with input fields for each
     * registered plugin.
     */
    public function getFieldConfig()
    {
        if ($this->fieldConfig !== null) {
            return $this->fieldConfig;
        }

        $config                 = parent::getFieldConfig();
        $config->tabs['fields'] = [];

        $service = new CleanupService();
        $service->getPlugins()->each(function (array $plugin) use ($config, $service) {
            // Section
            $config->tabs['fields'][$plugin['id'] . '_section'] = $service->getSection($plugin);
            foreach ($plugin['models'] as $key => $model) {
                if ( ! array_key_exists('class', $model) && ! array_key_exists('id', $model)) {
                    throw new \LogicException(
                        sprintf(
                            '[OFFLINE.GDPR] Please set at least a class or id attribute for your cleanup model or closure (Plugin ID %s)',
                            $plugin['id'] ?? 'missing id')
                    );
                }

                $class = isset($model['class']) ? $model['class'] : $model['id'];
                $class = str_replace('\\', '-', $class);
                // Switch
                $config->tabs['fields'][$class . '_enabled'] = $service->getSwitch($model);
                // Number
                $config->tabs['fields'][$class . '_keep_days'] = $service->getKeepDays();
            }
        });

        return $config;
    }
}