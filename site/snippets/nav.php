     <!-- nav -->
     <?php if($page->isHomePage()) {?>
    <nav class="uk-navbar-container nav" uk-scrollspy="cls:nav--transparent" uk-navbar>
        <div class="uk-navbar-left hide-small hide-medium">
            <ul class="uk-navbar-nav nav__ul--left">
                <li class="uk-animation-top">
                    <a class="logo" href="">
                        <img class="" src="assets/img/logo.png" alt="logo">
                    </a>
                </li>
            </ul>
        </div>
        
        
 
        <div class="uk-navbar-right hide-small hide-medium">
            <ul class="uk-navbar-nav nav__ul nav__ul--right" uk-scrollspy-nav="closest: li; scroll:true; offset:40; overflow:false;">
                <li class="nav__list">
                    <a href="#home">Home</a>
                </li>
                <li class="nav__list">
                    <a href="#section-<?php echo str::slug($page->children()->find('about')->navigation_link()->toLower()); ?>"><?php echo $page->children()->find('about')->navigation_link() ?></a>
                </li>
                <li class="nav__list">
                    <a href="#section-<?php echo str::slug($page->children()->find('services')->navigation_link()->toLower()); ?>"><?php echo $page->children()->find('services')->navigation_link() ?></a>
                </li>
                <li class="nav__list">
                    <a href="#section-<?php echo str::slug($site->contact_navigation_link()->toLower()); ?>"><?php echo $site->contact_navigation_link() ?></a>
                </li>
            </ul>
        </div>

       <a href="#mobile-menu" class="tick-mobile toggle--icon uk-hidden@m" uk-toggle="target: .tick-mobile; animation: uk-animation-fade"><i class="fa fa-bars"></i></a>
       <a href="#mobile-menu" class="tick-mobile toggle--icon" hidden uk-toggle="target: .tick-mobile; animation: uk-animation-fade"><i class="fa fa-times"></i></a>
    </nav>

    <section id="mobile-nav" class="tick-mobile uk-text-center uk-width-1-1" hidden>
        <ul>
            <li><a class="menu-link" href="#home" uk-toggle="target: .tick-mobile; animation: uk-animation-fade">Home</a></li>
            <li><a class="menu-link" href="#section-<?php echo str::slug($data_about->navigation_link()->lower())?>" uk-toggle="target: .tick-mobile; animation: uk-animation-fade"><?php echo str_replace('...',' ', excerpt($data_about->navigation_link(),1,'words'))?></a></li>
            <li><a class="menu-link" href="#section-<?php echo str::slug($data_services->navigation_link()->lower())?>" uk-toggle="target: .tick-mobile; animation: uk-animation-fade"><?php echo str_replace('...',' ', excerpt($data_services->navigation_link(),1,'words'))?></a></li>
            <li><a class="menu-link" href="#section-<?php echo str::slug($site->contact_navigation_link()->lower())?>" uk-toggle="target: .tick-mobile; animation: uk-animation-fade"><?php echo str_replace('...',' ', excerpt($site->contact_navigation_link(),1,'words'))?></a></li>
        </ul>
    </section>
<?php } ?>
