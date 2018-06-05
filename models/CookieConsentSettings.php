<?php namespace OFFLINE\GDPR\Models;

use Model;

class CookieConsentSettings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'offline_gdpr_cookie_consent_settings';
    public $settingsFields = 'fields.yaml';
}