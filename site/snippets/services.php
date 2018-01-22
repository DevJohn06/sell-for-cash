<section id="section-<?php echo str::slug($data->navigation_link()->toLower()); ?>" class="section section__services">
    <div class="slick-slider">
    <?php $services_items = $data->services_items()->toStructure();
             foreach($services_items as $item):
        ?>
        <div>
            <div class="uk-grid-collapse section__content--services" uk-grid>
                <div class="uk-width-1-2@l uk-width-1-1@s uk-overflow-hidden">
                    <img src="<?php if($img = $data->image($item->service_image())){ echo thumb($img,array('width'=>2500, 'height'=>1500, 'crop'=>false))->url(); }?> " alt="" class="img" uk-scrollspy="cls:uk-animation-kenburns uk-animation-reverse; repeat: true">
                </div>

                <div class="uk-width-1-2@l uk-width-1-1@s  section--background-services overlay filter-white" style="background-image: <?php if($img = $data->image($data->bkg_img())): ?> url('<?php echo thumb($img,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') <?php endif ?>">
                    <div class="content uk-container section__inner--services">
                        <h1 class="section__header--services">
                            <?php echo $item->service_title()->title() ?>
                        </h1>
                        <div class="section__text--services">
                           <?php echo $item->service_text()->kt() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
</section>