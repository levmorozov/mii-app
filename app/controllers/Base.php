<?php

namespace app\controllers;

use mii\web\Controller;

class Base extends Controller {

    public $layout_depends = [
        'i_jquery',
    ];

    public function access_rules() {
        $this->acl->allow('*');
    }

}