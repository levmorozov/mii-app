<?php

namespace app\console;


class Block extends \mii\console\controllers\Block {

    public function block_rules() {
        return [
            path('app').'/blocks' => [
                'i_jquery' => 'do_jquery'
            ],
        ];
    }

}