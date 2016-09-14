<nav class="indigo">
  <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="https://s3.amazonaws.com/localstaffing-resources/templatelegal/img/logo-white.svg" alt="Template Legal"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <?php wp_nav_menu( array( 'theme_location' => 'home-menu', 'menu_id' => 'mobile-menu-bar' ) ); ?>
      </ul>
    </div>
  </div>
</nav>


<nav class="row indigo darken-3 ">
  <div class="container">

    <?php
      wp_nav_menu( array(
          'menu' => 'subnav',
          'theme_location'=>'subnav',
          'menu_id' => 'subnav',
          'menu_class' => 'hide-on-med-and-down',
          'walker' => new wp_materialize_navwalker()
      ));
    ?>
  </div>
</nav>
