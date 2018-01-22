<section id="section-<?php echo str::slug($data->navigation_link()->toLower())?>" class="section section--about">
        <div class="content uk-container">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2@1 uk-width-1-2@s">
                    <h1 class="section__header--about"><?php echo $data->about_title()->title() ?></h1>
                </div>
                <div class="uk-width-1-2@l uk-width-1-2@s">
                    <div class="space--top-3 section__text--about-container">
                    <article class="section__text--about">
                       <?php echo $data->about_text()->kt(); ?>
                    </article>
                    <?php if($data->button_text()->isNotEmpty()):; ?>
                    <div class="space--top-1">
                        <a id="button-about" <?php if($data->button_link()->isEmpty()): ?>
                            href="#section-contact"
                        <?php else: ?>  
                            href="<?php echo $data->button_link()->html()?>"
                        <?php endif ?> class="button button--blue uk-button-primary"><?php echo $data->button_text()->html() ?></a>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>