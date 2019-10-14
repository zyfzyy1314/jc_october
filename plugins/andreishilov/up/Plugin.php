<?php namespace AndreiShilov\Up;

use AndreiShilov\Up\Models\Settings;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use System\Classes\CombineAssets;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'andreishilov.up::lang.plugin.name',
            'description' => 'andreishilov.up::lang.plugin.description',
            'author' => 'andreishilov.up::lang.plugin.author',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return [
            'andreishilov.up.settings' => [
                'label' => 'andreishilov.up::lang.plugin.name',
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'andreishilov.up::lang.settings.label',
                'description' => 'andreishilov.up::lang.settings.description',
                'icon' => 'icon-arrow-circle-up',
                'class' => 'AndreiShilov\Up\Models\Settings',
                'permissions' => ['andreishilov.up.settings'],
            ]
        ];
    }

    public function boot()
    {
        if (!App::runningInBackend()) {
            if(!Settings::inExceptArray(request()->path())) {
                Event::listen('cms.page.beforeDisplay', function ($controller, $action, $params) {
                    $controller->addJs(CombineAssets::combine(['assets/js/up.js',], plugins_path('andreishilov/up/')));
                    $controller->addCss(CombineAssets::combine(['assets/css/up.css'], plugins_path('andreishilov/up/')));
                });
            }
        }

        Route::post('/andreishilov/up/config/', 'AndreiShilov\Up\Controllers\Config');
    }

    public function registerFormWidgets()
    {
        return [
            'AndreiShilov\Up\FormWidgets\SelectImage' => [
                'label' => 'andreishilov.up::lang.selectimage.name',
                'code' => 'selectimage'
            ]
        ];
    }
}
