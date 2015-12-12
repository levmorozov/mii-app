<nav class='layout_menu'>
    <?php if(is_array($list)):
        $c = 0;
        foreach($list as $item): ?>

            <?php if($item['current']):?>
                <li class='layout_menu__item layout_menu__item__active'>
                    <div class='layout_menu__item__link'>
                        <span class='layout_menu__item_span'><?php echo $item['name'];?></span>
                    </div>
                </li>
            <?php else:?>
                <li class='layout_menu__item'>
                    <a href='<?php echo $item['url']?>' class='layout_menu__item__link'><span class='layout_menu__item_span'><?php echo $item['name']?></span></a>
                </li>
            <?php endif;?>
            <?php $c++; endforeach; endif;?>

</nav>


