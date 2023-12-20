<?php 
/**
 * Template Name: Plantilla Inicio
 */
get_header(); ?>

<header class="slider white-space-bottom">
  <div class="container">
  <?php if( have_rows('rep_slider_main') ): ?>
    <div class="swiper-container slider-content">
      <div class="swiper-wrapper">
      <?php while( have_rows('rep_slider_main') ): the_row(); ?>
        <div class="swiper-slide">
          <div class="inner">
            <h2><?php the_sub_field('rep_titulo_slider'); ?></h2>
            <p><?php the_sub_field('rep_parrafo_slider'); ?></p>
            <a href="<?php the_sub_field('rep_url_del_boton'); ?>"><?php the_sub_field('rep_nombre_boton'); ?> <i class="lni lni-arrow-right"></i></a> </div>
          <!-- end inner --> 
        </div>
        <!-- end swiper-slide -->
        <?php endwhile; ?>
      </div>
      <!-- end swiper-wrapper -->
      <div class="controls">
        <div class="swiper-pagination"></div>
        <!-- end swiper-pagination -->
        <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
        <!-- end button-prev -->
        <div class="button-next"><i class="lni lni-arrow-right"></i></div>
        <!-- end button-next --> 
      </div>
      <!-- end controls --> 
    </div>
    <!-- end slider-content -->
    <div class="swiper-container slider-main">
      <div class="swiper-wrapper">
      <?php while( have_rows('rep_slider_main') ): the_row(); ?>
        <div class="swiper-slide">
          <div class="slide-image" data-background="<?php the_sub_field('rep_imagen_slider'); ?>"></div>
        </div>
        <!-- end swiper-slide -->
        <?php endwhile; ?>
      </div>
      <!-- end swiper-wrapper -->
      <div class="header-box"> <b><?php echo esc_html( get_field('header_box_numero') ); ?></b> <small><?php echo esc_html( get_field('header_box_texto') ); ?></small> </div>
      <!-- end header-box --> 
    </div>
    <!-- end slider-main --> 
    <?php endif; ?>
  </div>
  <!-- end container --> 
</header>

<!-- section-note -->
<section class="content-section">
<?php if( have_rows('rep_note') ): ?>
  <div class="container">
  <div class="row">
      <?php while( have_rows('rep_note') ): the_row(); ?>
        <div class="col-lg-4">
        <div class="icon-content">
          <figure><img src="<?php echo get_sub_field('rep_note_icono'); ?>" alt="Image"></figure>
          <h3><?php the_sub_field('rep_note_titulo'); ?></h3>
          <small><?php the_sub_field('rep_note_descripcion'); ?></small> <a href="<?php echo esc_attr( get_field('rep_note_url') ); ?>"><i class="lni lni-download"></i></a> 
        </div>
        <br>
        <!-- end icon-content --> 
      </div>
      <!-- end col-4 -->
      <?php endwhile; ?>
    </div>
    <!-- end row -->
  <?php endif; ?>
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->

