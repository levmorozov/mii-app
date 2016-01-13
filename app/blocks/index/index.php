<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta http-equiv="Content-Language" content="ru">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php if($description):?>
        <meta name="description" content="<?php echo $description?>" />
    <?php endif;?>
    <?php foreach($og as $name => $content):?>
        <meta property="og:<?php echo $name?>" content="<?php echo str_replace('"',"'",$content) ?>" />
    <?php endforeach;?>

    <?= Mii::$app->blocks ?>
</head>
<body>
<?php echo $layout?>

<?php if(config('profiling')) \mii\util\Profiler::show();?>

</body>
</html>