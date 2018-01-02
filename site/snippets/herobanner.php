<section id="home" class="space--top-5 section overlay filter section--herobanner" style="background-image: <?php if($img = $data->image($data->bkg_img())): ?> url('<?php echo thumb($img,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') <?php endif ?>">
    <div class="uk-container">
        <div class="content content--center content--index-1">

            <div>
                <h1 class="header--herotitle">
                    <?php echo $data->banner_text()->title() ?>
                </h1>
                <h2 class="space--no-margin text--white">
                    <?php echo $data->tagline()->html() ?>
                </h2>
            </div>

            <div class="icon--content text--white space--top-2" uk-grid>
             <?php $icon_items = $data->icon_items()->toStructure();
                foreach($icon_items as $item):
              ?> 
                <div class="icon--no-padding uk-width-1-3">
                    <div class="content--center">
                        <i class="icon--herobanner fa fa-<?php echo $item->icon() ?>"></i>
                        <div class="icon--text-width space--top-1">
                            <span class="span--herobanner"><?php echo $item->icon_text()->html(); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>

            <!-- form -->
            <div class="form__container">
                <form action="" class="space--top-3">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-1-5">
                            <div class="content--center">
                                <span class="input input--kohana">
                                    <input class="input__field--section-home input__field input__field--kohana" type="text" id="fname" />
                                    <label class="input__label--section-home input__label input__label--kohana" for="fname">
                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana">First name</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-1-5">
                            <div class="content--center">
                                <span class="input input--kohana">
                                    <input class="input__field--section-home input__field input__field--kohana" type="text" id="lname" />
                                    <label class="input__label--section-home input__label input__label--kohana" for="lname">
                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana">Last name</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-1-5">
                            <div class="content--center">
                                <span class="input input--kohana">
                                    <input class="input__field--section-home input__field input__field--kohana" type="text" id="phone" />
                                    <label class="input__label--section-home input__label input__label--kohana" for="phone">
                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana">Phone</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-1-5">
                            <div class="content--center">
                                <span class="input input--kohana">
                                    <input class="input__field--section-home input__field input__field--kohana" type="text" id="email" />
                                    <label class="input__label--section-home input__label input__label--kohana" for="email">
                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana">Email</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-1-5">
                            <div class="content--center">
                                <span class="input input--kohana">
                                    <input class="input__field--section-home input__field input__field--kohana" type="text" id="address" />
                                    <label class="input__label--section-home input__label input__label--kohana" for="address">
                                        <i class="fa fa-fw uk-icon-phone icon icon--kohana"></i>
                                        <span class="input__label-content input__label-content--kohana">Property address</span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="content-center space--top-5">
                        <input class="button button--blue uk-button-primary" type="submit">
                    </div>
                </form>
            </div>


            <!-- end form -->
        </div>
    </div>
</section>
