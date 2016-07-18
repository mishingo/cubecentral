<nav class="row background-primary ">
    <div class="container">
        <div class="row paxs plm prl dont-respond">
            <div class="col-7of12">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="https://s3.amazonaws.com/localstaffing-resources/orb/img/logo-small.svg">
                </a>
            </div>
            <div class="col-3of12 dn-d push--m">
                <i id="mobile-menu-action" class="i-menu--m push--m"></i>
            </div>
            <div class="col-5of12 dn-m">
                <ul class="nav-list">
                    <li><a class="tc-white ta-center" href="https://app.onlineresumebuilders.com/login">Login</a> </li>
                    <li><a class="background-tertiary ta-center  br-30 plm prm paxs btn-start" href="https://app.onlineresumebuilders.com/basicinfo"> Get Started</a> </li>
                <ul>
            </div>
        </div>
    </div>
    <div class="row background-secondary dn-m">
        <div class="container plm prm">
        <?php wp_nav_menu( array( 'theme_location' => 'parent-bar', 'menu_id' => 'parent-bar' ) ); ?>
        </div>
    </div>
    <div class="row background-secondary" id="mobile-menu-display" >
        <div class="container plm prm">
        <?php wp_nav_menu( array( 'theme_location' => 'home-menu', 'menu_id' => 'mobile-menu-bar' ) ); ?>
        </div>
    </div>
</nav>
