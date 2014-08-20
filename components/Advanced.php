<?php namespace Raviraj\Rjsliders\Components;

use Cms\Classes\ComponentBase;
use Raviraj\Rjsliders\Models\Slider;

class Advanced extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Advanced Slider',
            'description' => 'Display a slideshow for your images with advance options.'
        ];
    }

    public function defineProperties()
    {
        return [
            'idSlider' => [
                'title'        => 'Slider',
                'description'  => 'Choose the slider that will display.',
                'type'         => 'dropdown',
            ],
            'height' => [
                'title'       => 'Height',
                'description' => 'Height of slider.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '400',
                'group'       => 'Options',
            ],
            'autoplay' => [
                'title'        => 'Autoplay',
                'description'  => 'Autoplay slidshow.',
                'type'         => 'dropdown',
                'default'      => 'true',
                'group'        => 'Options',
            ],
            'fillmode' => [
                'title'        => 'Fill Mode',
                'description'  => 'The way to fill image in slide.',
                'type'         => 'dropdown',
                'default'      => '0',
                'group'        => 'Options',
            ],
            // Effect Options
            'transaction' => [
                'title'        => 'Transaction Effect',
                'description'  => 'Transaction effects when a slider is auto playing.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Effects',
            ],
            'autoplayinterval' => [
                'title'        => 'Auto Play Interval',
                'description'  => 'Interval (in milliseconds) to go for next slide.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Please enter time in milliseconds.',
                'default'     => '2000',
                'group'       => 'Effects',
            ],
            'pauseonhover' => [
                'title'        => 'Pause On Hover',
                'description'  => 'Whether to pause when mouse over if a slider is auto playing.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Effects',
            ],
            'arrowkeynavigation' => [
                'title'        => 'Arrow Key Navigation',
                'description'  => 'Allows keyboard (arrow key) navigation or not.',
                'type'         => 'dropdown',
                'default'      => 'true',
                'group'        => 'Effects',
            ],
            'slideduration' => [
                'title'        => 'Slide Duration',
                'description'  => 'Specifies default duration (swipe) for slide in milliseconds.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Please enter time in milliseconds.',
                'default'     => '500',
                'group'       => 'Effects',
            ],
            'mindragoffset' => [
                'title'        => 'Drag Offset',
                'description'  => 'Minimum drag offset to trigger slide.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '40',
                'group'       => 'Effects',
            ],
            'slidespacing' => [
                'title'        => 'Slide Spacing',
                'description'  => 'Space between each slide in pixels.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '0',
                'group'       => 'Effects',
            ],
            'dragorientation' => [
                'title'        => 'Drag Orientation',
                'description'  => 'Orientation to drag slide.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Effects',
            ],
            'playorientation' => [
                'title'        => 'Play Orientation',
                'description'  => 'Orientation to play slide.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Effects',
            ],
            // Bullet Navigator Options
            'chancetoshow' => [
                'title'        => 'Show',
                'description'  => 'Chance to show.',
                'type'         => 'dropdown',
                'default'      => '2',
                'group'        => 'Bullet Navigator Options',
            ],
            'autocenter' => [
                'title'        => 'Auto Center',
                'description'  => 'Auto center navigator in parent container.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Bullet Navigator Options',
            ],
            'orientation' => [
                'title'        => 'Orientation',
                'description'  => 'The orientation of the navigator.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Bullet Navigator Options',
            ],
            'spacingx' => [
                'title'        => 'Spacing X',
                'description'  => 'Horizontal space between each item in pixel.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '8',
                'group'       => 'Bullet Navigator Options',
            ],
            'spacingy' => [
                'title'        => 'Spacing Y',
                'description'  => 'Vertical space between each item in pixel.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '8',
                'group'       => 'Bullet Navigator Options',
            ],
            'steps' => [
                'title'        => 'Steps',
                'description'  => 'Steps to go for each navigation request.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '1',
                'group'       => 'Bullet Navigator Options',
            ],
            'lanes' => [
                'title'        => 'Lanes',
                'description'  => 'Specify lanes to arrange items.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '1',
                'group'       => 'Bullet Navigator Options',
            ],
            // Arrow Navigator Options
            'chancetoshowarrow' => [
                'title'        => 'Show',
                'description'  => 'Chance to show.',
                'type'         => 'dropdown',
                'default'      => '1',
                'group'        => 'Arrow Navigator Options',
            ],
            'autocenterarrow' => [
                'title'        => 'Auto Center',
                'description'  => 'Auto center navigator in parent container.',
                'type'         => 'dropdown',
                'default'      => '2',
                'group'        => 'Arrow Navigator Options',
            ],
            'stepsarrow' => [
                'title'        => 'Steps',
                'description'  => 'Steps to go for each navigation request.',
                'type'        => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Invalid format.',
                'default'     => '1',
                'group'       => 'Arrow Navigator Options',
            ],
        ];
    }

    public function getidSliderOptions()
    {
        return Slider::select('id', 'name')->orderBy('name')->get()->lists('name', 'id');
    }
    public function getautoplayOptions()
    {
        return [ 'true' => 'True', 'false' => 'False'];
    }
    public function getfillmodeOptions()
    {
        return ['0'=>'Stretch','1'=>'Keep Aspect Ratio','2'=>'Cover Whole Slide','4'=>'Actual Size','5'=>'Contain Large Image'];
    }
    public function gettransactionOptions()
    {
        return [ 
            '0' => 'No Effect',
            '1' => 'Random',
            '2'=> 'Fade Twins',
            '3'=> 'Rotate Overlap',
            '4' => 'Switch',
            '5' => 'Rotate Relay',
            '6' => 'Doors',
            '7' => 'Rotate In+ Out-',
            '8' => 'Fly Twins',
            '9' => 'Rotate In- Out+',
            '10' => 'Rotate Axis Up Overlap',
            '11' => 'Chess Replace TB',
            '12' => 'Chess Replace LR',
            '13' => 'Shift TB',
            '14' => 'Shift LR',
            '15' => 'Return TB',
            '16' => 'Return LR',
            '17' => 'Rotate Axis Down',
            '18' => 'Extrude Replace',
        ];
    }
    public function getpauseonhoverOptions()
    {
        return [ '0' => 'No Pause', '1' => 'Mouse', '2'=> 'Touch', '3'=> 'Mouse & Touch'];
    }
    public function getarrowkeynavigationOptions()
    {
        return [ 'true' => 'True', 'false' => 'False'];
    }
    public function getdragorientationOptions()
    {
        return [ '0' => 'No Drag', '1' => 'Horizontal', '2'=> 'Vertical', '3'=> 'Both'];
    }
    public function getplayorientationOptions()
    {
        return [ '1' => 'Horizontal', '2'=> 'Vertical', '5'=> 'Horizontal Reverse','6'=>'Vertical Reverse'];
    }
    public function getchancetoshowOptions()
    {
        return [ '0' => 'Never', '1'=> 'Mouse Over', '2'=> 'Always'];
    }
    public function getautocenterOptions()
    {
        return [ '0' => 'None', '1'=> 'Horizontal', '2'=> 'Vertical','3'=>'Both'];
    }
    public function getorientationOptions()
    {
        return [ '1' => 'Horizontal', '2'=> 'Vertical'];
    }
    public function getchancetoshowarrowOptions()
    {
        return [ '0' => 'Never', '1'=> 'Mouse Over', '2'=> 'Always'];
    }
    public function getautocenterarrowOptions()
    {
        return [ '0' => 'None', '1'=> 'Horizontal', '2'=> 'Vertical','3'=>'Both'];
    }

    public function onRun()
    {
        $this->addJs('assets/js/jssor.slider.min.js');
        $this->addCss('assets/style/sliderstyle.css');
    }
    public function onRender(){
        $slider = new Slider;
        $this->slider = $this->page['slider'] = $slider->where('id', '=', $this->propertyOrParam('idSlider'))->first();

        $this->page['height']=$this->propertyOrParam('height');
        $this->page['autoplay']=$this->propertyOrParam('autoplay');
        $this->page['fillmode']=$this->propertyOrParam('fillmode');

        $this->page['transaction']=$this->propertyOrParam('transaction');
        $this->page['autoplayinterval']=$this->propertyOrParam('autoplayinterval');
        $this->page['pauseonhover']=$this->propertyOrParam('pauseonhover');
        $this->page['arrowkeynavigation']=$this->propertyOrParam('arrowkeynavigation');
        $this->page['slideduration']=$this->propertyOrParam('slideduration');
        $this->page['mindragoffset']=$this->propertyOrParam('mindragoffset');
        $this->page['slidespacing']=$this->propertyOrParam('slidespacing');
        $this->page['dragorientation']=$this->propertyOrParam('dragorientation');
        $this->page['playorientation']=$this->propertyOrParam('playorientation');
        $this->page['chancetoshow']=$this->propertyOrParam('chancetoshow');
        $this->page['autocenter']=$this->propertyOrParam('autocenter');
        $this->page['orientation']=$this->propertyOrParam('orientation');
        $this->page['spacingx']=$this->propertyOrParam('spacingx');
        $this->page['spacingy']=$this->propertyOrParam('spacingy');
        $this->page['steps']=$this->propertyOrParam('steps');
        $this->page['lanes']=$this->propertyOrParam('lanes');
        $this->page['chancetoshowarrow']=$this->propertyOrParam('chancetoshowarrow');
        $this->page['autocenterarrow']=$this->propertyOrParam('autocenterarrow');
        $this->page['stepsarrow']=$this->propertyOrParam('stepsarrow');
    }
}