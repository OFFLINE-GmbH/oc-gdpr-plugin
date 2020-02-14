<?php namespace OFFLINE\GDPR\Models;

use Model;

class GDPRSettings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'offline_gdpr_general_settings';
    public $settingsFields = 'fields.yaml';

    public static $defaults = [
        'enabled' => false,
        'ignore_useragents' => [
            ['useragent' => '/Bot/i'],
            ['useragent' => '/Googlebot/i'],
            ['useragent' => '/Baidu/i'],
            ['useragent' => '/Bing/i'],
            ['useragent' => '/Yandex/i'],
            ['useragent' => '/1pilot/i'],
            ['useragent' => '/crawler/i'],
            ['useragent' => '/curl/i'],
        ]
    ];

    public function initSettingsData()
    {
        $this->fill(self::$defaults);
    }
}
