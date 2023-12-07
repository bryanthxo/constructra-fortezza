<!doctype html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#feed01"/>
<title><?php the_title(); ?> | Fortezza | Grupo Constructor</title>
<meta name="author" content="bryanthxo">
<meta name="description" content="For all kind of construction company website">
<meta name="keywords" content="Fortezza, business, construction, company, industrial, building, projects, corporate, apartments, flat, condo, brick, website, design, animation, transition, themezinho">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Fortezza | Industrial Construction Company">
<meta property="og:type" content="website">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/lineicons.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/odometer.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/fancybox.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
</head>
<body>
<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->
<div class="search-box">
  <div class="inner">
      <?php get_search_form(); ?>
  </div>
</div>
<!-- end search-box -->
<aside class="side-widget">
  <div class="inner">
  <div class="logo">
    <?php if( has_custom_logo() ):  ?>
        <?php 
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $custom_logo_url = $custom_logo_data[0];
        ?>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
           rel="home">

            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

        </a>
    <?php else: ?>
        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
    <?php endif; ?>
  </div>
    <!-- <div class="logo"> <a href="index.html"><img src="<?php bloginfo('template_url');?>/images/LOGO-BLANCO-FORTEZZA.png" alt="Image"></a> </div> -->
    <!-- end logo -->
    <div class="hide-mobile">
      <p>Extremity direction existence as dashwoods do up. Securing <u>marianne led</u> welcomed offended but offering six raptures. </p>
      <figure class="gallery"><img src="<?php bloginfo('template_url');?>/images/EDIFICIO-FORTEZZA.jpg" alt="Image"><img src="<?php bloginfo('template_url');?>/images/slide03.jpg" alt="Image"></figure>
      <h6 class="widget-title">ADDRESS</h6>
      <address class="address">
      <p>228 Cardigan Road, Leeds<br>
        Geneva Switzerland</p>
      <p>+1 (850) 344 0 66 #20</p>
      </address>
      <h6 class="widget-title">SIGUENOS</h6>
      <ul class="social-media">
        <!-- <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li> -->
        <?php wp_nav_menu(array(
        'theme_location' => 'redes-sociales',
        'items_wrap' => '<li>%3$s</uli>'
      )); ?>
      </ul>
    </div>
    <!-- end hide-mobile -->
    <div class="show-mobile">
      <div class="languages">
        <ul>
          <!-- <li><a href="#">en</a></li>
          <li><a href="#">ru</a></li> -->
        </ul>
      </div>
      <!-- end languages -->
      <div class="site-menu">
      <?php wp_nav_menu(array(
        'theme_location' => 'superior',
        'container' => 'div',
        'container_class' => 'site-menu',
        'items_wrap' => '<ul>%3$s</ul>'
      )); ?>
      </div>
      <!-- end site-menu --> 
    </div>
    <!-- end show-mobile --> 
    <small>© 2023 Fortezza | Industrial Construction Company</small> </div>
  <!-- end inner --> 
</aside>
<!-- end side-widget -->
<nav class="navbar">
  <div class="container">
  <div class="logo">
    <?php if( has_custom_logo() ):  ?>
        <?php 
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $custom_logo_url = $custom_logo_data[0];
        ?>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
           rel="home">

            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

        </a>
    <?php else: ?>
        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
    <?php endif; ?>
  </div>
    <!-- <div class="logo"> <a href="index.html"><img src="<?php bloginfo('template_url');?>/images/LOGO-BLANCO-FORTEZZA.png" alt="Image"></a> </div> -->
    <!-- end logo -->
    <div class="languages">
      <ul>
        <!-- <li><a href="#">en</a></li>
        <li><a href="#">ru</a></li> -->
      </ul>
    </div>
    <!-- end languages -->
    <!-- <div class="site-menu">
      <ul>
        <li><a href="#">Fortezza</a>
          <ul>
            <li><a href="about-company.html">About Company</a></li>
            <li><a href="core-values.html">Core Values</a></li>
            <li><a href="leadership.html">Leadership</a></li>
            <li><a href="our-history.html">Our History</a></li>
            <li><a href="offices.html">Offices</a></li>
            <li><a href="certificates.html">Certificates</a></li>
          </ul>
        </li>
        <li><a href="services.html">Services</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div> -->

    <?php wp_nav_menu(array(
        'theme_location' => 'superior',
        'container' => 'div',
        'container_class' => 'site-menu',
        'items_wrap' => '<ul>%3$s</ul>'
    )); ?>

    <!-- end site-menu -->
    <div class="search"> <i class="lni lni-search-alt"></i> </div>
    <!-- end search -->
    
    <div class="hamburger">
      <div id="hamburger"> <span></span> <span></span> <span></span> </div>
      <div id="cross"> <span></span> <span></span> </div>
    </div>
    <!-- end hamburger --> 
    <!-- end hamburher --> 
    <!-- <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-whatsapp"></i> <span>ESPECIALISTA COMERCIAL</span></a> </div> -->
  <!-- end container --> 

  


</nav>
<!-- end navbar -->
