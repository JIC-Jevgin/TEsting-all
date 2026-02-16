<?php
$translations = [
    'cs' => [
        'nav-home' => 'Domů',
        'nav-gallery' => 'Galerie',
        'nav-printer' => 'Tiskárna',
        'nav-contact' => 'Kontakt',
        'hero-title' => 'JIC 3D Tisk',
        'cta-button' => 'Objednat tisk',
        // ... (zkráceno, zde vložte zbytek českých textů z vašeho JS)
        'footer-slogan' => 'Profesionální 3D tisk nejvyšší kvality'
    ],
    'ru' => [
        'nav-home' => 'Главная',
        // ... (zkráceno, zde vložte ruské texty)
    ],
    'ua' => [
        'nav-home' => 'Головна',
        // ... (zkráceno, zde vložte ukrajinské texty)
    ]
];

// Detekce jazyka (výchozí je CZ)
$lang = isset($_GET['lang']) && array_key_exists($_GET['lang'], $translations) ? $_GET['lang'] : 'cs';
$t = $translations[$lang];
?>
