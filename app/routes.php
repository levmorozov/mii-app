<?php

use mii\core\Route;

Route::set('auth', 'auth/<action>')
    ->defaults([
        'controller' => 'Auth',
        'action'     => 'index',
    ]);


Route::set('mainpage', '')
    ->defaults([
        'controller' => 'Main',
        'action'     => 'index',
    ]);

