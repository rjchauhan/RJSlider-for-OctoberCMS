<?php namespace Raviraj\Rjsliders\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjsliders\Models\Slider;
use Lang;

class Advanced extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'raviraj.rjsliders::lang.menu.name',
            'description' => 'raviraj.rjsliders::lang.menu.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'idSlider' => [
                'title'        => 'raviraj.rjsliders::lang.idslider.title',
                'description'  => 'raviraj.rjsliders::lang.idslider.description',
                'type'         => 'dropdown',
            ],
            'height' => [
                'title'         => 'raviraj.rjsliders::lang.height.title',
                'description'   => 'raviraj.rjsliders::lang.height.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.height.validationMessage',
                'default'     => '400',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.options'),
            ],
            'autoplay' => [
                'title'         => 'raviraj.rjsliders::lang.autoplay.title',
                'description'   => 'raviraj.rjsliders::lang.autoplay.description',
                'type'         => 'checkbox',
                'default'      => 'true',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.options'),
            ],
            'fillmode' => [
                'title'         => 'raviraj.rjsliders::lang.fillmode.title',
                'description'   => 'raviraj.rjsliders::lang.fillmode.description',
                'type'         => 'dropdown',
                'default'      => '0',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.options'),
            ],
            // Effect Options
            'transaction' => [
                'title'        => 'raviraj.rjsliders::lang.transaction.title',
                'description'  => 'raviraj.rjsliders::lang.transaction.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'autoplayinterval' => [
                'title'        => 'raviraj.rjsliders::lang.autoplayinterval.title',
                'description'  => 'raviraj.rjsliders::lang.autoplayinterval.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.autoplayinterval.validationMessage',
                'default'     => '2000',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'pauseonhover' => [
                'title'        => 'raviraj.rjsliders::lang.pauseonhover.title',
                'description'  => 'raviraj.rjsliders::lang.pauseonhover.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'arrowkeynavigation' => [
                'title'        => 'raviraj.rjsliders::lang.arrowkeynavigation.title',
                'description'  => 'raviraj.rjsliders::lang.arrowkeynavigation.description',
                'type'         => 'checkbox',
                'default'      => 'true',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'slideduration' => [
                'title'        => 'raviraj.rjsliders::lang.slideduration.title',
                'description'  => 'raviraj.rjsliders::lang.slideduration.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.slideduration.validationMessage',
                'default'     => '500',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'mindragoffset' => [
                'title'        => 'raviraj.rjsliders::lang.mindragoffset.title',
                'description'  => 'raviraj.rjsliders::lang.mindragoffset.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.mindragoffset.validationMessage',
                'default'     => '40',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'slidespacing' => [
                'title'        => 'raviraj.rjsliders::lang.slidespacing.title',
                'description'  => 'raviraj.rjsliders::lang.slidespacing.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.slidespacing.validationMessage',
                'default'     => '0',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'dragorientation' => [
                'title'        => 'raviraj.rjsliders::lang.dragorientation.title',
                'description'  => 'raviraj.rjsliders::lang.dragorientation.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            'playorientation' => [
                'title'        => 'raviraj.rjsliders::lang.playorientation.title',
                'description'  => 'raviraj.rjsliders::lang.playorientation.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.effects'),
            ],
            // Bullet Navigator Options
            'chancetoshow' => [
                'title'        => 'raviraj.rjsliders::lang.chancetoshow.title',
                'description'  => 'raviraj.rjsliders::lang.chancetoshow.description',
                'type'         => 'dropdown',
                'default'      => '2',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'autocenter' => [
                'title'        => 'raviraj.rjsliders::lang.autocenter.title',
                'description'  => 'raviraj.rjsliders::lang.autocenter.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'orientation' => [
                'title'        => 'raviraj.rjsliders::lang.orientation.title',
                'description'  => 'raviraj.rjsliders::lang.orientation.description',
                'type'         => 'checkbox',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'spacingx' => [
                'title'        => 'raviraj.rjsliders::lang.spacingx.title',
                'description'  => 'raviraj.rjsliders::lang.spacingx.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.spacingx.validationMessage',
                'default'     => '8',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'spacingy' => [
                'title'        => 'raviraj.rjsliders::lang.spacingy.title',
                'description'  => 'raviraj.rjsliders::lang.spacingy.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.spacingy.validationMessage',
                'default'     => '8',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'steps' => [
                'title'        => 'raviraj.rjsliders::lang.steps.title',
                'description'  => 'raviraj.rjsliders::lang.steps.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.steps.validationMessage',
                'default'     => '1',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            'lanes' => [
                'title'        => 'raviraj.rjsliders::lang.lanes.title',
                'description'  => 'raviraj.rjsliders::lang.lanes.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.lanes.validationMessage',
                'default'     => '1',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.bulletnav'),
            ],
            // Arrow Navigator Options
            'chancetoshowarrow' => [
                'title'        => 'raviraj.rjsliders::lang.chancetoshowarrow.title',
                'description'  => 'raviraj.rjsliders::lang.chancetoshowarrow.description',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.arrownav'),
            ],
            'autocenterarrow' => [
                'title'        => 'raviraj.rjsliders::lang.autocenterarrow.title',
                'description'  => 'raviraj.rjsliders::lang.autocenterarrow.description',
                'type'         => 'dropdown',
                'default'      => '2',
                'group'        => Lang::get('raviraj.rjsliders::lang.groups.arrownav'),
            ],
            'stepsarrow' => [
                'title'        => 'raviraj.rjsliders::lang.stepsarrow.title',
                'description'  => 'raviraj.rjsliders::lang.stepsarrow.description',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'raviraj.rjsliders::lang.stepsarrow.validationMessage',
                'default'     => '1',
                'group'       => Lang::get('raviraj.rjsliders::lang.groups.arrownav'),
            ],
        ];
    }

    public function getidSliderOptions()
    {
        return Slider::select('id', 'name')->orderBy('name')->get()->lists('name', 'id');
    }
    public function getfillmodeOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.stretch'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.keepratio'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.coverwhole'),
            '4' => Lang::get('raviraj.rjsliders::lang.misc.actual'),
            '5' => Lang::get('raviraj.rjsliders::lang.misc.containlarge')
        ];
    }
    public function gettransactionOptions()
    {
        return [ 
            '0' => Lang::get('raviraj.rjsliders::lang.misc.noeffect'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.random'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.fadetwins'),
            '3' => Lang::get('raviraj.rjsliders::lang.misc.rotateoverlap'),
            '4' => Lang::get('raviraj.rjsliders::lang.misc.switch'),
            '5' => Lang::get('raviraj.rjsliders::lang.misc.rotaterelay'),
            '6' => Lang::get('raviraj.rjsliders::lang.misc.doors'),
            '7' => Lang::get('raviraj.rjsliders::lang.misc.rotateinplusout'),
            '8' => Lang::get('raviraj.rjsliders::lang.misc.flytwins'),
            '9' => Lang::get('raviraj.rjsliders::lang.misc.rotateinminusout'),
            '10' => Lang::get('raviraj.rjsliders::lang.misc.rotateaxisup'),
            '11' => Lang::get('raviraj.rjsliders::lang.misc.chesstb'),
            '12' => Lang::get('raviraj.rjsliders::lang.misc.chesslr'),
            '13' => Lang::get('raviraj.rjsliders::lang.misc.shifttb'),
            '14' => Lang::get('raviraj.rjsliders::lang.misc.shiftlr'),
            '15' => Lang::get('raviraj.rjsliders::lang.misc.returntb'),
            '16' => Lang::get('raviraj.rjsliders::lang.misc.returnlr'),
            '17' => Lang::get('raviraj.rjsliders::lang.misc.rotateaxisdown'),
            '18' => Lang::get('raviraj.rjsliders::lang.misc.extrude')
        ];
    }
    public function getpauseonhoverOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.nopause'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.mouse'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.touch'),
            '3' => Lang::get('raviraj.rjsliders::lang.misc.mousentouch')
        ];
    }
    public function getdragorientationOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.nodrag'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.horizontal'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.vertical'),
            '3' => Lang::get('raviraj.rjsliders::lang.misc.both')
        ];
    }
    public function getplayorientationOptions()
    {
        return [
            '1' => Lang::get('raviraj.rjsliders::lang.misc.horizontal'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.vertical'),
            '5' => Lang::get('raviraj.rjsliders::lang.misc.horizontalrev'),
            '6' => Lang::get('raviraj.rjsliders::lang.misc.verticalrev')
        ];
    }
    public function getchancetoshowOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.never'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.mouseover'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.always')
        ];
    }
    public function getautocenterOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.none'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.horizontal'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.vertical'),
            '3' => Lang::get('raviraj.rjsliders::lang.misc.both')
        ];
    }
    public function getchancetoshowarrowOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.never'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.mouseover'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.always')
        ];
    }
    public function getautocenterarrowOptions()
    {
        return [
            '0' => Lang::get('raviraj.rjsliders::lang.misc.none'),
            '1' => Lang::get('raviraj.rjsliders::lang.misc.horizontal'),
            '2' => Lang::get('raviraj.rjsliders::lang.misc.vertical'),
            '3' => Lang::get('raviraj.rjsliders::lang.misc.both')
        ];
    }

    public function onRun()
    {
        $this->addJs('assets/js/jssor.slider.min.js');
        $this->addCss('assets/style/sliderstyle.css');
    }
    public function onRender(){
        $slider = new Slider;
        $this->slider = $this->page['slider'] = $slider->where('id', '=', $this->property('idSlider'))->first();

        // Inject all slider properties to page.
        foreach ($this->getProperties() as $key => $value) {
            $this->page[$key] = $value;
        }
    }
}
