<!-- The template for displaying 404 pages (Not Found) -->

<?php get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1><?php _e( 'Page Not Found', 'Fortezza' ); ?></h1>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
<section class="content-section error-404 not-found">
  <div class="container">
    <img src="<?php bloginfo('template_url');?>/images/error404.png" alt="Image">
    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Fotezza' ); ?></p>
    <?php get_search_form(); ?>
  </div>
  <!-- end container --> 

</section>
<!-- end content-section -->

<?php get_footer(); ?>