<?php snippet('header') ?>

<section class="section section__help">
    <div class="help-container">
        <h1><?php echo $page->help_title()->title() ?></h1>
        <?php echo $page->help_text()->kt() ?>
    </div>
</section>