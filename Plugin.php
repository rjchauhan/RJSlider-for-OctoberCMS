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

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'raviraj.rjsliders::lang.plugin.name',
            'description' => 'raviraj.rjsliders::lang.plugin.description',
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
                'label' => 'raviraj.rjsliders::lang.menu.name',
                'url'   => Backend::url('raviraj/rjsliders/sliders'),
                'icon'        => 'icon-play-circle-o',
                'permissions' => ['raviraj.rjsliders.*'],
                'order'       => 500,
            ],
        ];
    }

    public function registerPermissions()
    {
        return [
            'raviraj.rjsliders.*' => [
                'tab' => 'raviraj.rjsliders::lang.plugin.name',
                'label' => 'raviraj.rjsliders::lang.permissions.all'
            ]
        ];
    }
}
