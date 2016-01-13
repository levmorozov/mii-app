<?php
namespace app\controllers;

class Page extends Base {


    public function show($page) {

        $this->content = block('layout_page')
                ->set('path', $page);
    }

}