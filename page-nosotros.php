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


	
<div class="content-section no-spacing">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo01.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo02.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo03.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo04.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo05.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 -->
      <div class="col-lg-2 col-md-4 col-6">
        <figure class="logo-item"> <img src="<?php bloginfo('template_url');?>/images/logo06.png" alt="Image"> </figure>
      </div>
      <!-- end col-2 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</div>
<!-- end content-section -->
<section class="content-section white-space-top" data-background="#f7f6f1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="video-box"> <a href="<?php bloginfo('template_url');?>/videos/video01.mp4" data-fancybox data-width="640" data-height="360" class="play-btn"><i class="lni lni-play"></i></a>
          <video src="<?php bloginfo('template_url');?>/videos/video01.mp4" autoplay muted loop playsinline></video>
        </div>
        <!-- end video-box --> 
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="testimonials-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial">
                <p>Consto Construction is one of the best general contractors we've worked with. The entire team tactfully delivered a project of exceptional quality while staying on schedule and under budget. We hope to work with Consto again in the near future!</p>
                <i class="lni lni-quotation"></i>
                <h6>William James</h6>
                <small>Life Touch LLC</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>Consto was completely respectful of the building and its surroundings - they immediately became part of our team and they know teamwork! They kept the jobsite clean and safe; working with Consto is nothing short of a first class experience!</p>
                <i class="lni lni-quotation"></i>
                <h6>William James</h6>
                <small>Life Touch LLC</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>Thank you for all of your hard work on our project…I seriously don’t know how you did it but it came together SO WELL. I know we are a particular bunch and want things a certain way but you guys did such an amazing job!</p>
                <i class="lni lni-quotation"></i>
                <h6>William James</h6>
                <small>Life Touch LLC</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide -->
            <div class="swiper-slide">
              <div class="testimonial">
                <p>I was truly impressed with Consto’s quality workmanship and the final product. Consto provided an outstanding team that completed our project on-time and on schedule with no disruption to the staff.</p>
                <i class="lni lni-quotation"></i>
                <h6>William James</h6>
                <small>Life Touch LLC</small> </div>
              <!-- end testimonial --> 
            </div>
            <!-- end swiper-slide --> 
          </div>
          <!-- end swiper-wrapper -->
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
          <h6><?php echo esc_html( get_field('nosotros_section_grupo_constructor_titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('nosotros_section_grupo_constructor_titulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
		<div class="col-lg-8">
			<div class="accordion" id="accordion" role="tablist">

      <?php if( have_rows('rep_nosotros_section_faq') ): ?>
        <?php $count = 0; $msgShow = "collapse show"; ?>
        <?php while( $count <= (have_rows('rep_nosotros_section_faq') )): the_row(); ?>
          <?php if ($count > 0) : $msgShow = "collapse" ?><?php endif; ?>
            <div class="card">
              <div class="card-header" role="tab" id="heading-<?php echo $count ?>">
                <a data-toggle="collapse" href="#collapse-<?php echo $count ?>" aria-expanded="true" aria-controls="collapse-<?php echo $count ?>"><?php echo get_sub_field('rep_nosotros_section_faq_pregunta'); ?> <i class="lni lni-arrow-right"></i></a>
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
			<h6>INFO BOX</h6>
			<p>Anim pariatur cliche <strong>reprehenderit</strong>, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. </p>
			<p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla <u>assumenda</u> shoreditch et. </p>
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
	<section class="content-section no-spacing white-space-top" data-background="<?php bloginfo('template_url');?>/images/section-bg02.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
				<div class="cta-box-yellow">
					<h4>Lo primero que construimos son relaciones</h4>
					<p>To they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous.</p>
					<a href="#" class="button">GET AN ESTIMATE</a>
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