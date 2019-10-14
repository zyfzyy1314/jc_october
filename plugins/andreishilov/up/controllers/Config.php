<?php namespace AndreiShilov\Up\Controllers;

use Backend\Classes\Controller;
use AndreiShilov\Up\Models\Settings;
use Illuminate\Http\Request;

class Config extends Controller
{
    public $requiredPermissions = ['andreishilov_up_settings'];

    public function __invoke(Request $request)
    {
        $config = [
            'display' => [
                'offset' => Settings::get('offset', 10),
                'min_screen_width' => Settings::get('min_screen_width', 320),
                'position' => Settings::get('position', 'br'),
            ],
            'button' => [
                'background-color' => Settings::get('background_color', '#c51c34'),
                'padding' => Settings::get('padding', '5'),
                'opacity' => Settings::get('opacity', '0.7'),
                'height' => Settings::get('height', '56'),
                'width' => Settings::get('width', '56'),
                'background-image' => 'url(/plugins/andreishilov/up/assets/img/arrows/' . Settings::get('image', '1.png') . ')',
            ]
        ];

        return $config;
    }
}
