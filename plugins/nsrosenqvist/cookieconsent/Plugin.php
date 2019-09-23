<?php namespace NSRosenqvist\CookieConsent;

use Block;
use NSRosenqvist\CookieConsent\Models\Settings;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Cookie Consent',
            'description' => 'Integrate the popular Cookie Consent JavaScript based solution to comply with the EU cookie laws.',
            'author' => 'Niklas Rosenqvist',
            'icon' => 'icon-leaf',
            'homepage' => 'https://www.nsrosenqvist.com/'
        ];
    }

    public function boot()
    {
        Block::append('styles', '<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/'.Settings::get('version', '3.1.0').'/cookieconsent.min.css" />');
        // Consent Cookie
        Block::append('scripts', '<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/'.Settings::get('version', '3.1.0').'/cookieconsent.min.js" type="text/javascript"></script>');
        // Settings
        Block::append('scripts', '<script type="text/javascript">window.cookieconsent.initialise('.json_encode($this->getSettings(), false).');</script>');
    }

    public function registerPermissions()
    {
        return [
            'nsrosenqvist.cookieconsent.settings' => [
                'label' => 'Manage CookieConsent Settings',
                'tab'   => 'CookieConsent'
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Cookie Consent',
                'description' => 'Manage cookie notification settings.',
                'icon'        => 'icon-globe',
                'class'       => 'NSRosenqvist\CookieConsent\Models\Settings',
                'keywords'    => 'cookie eu law cookies biscuits',
                'permissions' => ['nsrosenqvist.cookieconsent.settings'],
            ]
        ];
    }

    protected function getSettings()
    {
        return [
            "content" => [
                "message" => Settings::get('message'),
                "dismiss" => Settings::get('dismiss'),
                "link"    => Settings::get('learnMore'),
                "href"    => Settings::get('link', null),
            ],
            "palette" => [
                "popup" => [
                    "background" => Settings::get('popup_background', '#000'),
                ],
                "button" => [
                    "background" => Settings::get('button_background', '#f1d600'),
                ],
            ],
            "container"  => Settings::get('container', null),
            "theme"      => Settings::get('theme'),
            "path"       => Settings::get('path'),
            "expiryDays" => Settings::get('expiryDays')
        ];
    }
}
