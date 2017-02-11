<?php

return [

    'app\controllers' => [

        '/' => 'main',

        '{page}' => [
            'path' => 'page:show',
            'params' => [
                'page' => '(?:(about))'
            ]
        ]

    ]

];