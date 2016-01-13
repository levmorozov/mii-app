<?php

return [

    'app\controllers' => [

        '/' => 'test/Bar',

        'show_{controller}' => 'main',

        '{page}' => [
            'path' => 'page:show',
            'params' => [
                'page' => '(?:(about))'
            ]
        ]

    ]

];