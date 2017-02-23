<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => [
        'languageSwitcher',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'languageSwitcher' => [
            'class' => 'common\components\languageSwitcher',
        ],
    ],
];
