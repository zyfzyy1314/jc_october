<?php namespace NSRosenqvist\CookieConsent\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'nsrosenqvist_cookieconsent_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
