<?php

return [
    'plugin' => [
        'name' => 'RJ Slider',
        'description' => 'Create a touch responsive slideshow with device independent design.'
    ],
    'permissions' => [
        'all' => 'Manage sliders'
    ],
    'misc' => [
    	'newslider' => 'New Slider',
    	'sure' => 'Are you sure?',
    	'remove' => 'Remove',
        'title' => 'Title',
        'description' => 'Title of the slider',
        'true' => 'True',
        'false' => 'False',
        'never' => 'Never',
        'always' => 'Always',
        'none' => 'None',
        'mouseover' => 'Mouse Over',

        'nopause' => 'No Pause',
        'mouse' => 'Mouse',
        'touch' => 'Touch',
        'mousentouch' => 'Mouse & Touch',

        'stretch' => 'Stretch',
        'keepratio' => 'Keep Aspect Ratio',
        'coverwhole' => 'Cover Whole Slide',
        'actual' => 'Actual Size',
        'containlarge' => 'Contain Large Image',

        'noeffect' => 'No Effect',
        'random' => 'Random',
        'fadetwins'=> 'Fade Twins',
        'rotateoverlap'=> 'Rotate Overlap',
        'switch' => 'Switch',
        'rotaterelay' => 'Rotate Relay',
        'doors' => 'Doors',
        'rotateinplusout' => 'Rotate In+ Out-',
        'flytwins' => 'Fly Twins',
        'rotateinminusout' => 'Rotate In- Out+',
        'rotateaxisup' => 'Rotate Axis Up Overlap',
        'chesstb' => 'Chess Replace TB',
        'chesslr' => 'Chess Replace LR',
        'shifttb' => 'Shift TB',
        'shiftlr' => 'Shift LR',
        'returntb' => 'Return TB',
        'returnlr' => 'Return LR',
        'rotateaxisdown' => 'Rotate Axis Down',
        'extrude' => 'Extrude Replace',

        'nodrag' => 'No Drag',
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
        'both' => 'Both',
        'horizontalrev' => 'Horizontal Reverse',
        'verticalrev' => 'Vertical Reverse'
    ],
    'groups' => [
        'options' => 'Options',
        'effects' => 'Effects',
        'bulletnav' => 'Bullet Navigator Options',
        'arrownav' => 'Arrow Navigator Options'
    ],
    'form' => [
    	'create' => 'Create Sliders',
    	'update' => 'Update Sliders',
    	'preview' => 'Preview Sliders',
    	'manage' => 'Manage Sliders'
    ],
    'modeldata' => [
    	'name' => 'Name',
    	'created' => 'Created',
    	'updated' => 'Updated',
    	'images' => 'Images'
    ],
    'create' => [
    	'sliders' => 'Sliders',
    	'creating' => 'Creating Slider...',
    	'create' => 'Create',
    	'createclose' => 'Create and Close',
    	'cancel' => 'Cancel',
    	'or' => 'or',
    	'return' => 'Return to sliders list'
    ],
    'update' => [
    	'saving' => 'Saving Slider...',
    	'save' => 'Save',
    	'saveclose' => 'Save and Close',
    	'deleting' => 'Deleting Slider...',
    	'reallydelete' => 'Do you really want to delete this slider?'
    ],
    'menu' => [
    	'name' => 'Slider',
        'description' => 'Display a slideshow for your images with advance options.'
    ],

    'idslider' => [
        'title' => 'Slider',
        'description' => 'Choose the slider that will display'
    ],
    'height' => [
        'title' => 'Height',
        'description' => 'Height of slider.',
        'validationMessage' => 'Invalid format'
    ],
    'autoplay' => [
        'title'        => 'Autoplay',
        'description'  => 'Autoplay slideshow.'
    ],
    'fillmode' => [
        'title'        => 'Fill Mode',
        'description'  => 'The way to fill image in slide.'
    ],

    'transaction' => [
        'title'        => 'Transaction Effect',
        'description'  => 'Transaction effects when a slider is auto playing.'
    ],
    'autoplayinterval' => [
        'title'        => 'Auto Play Interval',
        'description'  => 'Interval (in milliseconds) to go for next slide.',
        'validationMessage' => 'Please enter time in milliseconds.'
    ],
    'pauseonhover' => [
        'title'        => 'Pause On Hover',
        'description'  => 'Whether to pause when mouse over if a slider is auto playing.'
    ],
    'arrowkeynavigation' => [
        'title'        => 'Arrow Key Navigation',
        'description'  => 'Allows keyboard (arrow key) navigation or not.'
    ],
    'slideduration' => [
        'title'        => 'Slide Duration',
        'description'  => 'Specifies default duration (swipe) for slide in milliseconds.',
        'validationMessage' => 'Please enter time in milliseconds.'
    ],
    'mindragoffset' => [
        'title'        => 'Drag Offset',
        'description'  => 'Minimum drag offset to trigger slide.',
        'validationMessage' => 'Invalid format.'
    ],
    'slidespacing' => [
        'title'        => 'Slide Spacing',
        'description'  => 'Space between each slide in pixels.',
        'validationMessage' => 'Invalid format.'
    ],
    'dragorientation' => [
        'title'        => 'Drag Orientation',
        'description'  => 'Orientation to drag slide.'
    ],
    'playorientation' => [
        'title'        => 'Play Orientation',
        'description'  => 'Orientation to play slide.'
    ],

    'chancetoshow' => [
        'title'        => 'Show',
        'description'  => 'Chance to show.'
    ],
    'autocenter' => [
        'title'        => 'Auto Center',
        'description'  => 'Auto center navigator in parent container.'
    ],
    'orientation' => [
        'title'        => 'Orientation',
        'description'  => 'The orientation of the navigator.'
    ],
    'spacingx' => [
        'title'        => 'Spacing X',
        'description'  => 'Horizontal space between each item in pixel.',
        'validationMessage' => 'Invalid format.'
    ],
    'spacingy' => [
        'title'        => 'Spacing Y',
        'description'  => 'Vertical space between each item in pixel.',
        'validationMessage' => 'Invalid format.'
    ],
    'steps' => [
        'title'        => 'Steps',
        'description'  => 'Steps to go for each navigation request.',
        'validationMessage' => 'Invalid format.'
    ],
    'lanes' => [
        'title'        => 'Lanes',
        'description'  => 'Specify lanes to arrange items.',
        'validationMessage' => 'Invalid format.'
    ],

    'chancetoshowarrow' => [
        'title'        => 'Show',
        'description'  => 'Chance to show.'
    ],
    'autocenterarrow' => [
        'title'        => 'Auto Center',
        'description'  => 'Auto center navigator in parent container.'
    ],
    'stepsarrow' => [
        'title'        => 'Steps',
        'description'  => 'Steps to go for each navigation request.',
        'validationMessage' => 'Invalid format.'
    ]
];
