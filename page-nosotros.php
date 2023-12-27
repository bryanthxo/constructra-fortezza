<?php 
/**
 * Template Name: Plantilla Nosotros
 */
get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
	  <!-- <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6> -->
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->

<!-- NUESTRA HISTORIA -->
<section class="content-section no-bottom-spacing">
  <div class="container">
    <div class="row">
		<div class="col-12">
			 <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('section_nosotros_historia_titulo') ); ?></h6>
          <h2><?php the_field('section_nosotros_historia_subtitulo'); ?></h2>
        </div>
        <!-- end section-title --> 
		</div>
		<!-- end col-12 -->
	  	<div class="col-md-7">
		<figure>
      <?php if( get_field('section_nosotros_historia_imagen_izq') ): ?>
        <img src="<?php the_field('section_nosotros_historia_imagen_izq'); ?>" />
      <?php endif; ?>
    </figure>
			<p><?php the_field('section_nosotros_historia_contenido_izq'); ?></p>
		</div>
		<!-- end col-7 -->
	  	<div class="col-md-5">
		<figure>
      <?php if( get_field('section_nosotros_historia_imagen_der') ): ?>
        <img src="<?php the_field('section_nosotros_historia_imagen_der'); ?>" />
      <?php endif; ?>
    </figure>
			<p><?php the_field('section_nosotros_historia_contenido_der'); ?></p>
		</div>
		<!-- end col-5 -->
	  </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- Seccion Contador -->
<section class="content-section ">
  <?php if( have_rows('rep_counter_nosotros') ): ?>
  <div class="container">
    <div class="row">
    <?php while( have_rows('rep_counter_nosotros') ): the_row(); ?>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box"> <span class="odometer" data-count="<?php echo get_sub_field('rep_counter_nosotros_numero'); ?>" data-status="yes">0</span> <span class="value"><?php echo get_sub_field('rep_counter_nosotros_valor'); ?></span>
          <h6><?php echo get_sub_field('rep_counter_nosotros_titulo'); ?></h6>
          <p><?php echo get_sub_field('rep_counter_nosotros_parrafo'); ?></p>
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


