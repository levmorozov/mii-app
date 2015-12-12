<?php

namespace app\controllers;

use mii\web\Controller;
use mii\web\Menu;

class Base extends Controller {

    public $layout_depends = [
        'i_jquery',
    ];

    public function access_rules() {
        $this->acl->allow('*');
    }


    public function before() {
        parent::before();

        if (!$this->request->is_ajax()) {
            $this->main_menu();
        }

        return true;
    }


    protected function main_menu() {

        $menu = new Menu([
            [
                'name' => 'Главная',
                'url' => '/'
            ],
            [
                'name' => 'О проекте',
                'url' => '/about'
            ],
        ], 'layout_menu');

        $menu->render();
    }

}