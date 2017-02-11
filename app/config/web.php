<?php

return [
    'components' => [
        'log' => [
            'class' => 'mii\log\Logger',
            'targets' => [
                [
                    'class' => '\mii\log\File',
                    'levels' => mii\log\Logger::ALL,
                    'file' => '@app/logs/mii.log',
                    'category' => ['mii']
                ]
            ]
        ],

        'router' => [
            'routes' => require(__DIR__.'/routes.php')
        ],
    ]
];