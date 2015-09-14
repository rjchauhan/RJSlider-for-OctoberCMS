<?php

return [
    'plugin' => [
        'name' => 'RJ Slider',
        'description' => 'Responsywne, dotykowe slidery, kompatybilne z dowolnym urządzeniem.'
    ],
    'misc' => [
        'newslider' => 'Nowy Slider',
        'sure' => 'Na pewno?',
        'remove' => 'Usuń',
        'title' => 'Tytuł',
        'description' => 'Tytuł slidera',
        'true' => 'Tak',
        'false' => 'Nie',
        'never' => 'Nigdy',
        'always' => 'Zawsze',
        'none' => 'Brak',
        'mouseover' => 'Mouse Over',

        'nopause' => 'Brak Pauzy',
        'mouse' => 'Mysz',
        'touch' => 'Dotyk',
        'mousentouch' => 'Mysz i Dotyk',

        'stretch' => 'Rozciągniecie',
        'keepratio' => 'Zachowaj proporcje',
        'coverwhole' => 'Pokryj cały slajd',
        'actual' => 'Widoczny Rozmiar',
        'containlarge' => 'Obejmij Duże Obrazy',

        'noeffect' => 'Brak efektu',
        'random' => 'Losowy',
        'fadetwins'=> 'Zanikające bliźnięta',
        'rotateoverlap'=> 'Obrót z nakładaniem',
        'switch' => 'Przełączanie',
        'rotaterelay' => 'Obrot z przekazywaniem',
        'doors' => 'Drzwi',
        'rotateinplusout' => 'Obrót In+ Out-',
        'flytwins' => 'Latające bliźnięta',
        'rotateinminusout' => 'Obrót In- Out+',
        'rotateaxisup' => 'Obrót z nakładaniem osi w górę',
        'chesstb' => 'Szachowa zamiana TB',
        'chesslr' => 'Szachowa zamiana LR',
        'shifttb' => 'Przesunięcie TB',
        'shiftlr' => 'Przesunięcie LR',
        'returntb' => 'Powrót TB',
        'returnlr' => 'Powrót LR',
        'rotateaxisdown' => 'Obrót osią w dół',
        'extrude' => 'Wyciśnięcie',

        'nodrag' => 'Brak przeciągania',
        'horizontal' => 'Horyzontalne',
        'vertical' => 'Wertykalne',
        'both' => 'Oba',
        'horizontalrev' => 'Horyzontalne Obrócone',
        'verticalrev' => 'Wertykalne Obrócone'
    ],
    'groups' => [
        'options' => 'Opcje',
        'effects' => 'Efekty',
        'bulletnav' => 'Opcje Nawigacji Punktami',
        'arrownav' => 'Opcje Nawigacji Strzałkami'
    ],
    'form' => [
        'create' => 'Stwórz Slidery',
        'update' => 'Edytuj Slidery',
        'preview' => 'Podgląd Sliderów',
        'manage' => 'Zarządzaj Sliderami'
    ],
    'modeldata' => [
        'name' => 'Nazwa',
        'created' => 'Stworzono',
        'updated' => 'Edytowano',
        'images' => 'Obrazy'
    ],
    'create' => [
        'sliders' => 'Slidery',
        'creating' => 'Tworzenie Slidera...',
        'create' => 'Stwórz',
        'createclose' => 'Stwórz i zamknij',
        'cancel' => 'Anuluj',
        'or' => 'lub',
        'return' => 'Wróć do listy sliderów'
    ],
    'update' => [
        'saving' => 'Zapisywanie slidera...',
        'save' => 'Zapisz',
        'saveclose' => 'Zapisz i zamknij',
        'deleting' => 'Usuwanie slidera...',
        'reallydelete' => 'Czy na pewno usunąć ten slider?'
    ],
    'menu' => [
        'name' => 'Slider',
        'description' => 'Wyświetla pokaz slajdów z twoimi obrazami i zaawansowaną konfiguracją.'
    ],

    'idslider' => [
        'title' => 'Slider',
        'description' => 'Wybierz slider do wyświetlania'
    ],
    'height' => [
        'title' => 'Wysokość',
        'description' => 'Wysokość slidera.',
        'validationMessage' => 'Niewłaściwy format'
    ],
    'autoplay' => [
        'title'        => 'Tryb automatyczny',
        'description'  => 'Automatycznie odtwarzaj pokaz.'
    ],
    'fillmode' => [
        'title'        => 'Tryb wypełniania',
        'description'  => 'Sposób w jaki obrazy wypełniają slajd.'
    ],

    'transaction' => [
        'title'        => 'Efekt transakcji',
        'description'  => 'Efekty transakcji, kiedy pokaz jest w trybie automatycznym.'
    ],
    'autoplayinterval' => [
        'title'        => 'Interwał trybu auto',
        'description'  => 'Czas (w milisekundach) do przejścia do następnego slajdu.',
        'validationMessage' => 'Podaj wartość w milisekundach.'
    ],
    'pauseonhover' => [
        'title'        => 'Pauza po najechaniu myszą',
        'description'  => 'Wybierz czy pokaz ma się zatrzymać po najechaniu myszą.'
    ],
    'arrowkeynavigation' => [
        'title'        => 'Nawigacja klawiaturą',
        'description'  => 'Wybierz, jeśli chcesz pozwolić na nawigację klawiszami strzałek.'
    ],
    'slideduration' => [
        'title'        => 'Czas trwania slajdu',
        'description'  => 'Domyślny czas trwania slajdu w milisekundach.',
        'validationMessage' => 'Podaj wartość w milisekundach.'
    ],
    'mindragoffset' => [
        'title'        => 'Offset przeciągnięcia',
        'description'  => 'Minimalny offset przeciągnięcia do wywołania slajdu.',
        'validationMessage' => 'Niewłaściwy format.'
    ],
    'slidespacing' => [
        'title'        => 'Rozstaw slajdów',
        'description'  => 'Miejsce między slajdami w pikselach.',
        'validationMessage' => 'Niewłaściwy format.'
    ],
    'dragorientation' => [
        'title'        => 'Orientacja przeciągnięcia',
        'description'  => 'Orientacja przeciągnięcia slajdu.'
    ],
    'playorientation' => [
        'title'        => 'Orientacja odtwarzania',
        'description'  => 'Orientacja odtwarzania slajdów.'
    ],

    'chancetoshow' => [
        'title'        => 'Pokaż',
        'description'  => 'Szanse na pokazanie.'
    ],
    'autocenter' => [
        'title'        => 'Autośrodkowanie',
        'description'  => 'Automatycznie środkuj nawigację w kontenerze.'
    ],
    'orientation' => [
        'title'        => 'Orientacja',
        'description'  => 'Orientacja nawigacji.'
    ],
    'spacingx' => [
        'title'        => 'Rozstaw X',
        'description'  => 'Horyzontalny rozstaw między pozycjami w pikselach.',
        'validationMessage' => 'Niewłaściwy format.'
    ],
    'spacingy' => [
        'title'        => 'Rozstaw Y',
        'description'  => 'Wertykalny rozstaw pomiędzy pozycjami w pikselach.',
        'validationMessage' => 'Niewłaściwy format.'
    ],
    'steps' => [
        'title'        => 'Kroki',
        'description'  => 'Kroki do przejścia dla każdego wywołania nawigacyjnego.',
        'validationMessage' => 'Niewłaściwy format.'
    ],
    'lanes' => [
        'title'        => 'Tory',
        'description'  => 'Okreś tory do rozmieszczenia pozycji.',
        'validationMessage' => 'Niewłaściwy format.'
    ],

    'chancetoshowarrow' => [
        'title'        => 'Pokaż',
        'description'  => 'Szanse na pokazanie.'
    ],
    'autocenterarrow' => [
        'title'        => 'Autośrodkowanie',
        'description'  => 'Automatycznie środkuj nawigację w kontenerze.'
    ],
    'stepsarrow' => [
        'title'        => 'Kroki',
        'description'  => 'Kroki do przejścia dla każdego wywołania nawigacyjnego.',
        'validationMessage' => 'Niewłaściwy format.'
    ]
];
