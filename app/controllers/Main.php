<?php

namespace app\controllers;


class Main extends Base {



    public function index() {

        $this->title = 'Mainpage';

        $this->content = block('main')->render(true);
    }


}
