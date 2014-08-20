<?php namespace Raviraj\Rjsliders\Controllers;

use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use Raviraj\Rjsliders\Models\Slider;
/**
 * Sliders Back-end Controller
 */
class Sliders extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Raviraj.Rjsliders', 'rjsliders', 'sliders');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $itemId) {
                if (!$slider = Slider::find($itemId))
                    continue;

                $slider->delete();
            }

            Flash::success('Successfully deleted those selected.');
        }

        return $this->listRefresh();
    }
}