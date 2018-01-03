</body>
<footer>
    <section class="section section--footer text--white">
        <div uk-grid class="content">
            <div class="uk-width-1-1@m uk-width-1-2@m uk-width-1-3@l">
                <div class="footer--text">
                  <?php echo $site->mailing_address()->kt(); ?>
                </div>
            </div>
            <div class="uk-width-1-1@m uk-width-1-2@m uk-width-1-3@l">
                <div class="social-media">
                    <ul class="social-icons">
                     <?php if($site->social_facebook()->isNotEmpty()): ?>
                        <li>
                            <a href="<?php echo $site->social_facebook()?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif; 
                        if($site->social_twitter()->isNotEmpty()):
                    ?>
                        <li>
                            <a href="<?php echo $site->social_twitter() ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif; 
                        if($site->social_linkedin()->isNotEmpty()):
                    ?>
                        <li>
                            <a href="<?php echo $site->social_linkedin()?>">
                                <i class="fa fa-linkedin"></i>
                            </a>    
                        </li>
                    <?php endif;
                        if($site->social_instagram()->isNotEmpty()):
                    ?>
                        <li>
                            <a href="<?php echo $site->social_instagram() ?>">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif; 
                        if($site->social_youtube()->isNotEmpty()):
                    ?>
                        <li>
                            <a href="<?php echo $site->social_youtube() ?>">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    <?php endif; 
                        if($site->display_email()->isNotEmpty()):
                    ?>
                        <li>
                            <a href="mailto:<?php echo $site->display_email() ?>">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    <?php endif ?>
                    </ul>
                   
                </div>

            </div>
            <div class="uk-width-1-1@m uk-width-1-2@m uk-width-1-3@l">
                <div class="content--terms">
                    <?php if($site->terms_text()->isNotEmpty()){ ?>
                        <a href="#terms-modal" uk-toggle><?php echo $site->terms_title()->title() ?></a>
                    <?php } if($site->terms_text()->isNotEmpty() and $site->privacy_text()->isNotEmpty()) { ?>
                        <span>|</span>
                    <?php } if($site->privacy_text()->isNotEmpty()){ ?>
                        <a href="#privacy-modal" uk-toggle><?php echo $site->privacy_title()->title()?></a>
                    <?php } ?>        
                </div>
                <div class="content--copyright space--top-2">
                    <h5><?php echo $site->footer_text() ?></h5>
                </div>
            </div>

            <!-- terms modal -->
            <div id="terms-modal" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title text--color-blue"><?php echo $site->terms_title()->title() ?></h2>
                    <?php echo $site->terms_text()->kt() ?>

                </div>
            </div>
            <!-- end terms modal-->

            <!-- terms modal -->
            <div id="privacy-modal" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <h2 class="uk-modal-title text--color-blue"><?php echo $site->privacy_title()->title() ?></h2>
                    <?php echo $site->privacy_text()->kt() ?>
                </div>
            </div>
            <!-- end terms modal-->

        </div>
    </section>
    <!-- js scripts -->
    <script src="assets/js/classie.js"></script>
    <script src="assets/uikit/js/uikit.min.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="assets/plugins/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
</footer>

</html>