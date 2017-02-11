<?php

namespace app\controllers;


use mii\util\URL;

class Main extends Base {



    public function index() {

        $this->title = 'Mainpage';

        $this->content = block('main')->render(true);
    }


}
