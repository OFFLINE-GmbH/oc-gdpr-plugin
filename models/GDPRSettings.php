<?php namespace OFFLINE\GDPR\Models;

use Model;

class GDPRSettings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'offline_gdpr_general_settings';
    public $settingsFields = 'fields.yaml';

    public static $defaults = [
        'enabled' => false,
    ];
}