<section class="section section--cta overlay filter" style="background-image: <?php if($img = $site->image($site->cta_background())): ?> url('<?php echo thumb($img,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') <?php endif ?>">
        <div class="content uk-container">
            <div class="content-index-1 content--center ">
                <div class="content--center">
                    <h1 class="header--cta">
                        <?php echo $site->cta_text()->html() ?>
                    </h1>
                </div>
                <div class="space--top-2">
                 <?php if($site->cta_button_text()->isNotEmpty()): ?>
                    <a
                     <?php if($site->cta_button_link()->isEmpty()): ?>
                        href="#section-contact" 
                     <?php else: ?>
                        href="<?php echo $site->cta_button_link() ?>"
                    <?php endif?>
                     class="button button--blue uk-button-primary">Contact us!</a>
                <?php endif ?>
                </div>
            </div>
        </div>
    </section>