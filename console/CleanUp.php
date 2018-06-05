<?php namespace OFFLINE\GDPR\Console;

use Illuminate\Console\Command;
use OFFLINE\GDPR\Classes\Cleanup\CleanupService;

class CleanUp extends Command
{
    protected $name = 'gdpr:cleanup';
    protected $description = 'Clean up old data';

    public function handle()
    {
        $service = new CleanupService($this->output);

        return $service->run();
    }
}
