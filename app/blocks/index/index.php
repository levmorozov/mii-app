<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php echo $title;?></title>
    <meta charset='utf-8'>
    <?php if($description):?>
        <meta name="description" content="<?php echo $description?>" />
    <?php endif;?>
    <?php foreach($og as $name => $content):?>
        <meta property="og:<?php echo $name?>" content="<?php echo str_replace('"',"'",$content) ?>" />
    <?php endforeach;?>

    <?php foreach ($links as $link): ?>
        <?= '<link' . mii\util\HTML::attributes($link) . '/>' ?>
    <?php endforeach; ?>

    <?= Mii::$app->blocks->css(); ?>
    <?= Mii::$app->blocks->js(\mii\web\Blocks::HEAD); ?>
</head>
<body>

<?= Mii::$app->blocks->js(\mii\web\Blocks::BEGIN); ?>
<?php echo $layout?>
<?= Mii::$app->blocks->js(\mii\web\Blocks::END); ?>
<?php if(config('debug')) \mii\util\Profiler::show();?>

</body>
</html>