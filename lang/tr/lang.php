<?php

return [
    'plugin' => [
        'name' => 'Slayt',
        'description' => 'Dokunmaya duyarlı tasarımı ile web siteniz için slayt gösterisi oluşturabilirsiniz.'
    ],
    'permissions' => [
        'all' => 'Manage sliders'
    ],
    'misc' => [
    	'newslider' => 'Yeni Slayt',
    	'sure' => 'Silmek istediğinize emin misiniz?',
    	'remove' => 'Sil',
        'title' => 'Başlık',
        'description' => 'Slaytın başlığı',
        'true' => 'Evet',
        'false' => 'Hayır',
        'never' => 'Asla',
        'always' => 'Daima',
        'none' => 'Hiçbiri',
        'mouseover' => 'Fare Üzerine Geldiğinde',

        'nopause' => 'Duraklama Yok',
        'mouse' => 'Fare',
        'touch' => 'Dokunma',
        'mousentouch' => 'Fare & Dokunma',

        'stretch' => 'Gergin',
        'keepratio' => 'En-Boy Oranı Sabit',
        'coverwhole' => 'Tüm Slaytı Kapla',
        'actual' => 'Kendi Boyutu',
        'containlarge' => 'Büyük Resim İçeriyor',

        'noeffect' => 'Efekt Yok',
        'random' => 'Rastgele',
        'fadetwins'=> 'Solan İkili',
        'rotateoverlap'=> 'Kendi Üzerine Döndür',
        'switch' => 'Değişim',
        'rotaterelay' => 'Dönme Gecikmesi',
        'doors' => 'Kapılar',
        'rotateinplusout' => 'İçe+ Dışa- Döndür',
        'flytwins' => 'Uçan İkili',
        'rotateinminusout' => 'İçe- Dışa+ Döndür',
        'rotateaxisup' => 'Eksende Yukarı Yönelt',
        'chesstb' => 'TB Satranç Değiştir',
        'chesslr' => 'LR Satranç Değiştir',
        'shifttb' => 'TB Değiştir',
        'shiftlr' => 'LR Değiştir',
        'returntb' => 'TB Geri Döndür',
        'returnlr' => 'LR Geri Döndür',
        'rotateaxisdown' => 'Eksende Aşağı Yönelt',
        'extrude' => 'Sıkıştırarak Değiştir',

        'nodrag' => 'Sürükleme Yok',
        'horizontal' => 'Yatay',
        'vertical' => 'Dikey',
        'both' => 'Her ikisi de',
        'horizontalrev' => 'Ters Yatay',
        'verticalrev' => 'Ters Dikey'
    ],
    'groups' => [
        'options' => 'Ayarlar',
        'effects' => 'Efektler',
        'bulletnav' => 'Alt Nokta Yönlendirme Ayarları',
        'arrownav' => 'Ok Yönlendirme Ayarları'
    ],
    'form' => [
    	'create' => 'Slayt Oluştur',
    	'update' => 'Slaytları Güncelle',
    	'preview' => 'Slaytları Önizle',
    	'manage' => 'Slaytları Yönet'
    ],
    'modeldata' => [
    	'name' => 'Slayt Adı',
    	'created' => 'Oluşturulma',
    	'updated' => 'Güncellenme',
    	'images' => 'Resimler'
    ],
    'create' => [
    	'sliders' => 'Slaytlar',
    	'creating' => 'Slayt Oluşturuluyor...',
    	'create' => 'Oluştur',
    	'createclose' => 'Oluştur ve Kapat',
    	'cancel' => 'İptal',
    	'or' => 'veya',
    	'return' => 'Slayt listesine geri dön'
    ],
    'update' => [
    	'saving' => 'Slayt Kaydediliyor...',
    	'save' => 'Kaydet',
    	'saveclose' => 'Kaydet ve Kapat',
    	'deleting' => 'Slayt Siliniyor...',
    	'reallydelete' => 'Slaytı silmek istediğinize emin misiniz?'
    ],
    'menu' => [
    	'name' => 'Slayt',
        'description' => 'Tam ekran önizleme ve slayt gösterisi olan bir fotoğraf galerisi oluşturun'
    ],

    'idslider' => [
        'title' => 'Slayt Galerisi',
        'description' => 'Gösterilecek slaytı seçin'
    ],
    'height' => [
        'title' => 'Yükselik',
        'description' => 'Slaytın boy yükseliği.',
        'validationMessage' => 'Geçersiz format'
    ],
    'autoplay' => [
        'title'        => 'Otomatik Oynat',
        'description'  => 'Slaytı otomatik başlat.'
    ],
    'fillmode' => [
        'title'        => 'Dolgu Modu',
        'description'  => 'Resmin slaytı nasıl dolduracağı seçeneği.'
    ],

    'transaction' => [
        'title'        => 'Geçiş Efekti',
        'description'  => 'Slayt başladığında uygulanacak geçiş efekti.'
    ],
    'autoplayinterval' => [
        'title'        => 'Otomatik Oynatma Süresi',
        'description'  => 'Sonraki slayta geçmek için beklenecek süre (milisaniye).',
        'validationMessage' => 'Süreyi milisaniye olarak girin.'
    ],
    'pauseonhover' => [
        'title'        => 'Vurgulandığında Durma',
        'description'  => 'Fare slaytın üzerie geldiğinde slaytı durdur.'
    ],
    'arrowkeynavigation' => [
        'title'        => 'Yön Tuşları',
        'description'  => 'Klavye yön tuşları kullanılsın mı?'
    ],
    'slideduration' => [
        'title'        => 'Slayt Süresi',
        'description'  => 'Her bir slayt için bekleme süresi (milliseconds).',
        'validationMessage' => 'Süreyi milisaniye olarak girin.'
    ],
    'mindragoffset' => [
        'title'        => 'Sürükleme',
        'description'  => 'Slaytı tetiklemek için gereken sürükleme değeri',
        'validationMessage' => 'Geçersiz format.'
    ],
    'slidespacing' => [
        'title'        => 'Slayt Arası Boşluk',
        'description'  => 'Her bir slayt arasındaki piksel olarak boşluk.',
        'validationMessage' => 'Geçersiz format.'
    ],
    'dragorientation' => [
        'title'        => 'Sürükleme Yönlendirmesi',
        'description'  => 'Slaytı kaydırma için yönlendirme.'
    ],
    'playorientation' => [
        'title'        => 'Oynatma Yönlendirmesi',
        'description'  => 'Slaytı oynatmak için yönlendirme.'
    ],

    'chancetoshow' => [
        'title'        => 'Göster',
        'description'  => 'Gösterim şansı.'
    ],
    'autocenter' => [
        'title'        => 'Merkezde Göster',
        'description'  => 'Yön tuşlarını merkezde göster.'
    ],
    'orientation' => [
        'title'        => 'Yerleşim',
        'description'  => 'Yönlendirmenin yerleşimi.'
    ],
    'spacingx' => [
        'title'        => 'Yatay Boşluk',
        'description'  => 'Yatay olarak her bir nesne arasındaki boşluk.',
        'validationMessage' => 'Geçersiz format.'
    ],
    'spacingy' => [
        'title'        => 'Dikey Boşluk',
        'description'  => 'Dikey olarak her bir nesne arasındaki boşluk.',
        'validationMessage' => 'Geçersiz format.'
    ],
    'steps' => [
        'title'        => 'Basamak',
        'description'  => 'Her bir yönlendirme isteği için basamak.',
        'validationMessage' => 'Geçersiz format.'
    ],
    'lanes' => [
        'title'        => 'Satır',
        'description'  => 'Görselleri düzenlemek için satır mantığı kullan.',
        'validationMessage' => 'Geçersiz format.'
    ],

    'chancetoshowarrow' => [
        'title'        => 'Göster',
        'description'  => 'Gösterim şansı.'
    ],
    'autocenterarrow' => [
        'title'        => 'Merkezde Göster',
        'description'  => 'Yön tuşlarını merkezde göster.'
    ],
    'stepsarrow' => [
        'title'        => 'Basamak',
        'description'  => 'Her bir yönlendirme isteği için basamak.',
        'validationMessage' => 'Geçersiz format.'
    ]
];
