    <!-- nav -->
    <nav class="uk-navbar-container nav" uk-scrollspy="cls:nav--transparent" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav nav__ul--left">
                <li class="uk-animation-top">
                    <a class="logo" href="">
                        <img class="" src="assets/img/logo.png" alt="logo">
                    </a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
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
    </nav>