<?php

return [
	'plugin' => [
		'name' => 'RJ Slider',
        'description' => 'Vytvářejte responzivní slidery pro všechna zařízení.'
	],
	'misc' => [
		'newslider' => 'Nový slider',
		'sure' => 'Jste si jistí?',
		'remove' => 'Odstranit',
		'title' => 'Titulek',
		'description' => 'Titulek slideru',
		'true' => 'Ano',
		'false' => 'Ne',
		'never' => 'Nikdy',
		'always' => 'Vždy',
		'none' => 'Žádný',
		'mouseover' => 'Po najetí myši',

		'nopause' => 'Bez pauzy',
		'mouse' => 'Pro najetí myši',
		'touch' => 'Pro dotyk',
		'mousentouch' => 'Pro myš i dotyk',

		'stretch' => 'Roztažení',
		'keepratio' => 'Zachovat poměr stran',
		'coverwhole' => 'Zaplnit celý slide',
		'actual' => 'Aktuální rozměr',
		'containlarge' => 'Zobrazí největší obrázek',

		'noeffect' => 'Bez efektu',
		'random' => 'Náhodný',
		'fadetwins'=> 'Fade Twins',
		'rotateoverlap'=> 'Rotate Overlap',
		'switch' => 'Prohození',
		'rotaterelay' => 'Rotate Relay',
		'doors' => 'Ekfet dveře',
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

		'nodrag' => 'Bez chycení',
		'horizontal' => 'Horizontální',
		'vertical' => 'Vertikální',
		'both' => 'Oba směry',
		'horizontalrev' => 'Horizontální otočený',
		'verticalrev' => 'Vertikální otočený'
	],
	'groups' => [
		'options' => 'Základní',
		'effects' => 'Efekty',
		'bulletnav' => 'Nastavení navigace pomocí kuliček',
		'arrownav' => 'Nastavení navigace šipkami'
	],
	'form' => [
		'create' => 'Vytvořit slider',
		'update' => 'Upravit slider',
		'preview' => 'Náhled slideru',
		'manage' => 'Spravovat slider'
	],
	'modeldata' => [
		'name' => 'Název',
		'created' => 'Vytvořeno',
		'updated' => 'Upraveno',
		'images' => 'Obrázky'
	],
	'create' => [
		'sliders' => 'Slidery',
		'creating' => 'Vytvářím slider...',
		'create' => 'Vytvořit',
		'createclose' => 'Vytvořit a zavřít',
		'cancel' => 'Zrušit',
		'or' => 'nebo',
		'return' => 'Zpět na seznam sliderů'
	],
	'update' => [
		'saving' => 'Ukládám slider...',
		'save' => 'Uložit',
		'saveclose' => 'Uložit a zavřít',
		'deleting' => 'Mazání slideru...',
		'reallydelete' => 'Opravdu chcete odstranit tento slider?'
	],
	'menu' => [
		'name' => 'Slidery',
		'description' => 'Zobrazí slider z obrázků dle vaší volby.'
	],

	'idslider' => [
		'title' => 'Slider',
		'description' => 'Zobrazte slider, který se zobrazí.'
	],
	'height' => [
		'title' => 'Výška',
		'description' => 'Výška slideru',
		'validationMessage' => 'Nesprávný formát'
	],
	'autoplay' => [
		'title'        => 'Autospuštění',
		'description'  => 'Autospuštění slideru.'
	],
	'fillmode' => [
		'title'        => 'Režim vyplnění',
		'description'  => 'Vyberte režim, jak obrázek vyplní slide.'
	],

	'transaction' => [
		'title'        => 'Efekt posunu na další',
		'description'  => 'Efekt posunu pokud je aktivní autospuštění.'
	],
	'autoplayinterval' => [
		'title'        => 'Interval autospuštění',
		'description'  => 'Interval (v milisekundách) kdy se jde na další slide.',
		'validationMessage' => 'Zadejte prosím číslo v milisekundách.'
	],
	'pauseonhover' => [
		'title'        => 'Pozastavit po najetí',
		'description'  => 'Pozastaví posun na další slide po najetí myši, nebo při dotyku.'
	],
	'arrowkeynavigation' => [
		'title'        => 'Navigace pomocí kláves',
		'description'  => 'Povolí navigaci pomocí šipek na klávenici.'
	],
	'slideduration' => [
		'title'        => 'Délka trvání přesunu',
		'description'  => 'Jak dlouho (v milisekundách) se bude slide přesouvat na další.',
		'validationMessage' => 'Zadejte prosím číslo v milisekundách.'
	],
	'mindragoffset' => [
		'title'        => 'Ofset pro chycení slidu',
		'description'  => 'Minimální ofset pro chycení slide.',
		'validationMessage' => 'Nesprávný formát.'
	],
	'slidespacing' => [
		'title'        => 'Mezera mezi slide',
		'description'  => 'Mezera mezi každým slide v pixelech.',
		'validationMessage' => 'Nesprávný formát.'
	],
	'dragorientation' => [
		'title'        => 'Orientace chycení slide',
		'description'  => 'Orientace chycení každého slide.'
	],
	'playorientation' => [
		'title'        => 'Orientace přehrávání',
		'description'  => 'Orientace přehrávání slidů.'
	],

	'chancetoshow' => [
		'title'        => 'Zobrazit',
		'description'  => 'Jestli se navigace zobrazí, nebo ne.'
	],
	'autocenter' => [
		'title'        => 'Autocentrování',
		'description'  => 'Automaticky vycentruje navigaci v rodičovském prvku.'
	],
	'orientation' => [
		'title'        => 'Orientace',
		'description'  => 'Orientace navigačního prvku.'
	],
	'spacingx' => [
		'title'        => 'Horizontální mezera',
		'description'  => 'Horizontální mezera (v pixelech) mezi každým prvkem.',
		'validationMessage' => 'Nesprávný formát.'
	],
	'spacingy' => [
		'title'        => 'Vertikální mezera',
		'description'  => 'Vertikální mezera (v pixelech) mezi každým prvkem.',
		'validationMessage' => 'Nesprávný formát.'
	],
	'steps' => [
		'title'        => 'Steps',
		'description'  => 'Steps to go for each navigation request.',
		'validationMessage' => 'Invalid format.'
	],
	'lanes' => [
		'title'        => 'Lanes',
		'description'  => 'Specify lanes to arrange items.',
		'validationMessage' => 'Nesprávný formát.'
	],

	'chancetoshowarrow' => [
		'title'        => 'Zobrazit',
		'description'  => 'Jestli se navigace zobrazí, nebo ne.'
	],
	'autocenterarrow' => [
		'title'        => 'Autocentrování',
		'description'  => 'Autocentrování navigace v rodičovském prvku.'
	],
	'stepsarrow' => [
		'title'        => 'Steps',
		'description'  => 'Steps to go for each navigation request.',
		'validationMessage' => 'Nesprávný formát.'
	]
];