<section class="content-section white-space-bottom" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
		<div class="col-lg-7">
        <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('nosotros_section_grupo_constructor_titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('nosotros_section_grupo_constructor_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-7 -->
      <div class="col-lg-5">
        <p><?php echo wp_kses_post ( get_field('nosotros_section_grupo_constructor_parrafo') ); ?></p>
      </div>
      <!-- end col-5 --> 

    <?php if( have_rows('rep_nosotros_section_grupo_constructor') ): ?>
      <?php while( have_rows('rep_nosotros_section_grupo_constructor') ): the_row(); ?>
        <div class="col-lg-4">
          <div class="step-box">
            <figure class="image">
                <img src="<?php echo get_sub_field('rep_nosotros_section_grupo_constructor_background'); ?>" />
            </figure>
            <div class="content">
              <span><?php echo get_sub_field('rep_nosotros_section_grupo_constructor_identificador'); ?></span>
            <figure class="icon">
                <img src="<?php echo get_sub_field('rep_nosotros_section_grupo_constructor_icono'); ?>" />
            </figure>
              <h6><?php echo get_sub_field('rep_nosotros_section_grupo_constructor_titulo'); ?></h6>
              <p><?php echo get_sub_field('rep_nosotros_section_grupo_constructor_descripcion'); ?></p>
            </div>
              <!-- end content -->
            </div>
            <!-- end step-box -->
        </div>
        <!-- end col-4 -->
      <?php endwhile; ?>
    <?php endif; ?>
		
	  </div>
	  <!-- end row -->
  </div>
  <!-- end container --> 
</section>

<!-- Section Logo -->
<div class="container">
<?php if( have_rows('rep_nosotros_logos_clientes') ): ?>
  <div class="row no-gutters">
  <?php while( have_rows('rep_nosotros_logos_clientes') ): the_row(); ?>
    <div class="col-lg-2 col-md-4 col-6">
      <figure class="logo-item">
        <img src="<?php the_sub_field('rep_nosotros_logos_clientes_img'); ?>" alt="Image">
      </figure>
    </div>
    <!-- end col-2 -->
    <?php endwhile; ?>
  </div>
  <!-- end row --> 
  <?php endif; ?>
</div>
<!-- end container --> 

<!-- Seccion testimonios -->
<section class="content-section white-space-top" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-box"> <a href="<?php the_field('nosotros_section_test_video'); ?>" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
          <video src="<?php the_field('nosotros_section_test_video'); ?>" autoplay muted loop playsinline></video>
        </div>
        <!-- end video-box --> 
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="testimonials-slider">
          <?php if( have_rows('rep_testimonial_nosotros') ): ?>
           <div class="swiper-wrapper">
              <?php while( have_rows('rep_testimonial_nosotros') ): the_row(); ?>
              <div class="swiper-slide">
                  <div class="testimonial">
                    <p><?php echo get_sub_field('rep_testimonial_nosotros_testimonial'); ?></p>
                    <i class="lni lni-quotation"></i>
                    <h6><?php echo get_sub_field('rep_testimonial_nosotros_cliente'); ?></h6>
                    <small><?php echo get_sub_field('rep_testimonial_nosotros_empresa_cliente'); ?></small>
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

<!-- Preguntas Frecuentes -->
<section class="content-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('nosotros_section_faq_titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('nosotros_section_faq_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
		<div class="col-lg-8">
			<div class="accordion" id="accordion" role="tablist">
      <?php if( have_rows('rep_nosotros_section_faq') ): ?>
        <?php $count = 0; $msgShow = "collapse show"; $ariaExp = "true"; ?>
        <?php while( $count <= (have_rows('rep_nosotros_section_faq') )): the_row(); ?>
          <?php if ($count > 0) : $msgShow = "collapse"; $ariaExp = "false" ?><?php endif; ?>
            <div class="card">
              <div class="card-header" role="tab" id="heading-<?php echo $count ?>">
                <a data-toggle="collapse" href="#collapse-<?php echo $count ?>" aria-expanded="<?php echo $ariaExp ?>" aria-controls="collapse-<?php echo $count ?>"><?php echo get_sub_field('rep_nosotros_section_faq_pregunta'); ?> <i class="lni lni-arrow-right"></i></a>
              </div>
              <div id="collapse-<?php echo $count ?>" class="<?php echo $msgShow ?>" role="tabpanel" aria-labelledby="heading-<?php echo $count ?>" data-parent="#accordion">
                <div class="card-body"><?php echo get_sub_field('rep_nosotros_section_faq_resp'); ?></div>
                <!-- end card-body --> 
              </div>
              <!-- end collapse --> 
            </div>
            <!-- end card -->
            <?php $count ++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
          </div>
          <!-- end accordion -->
		</div>
		<!-- end col-8 -->
		<div class="col-lg-4">
		<div class="info-box-dark">
			<h6>CAJA DE INFORMACION</h6>
      <p><?php echo wp_kses_post ( get_field('nosotros_section_caja_info') ); ?></p>
    </div>
			<!-- end info-box-dark -->
		</div>
		<!-- end col-4 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<section class="content-section no-spacing white-space-top" data-background="<?php the_field('nosotros_section_foot_background'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			<div class="cta-box-yellow">
				<h4><?php echo esc_html( get_field('nosotros_section_foot_titulo') ); ?></h4>
				<p><?php echo wp_kses_post ( get_field('nosotros_section_foot_descripcion') ); ?></p>
				<a href="nosotros_section_foot_url_boton" class="button"><?php echo esc_html( get_field('nosotros_section_foot_texto_boton') ); ?></a>
				</div>
				<!-- end cta-box-yellow -->
			</div>
			<!-- end col-8 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>

<?php get_footer(); ?>