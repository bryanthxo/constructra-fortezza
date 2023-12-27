<?php 
/**
 * Template Name: Plantilla Contacto
 */
get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
<section class="content-section">
  <div class="container">
  <div class="row">
    <div class="col-lg-6">
	      <div class="section-title text-left">
          <h6>CONTACTANOS</h6>
          <h2>Env&iacute;anos<br>
          Un Mensaje</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
	    <!-- <form class="contact-form">
        <?php echo do_shortcode( '[contact-form-7 id="49974a7" title="Formulario de contacto 1"]'); ?>
		  </form> -->
		  <!-- end contact-form -->
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row --> 
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="contact-box"> 
			<figure><img src="<?php bloginfo('template_url');?>/images/icon-global.png" alt="Image"></figure>
          <h6>Ciudad</h6>
          	<p>Santa Cruz de la Sierra</p>
        </div>
        <!-- end contact-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
        <div class="contact-box"> 
			<figure><img src="<?php bloginfo('template_url');?>/images/icon-phone.png" alt="Image"></figure>
          <h6>WhatsApp</h6>
           <p><a id="btn-wsapp" href="https://wa.me/59175002187?text=Mas%20informacion%20por%20favor" target="_blank">+591 750-02-187</a></p>
        </div>
        <!-- end contact-box --> 
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
      <div class="contact-box"> 	
			<figure><img src="<?php bloginfo('template_url');?>/images/icon-email.png" alt="Image"></figure>
          <h6>Correo</h6>
          <p><a id="btn-mailto" href="mailto:info@constructora-fortezza.com?Subject=Grupo%20Constructor%20Servicios">info@constructora-fortezza.com</a></p>
        </div>
        <!-- end contact-box --> 
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->

		<section class="content-section no-spacing">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60786.85028470142!2d-63.22333574295042!3d-17.783322905992726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e988a71e527d%3A0x44de583314bf5b6e!2sPlaza%20Metropolitana%2024%20de%20Septiembre!5e0!3m2!1ses-419!2sbo!4v1701887091071!5m2!1ses-419!2sbo" frameborder="0" class="google-maps" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
<!-- end content-section -->



<?php get_footer(); ?>