<section id="section-<?php echo str::slug($data->navigation_link()->toLower())?>" class="section">
        <div class="content uk-container">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-2">
                    <h1 class="section__header--about"><?php echo $data->about_title()->title() ?></h1>
                </div>
                <div class="uk-width-1-2">
                    <article class="space--top-3 section__text--about">
                       <?php echo $data->about_text()->kt(); ?>
                    </article>
                    <?php if($data->button_text()->isNotEmpty()):; ?>
                    <div class="space--top-2">
                        <a <?php if($data->button_link()->isEmpty()): ?>
                            href="#section-contact"
                        <?php else: ?>  
                            href="<?php echo $data->button_link()->html()?>"
                        <?php endif ?> class="button button--blue uk-button-primary"><?php echo $data->button_text()->html() ?></a>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </section>