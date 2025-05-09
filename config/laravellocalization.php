<?php

return [
    // Указываем поддерживаемые локали
    'supportedLocales' => [
        'en' => [
            'name' => 'English',
            'script' => 'Latn',
            'native' => 'English',
        ],
        'kk' => [
            'name' => 'Kazakh',
            'script' => 'Cyrl',
            'native' => 'Қазақша',
        ],
    ],

    // Устанавливаем локаль по умолчанию
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
];
