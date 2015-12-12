<?php

use mii\core\Route;

Route::current_namespace('app\controllers');

Route::set('auth', 'auth/<action>')
    ->defaults([
        'controller' => 'Auth',
        'action'     => 'index',
    ]);



Route::set('page', '<path>', [
    'path' => '(about)'
])
    ->defaults([
        'controller' => 'Page',
        'action'     => 'show',
    ]);


Route::set('mainpage', '')
    ->defaults([
        'controller' => 'Main',
        'action'     => 'index',
    ]);

