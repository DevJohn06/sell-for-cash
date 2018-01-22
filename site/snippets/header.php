<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?php echo $page->title()->title() ?>
    </title>

    <meta name="description" content="<?php echo $page->description()?>">
    <meta name="keywords" content="<?php echo $page->keywords() ?>">
    <!-- OPENGRAPH META -->
    <meta property="og:url" content="<?php echo $page->url() ?>">
    <meta property="og:title" content="<?php echo $page->title() ?>">
    <meta property="og:description" content="<?php echo $page->description() ?>">
    <?php if($img = $page->image($page->mainImage())):?>
    <meta property="og:image" content="<?php echo thumb($img,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>">
    <?php endif?>

    <!-- css links -->
    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/inputstyle.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="assets/plugins/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/plugins/datetimepicker/build/jquery.datetimepicker.min.css">

    <!-- scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/plugins/slick/slick/slick.min.js"></script>
</head>

<body>

<?php 
$about = $page->children()->find('about');
$services = $page->children()->find('services');

snippet('nav', array(
  "data_about" => $about,
  "data_services" => $services
)) ?>