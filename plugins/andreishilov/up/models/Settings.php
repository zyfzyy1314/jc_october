<?php namespace AndreiShilov\Up\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'andreishilov_up_settings';

    public $settingsFields = 'fields.yaml';

    public static function inExceptArray($url)
    {
        if($url[0] !== '/') {
            $url = '/'.$url;
        }

        $excepts = explode("\n", self::get('exclude_path'));

        foreach ($excepts as $except) {
            $except = trim($except);

            $pattern = str_replace('/', '\/', $except);
            $pattern = '/^' . str_replace('*', '.*', $pattern) . '$/';

            if (preg_match($pattern, $url)) {
                return true;
            }
        }

        return false;
    }


}