<!-- Seccion historia -->
<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="section-title">
          <h6><?php echo esc_html( get_field('titulo-historia') ); ?></h6>
          <h2><?php echo esc_html( get_field('subtitulo_de_historia_1') ); ?><br>
          <?php echo esc_html( get_field('subtitulo_de_historia_2') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-lg-6">
        <figure class="side-image">
            <?php if( get_field('imagen_de_historia') ): ?>
              <img src="<?php the_field('imagen_de_historia'); ?>" />
            <?php endif; ?>
        </figure>
        <!-- end side-image --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
        <div class="side-content">
          <h5><?php echo esc_html( get_field('subtitulo_de_historia_3') ); ?></h5>
          <p><?php echo esc_html( the_field('parrafo_historia') ); ?></p>
        <!-- end side-content --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section nosotros -->

<!-- Seccion Contador -->
<section class="content-section ">
  <?php if( have_rows('rep_counter') ): ?>
  <div class="container">
    <div class="row">
    <?php while( have_rows('rep_counter') ): the_row(); ?>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box"> <span class="odometer" data-count="<?php echo get_sub_field('rep_counter_numero'); ?>" data-status="yes">0</span> <span class="value"><?php echo get_sub_field('rep_counter_valor'); ?></span>
          <h6><?php echo get_sub_field('rep_counter_titulo'); ?></h6>
          <p><?php echo get_sub_field('rep_counter_parrafo'); ?></p>
        </div>
        <!-- end counter-box --> 
      </div>
      <!-- end col-3 -->
      <?php endwhile; ?>
    </div>
    <!-- end row --> 
    <?php endif; ?>
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->

<!-- Seccion Proyectos Completados -->
<section class="content-section white-space-bottom" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('proyectos_completados_titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('proyectos_completados_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-7 -->
      <div class="col-lg-5">
        <p><?php echo esc_html( get_field('proyectos_completados_parrafo') ); ?></p>
      </div>
      <!-- end col-5 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="swiper-container project-slider">
    <?php if( have_rows('rep_slider_proyectos') ): ?>
    <div class="swiper-wrapper">
    <?php while( have_rows('rep_slider_proyectos') ): the_row(); ?>
      <div class="swiper-slide">
        <figure class="project-box"> <a href="#"><img src="<?php the_sub_field('rep_slider_proyectos_imagen'); ?>" alt="Image"></a>
          <figcaption>
            <h5><?php echo get_sub_field('rep_slider_proyectos_titulo'); ?></h5>
            <p><?php echo get_sub_field('rep_slider_proyectos_descripcion'); ?></p>
          </figcaption>
        </figure>
      </div>
      <!-- end swiper-slide -->
      <?php endwhile; ?>
    </div>
    <!-- Add Pagination -->
    <?php endif; ?>
    <div class="swiper-pagination"></div>
  </div>
  <!-- end project-slider --> 
</section>
<!-- end content-section -->

<!-- Seccion Sector Trabajo -->
<section class="content-section no-spacing">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('seccion_sector_trabajo_Titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('seccion_sector_trabajo_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->

      <?php if( have_rows('rep_sector_trabajo') ): ?>
        <?php while( have_rows('rep_sector_trabajo') ): the_row(); ?>
          <div class="col-lg-4 col-md-6">
            <a href="<?php echo esc_attr( get_field('rep_sector_trabajo_nombre_url') ); ?>" class="sector-box"> <span><?php echo get_sub_field('rep_sector_trabajo_nombre'); ?></span> <i class="lni lni-arrow-right"></i> </a> 
          </div>
      <!-- end col-4 --> 
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->

<!-- Seccion testimonios -->
<section class="content-section white-space-top" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-box"> <a href="<?php the_field('section_test_video'); ?>" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
          <video src="<?php the_field('section_test_video'); ?>" autoplay muted loop playsinline></video>
        </div>
        <!-- end video-box --> 
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="testimonials-slider">
          <?php if( have_rows('rep_testimonial') ): ?>
           <div class="swiper-wrapper">
              <?php while( have_rows('rep_testimonial') ): the_row(); ?>
              <div class="swiper-slide">
                  <div class="testimonial">
                    <p><?php echo get_sub_field('rep_testimonial_testimonial'); ?></p>
                    <i class="lni lni-quotation"></i>
                    <h6><?php echo get_sub_field('rep_testimonial_cliente'); ?></h6>
                    <small><?php echo get_sub_field('rep_testimonial_empresa_cliente'); ?></small>
                  </div>
                <!-- end testimonial --> 
              </div>
              <!-- end swiper-slide -->
              <?php endwhile; ?>
            </div>
          <!-- end swiper-wrapper -->
          <?php endif; ?>

          <div class="controls">
            <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
            <!-- end button-prev -->
            <div class="button-next"><i class="lni lni-arrow-right"></i></div>
            <!-- end button-next --> 
          </div>
          <!-- end controls --> 
        </div>
        <!-- end testimonials-slider --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->

<div class="content-section" data-background="#f7f6f1">
  <div class="container">
  <?php if( have_rows('rep_logos_clientes') ): ?>
    <div class="row no-gutters">
    <?php while( have_rows('rep_logos_clientes') ): the_row(); ?>
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item">
          <img src="<?php the_sub_field('rep_logos_clientes_img'); ?>" alt="Image">
        </figure>
      </div>
      <!-- end col-2 -->
      <?php endwhile; ?>
    </div>
    <!-- end row --> 
    <?php endif; ?>
  </div>
  <!-- end container --> 
</div>
<!-- end content-section -->
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h6>NUESTRAS NOTICIAS</h6>
          <h2>Entradas Recientes</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      
      <?php
        // Defines three posts per page.
        $args = array( 'posts_per_page' => 3 ); 
        // Variable to call WP_Query.
        $the_query = new WP_Query( $args );
        if ( $the_query -> have_posts()) : while ( $the_query -> have_posts()) : $the_query -> the_post(); 
      ?>
      
      <div class="col-lg-4">
        <div class="recent-news">
          <figure><?php if (has_post_thumbnail()) { the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid')); } ?></figure>
           <!-- <figure><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></a></figure> -->
          <div class="content"> <small><?php echo get_the_date(); ?></small>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="author">
              <?php $avatar_url = get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>
              <img src="<?php echo esc_url( $avatar_url ); ?>" alt="Image"> <span>by <b><?php the_author(); ?></b></span>
            </div>
            <!-- end author --> 
          </div>
          <!-- end content --> 
        </div>
        <!-- end recent-news --> 
      </div>
      
      <?php endwhile; endif; ?>
      <!-- end col-5 -->
     
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<?php get_footer(); ?>