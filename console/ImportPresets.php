<?php namespace OFFLINE\GDPR\Console;

use DB;
use Illuminate\Console\Command;
use October\Rain\Parse\Yaml;
use October\Rain\Support\Collection;
use OFFLINE\GDPR\Models\Cookie;
use OFFLINE\GDPR\Models\CookieGroup;
use Symfony\Component\Console\Input\InputOption;

class ImportPresets extends Command
{
    protected $name = 'gdpr:import';

    protected $description = 'Import Cookie presets';

    public function handle()
    {
        if ($this->option('replace')) {
            if ( ! $this->confirm('All existing cookie data will be removed. Do you want to continue?')) {
                return;
            }
            DB::table('offline_gdpr_cookie_groups')->truncate();
            DB::table('offline_gdpr_cookies')->truncate();
        }

        if ($path = $this->option('path')) {
            if (!file_exists($path)) {
                $this->error(sprintf('Specified path is not a file: %s', $path));
                return 1;
            }
            $data = collect((new Yaml())->parseFile($path));
        } else {
            $data = $this->getImportData();
            if ($data === false) {
                return 1;
            }
        }

        $this->runImport($data);

        $this->output->success('Import successful!');

        return 0;
    }

    protected function getOptions()
    {
        return [
            ['replace', null, InputOption::VALUE_NONE, 'Replace all existing cookies with the imported data', null],
            ['path', null, InputOption::VALUE_OPTIONAL, 'Path to a specific YAML file with cookie presets', null],
        ];
    }

    protected function runImport($data): void
    {
        collect($data->get('groups'))->each(function ($entry) {
            $group = new CookieGroup();
            $group->forceFill(array_except($entry, 'cookies'));
            $group->save();

            foreach ($entry['cookies'] as $cookieData) {
                $cookie = new Cookie();
                $cookie->forceFill($cookieData);
                $cookie->cookie_group_id = $group->id;
                $cookie->save();
            }
        });
    }

    protected function getImportData()
    {
        $path = config('offline.gdpr::config.presets_path');
        if ( ! is_dir($path)) {
            $this->error(sprintf('Configured path is not a directory: %s', $path));

            return false;
        }

        $pattern = sprintf('%s/%s', rtrim($path, '/'), '*.{yml,yaml}');
        $presets = glob($pattern, GLOB_BRACE);

        if (count($presets) < 1) {
            $this->error(sprintf('No presets found in path: %s', $path));

            return false;
        }

        $parsed = new Collection();
        foreach ($presets as $preset) {
            $yaml = (new Yaml())->parseFile($preset);
            $parsed->put($yaml['title'] ?? 'Untitled', collect($yaml));
        }

        $values = $parsed->toArray();
        reset($values);
        $import = key($values);

        if (count($presets) > 1) {
            $import = $this->choice('Which preset do you want to import?', $parsed->keys()->toArray());
        }

        return $parsed->get($import);
    }
}
