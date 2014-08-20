<?php namespace Raviraj\Rjsliders;

use App;
use Event;
use Backend;
use System\Classes\PluginBase;

/**
 * rjsliders Plugin Information File
 */
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Rjsliders',
            'description' => 'Create a touch responsive slideshow with device independent design.',
            'author'      => 'Raviraj Chauhan',
            'icon'        => 'icon-play-circle-o',
        ];
    }

    public function registerComponents()
    {
        return [
            'Raviraj\RjSliders\Components\Advanced' => 'advanced',
        ];
    }

    public function registerNavigation()
    {
        return [
            'sliders' => [
                'label' => 'RjSliders',
                'url'   => Backend::url('raviraj/rjsliders/sliders'),
                'icon'        => 'icon-play-circle-o',
                'permissions' => ['raviraj.*'],
                'order'       => 500,
            ],
        ];
    }
}
