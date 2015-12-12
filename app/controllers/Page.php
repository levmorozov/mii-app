<?php
namespace app\controllers;

class Page extends Base {


    public function show($path) {

        $this->content = block('layout_page')
                ->set('path', $path);
    }

}