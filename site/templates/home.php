    <!-- header -->
    <?php snippet('header'); ?>
    <!-- header end -->

    <!-- Herobanner -->
    <?php
    $herobanner = $page->children()->find('herobanner');
    snippet('herobanner', array("data" => $herobanner)); ?>
    <!-- end herobanner -->

    <!-- about us -->
    <?php snippet('about') ?>
    <!-- end about us -->

    <!-- cta -->
    <?php snippet('cta') ?>    
    <!-- end cta -->

    <!-- services -->
    <?php snippet('services') ?>
    <!-- services end -->

    <!-- contact -->
    <?php snippet('contact') ?>
    <!-- contact end -->

    <!-- footer -->
    <?php snippet('footer') ?>
    <!-- footer end -->