<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2015-07-14 22:50:20
 */
return [
    'posHead' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/themes/basic',
        'baseUrl' => '@web/themes/basic',
        'js' => [
            'all-1749055af8219db329022b5b7509dd2b-head.js',
        ],
        'css' => [
            'all-11d6bf0ef633c65dd1f2d3bcc4e5f020-head.css',
        ],
    ],
    'posEnd' => [
        'class' => 'yii\\web\\AssetBundle',
        'basePath' => '@webroot/themes/basic',
        'baseUrl' => '@web/themes/basic',
        'js' => [
            'all-4d165e83940d8c2601d9640c8daff7de-end.js',
        ],
        'css' => [],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'posHead',
        ],
    ],
    'frontend\\assets\\LtIE9Asset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'posHead',
        ],
    ],
    'frontend\\assets\\HeadAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'frontend\\assets\\LtIE9Asset',
            'posHead',
        ],
    ],
    'frontend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'posEnd',
        ],
    ],
];