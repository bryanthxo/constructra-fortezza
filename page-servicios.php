<?php 
/**
 * Template Name: Plantilla Servicios
 */
get_header(); ?>

<header class="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->

<!-- section-note -->
<section class="content-section">
<?php if( have_rows('rep_note_servicios') ): ?>
  <div class="container">
  <div class="row">
      <?php while( have_rows('rep_note_servicios') ): the_row(); ?>
        <div class="col-lg-4">
        <div class="icon-content">
          <figure><img src="<?php echo get_sub_field('rep_note_servicios_icono'); ?>" alt="Image"></figure>
          <h3><?php the_sub_field('rep_note_servicios_titulo'); ?></h3>
          <small><?php the_sub_field('rep_note_servicios_descripcion'); ?></small> <a href="<?php echo esc_attr( get_field('rep_note_servicios_url') ); ?>"><i class="lni lni-download"></i></a> 
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


<section class="content-section no-spacing" data-background="<?php bloginfo('template_url');?>/images/section-bg02.jpg">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-6 col-md-9">
        <div class="services-list-box">
          <h4><?php echo esc_html( get_field('servicios_lista_box_titulo') ); ?></h4>
          <p><?php echo esc_html( get_field('servicios_lista_box_descripcion') ); ?></p>
          <ul>
            <?php if( have_rows('rep_servicios_lista_box') ): ?>
              <?php while( have_rows('rep_servicios_lista_box') ): the_row(); ?>
                <li><?php echo get_sub_field('rep_servicios_lista_box_servicio'); ?></li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <a href="<?php echo esc_attr( get_field('servicios_lista_box_url') ); ?>" class="button"><?php echo esc_html( get_field('servicios_lista_box_nombre_boton') ); ?></a> </div>
        <!-- end services-list-box --> 
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- Seccion Contador -->
<section class="content-section ">
  <?php if( have_rows('rep_counter_servicios') ): ?>
  <div class="container">
    <div class="row">
    <?php while( have_rows('rep_counter_servicios') ): the_row(); ?>
      <div class="col-lg-3 col-md-6">
        <div class="counter-box"> <span class="odometer" data-count="<?php echo get_sub_field('rep_counter_servicios_numero'); ?>" data-status="yes">0</span> <span class="value"><?php echo get_sub_field('rep_counter_servicios_valor'); ?></span>
          <h6><?php echo get_sub_field('rep_counter_servicios_titulo'); ?></h6>
          <p><?php echo get_sub_field('rep_counter_servicios_parrafo'); ?></p>
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
          <h6><?php echo esc_html( get_field('servicios_section_grupo_constructor_titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('servicios_section_grupo_constructor_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-7 -->
      <div class="col-lg-5">
        <p><?php echo wp_kses_post ( get_field('servicios_section_grupo_constructor_parrafo') ); ?></p>
      </div>
      <!-- end col-5 --> 

    <?php if( have_rows('rep_servicios_section_grupo_constructor') ): ?>
      <?php while( have_rows('rep_servicios_section_grupo_constructor') ): the_row(); ?>
        <div class="col-lg-4">
          <div class="step-box">
            <figure class="image">
                <img src="<?php echo get_sub_field('rep_servicios_section_grupo_constructor_background'); ?>" />
            </figure>
            <div class="content">
              <span><?php echo get_sub_field('rep_servicios_section_grupo_constructor_identificador'); ?></span>
            <figure class="icon">
                <img src="<?php echo get_sub_field('rep_servicios_section_grupo_constructor_icono'); ?>" />
            </figure>
              <h6><?php echo get_sub_field('rep_servicios_section_grupo_constructor_titulo'); ?></h6>
              <p><?php echo get_sub_field('rep_servicios_section_grupo_constructor_descripcion'); ?></p>
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
<!-- end content-section -->



<section class="content-section no-spacing">
  <div class="container">
    <div class="row align-items-center no-gutters">
		<div class="col-lg-5">
		<div class="tab-left">
			<h2><?php echo esc_html( get_field('servicios_tab_capibility_titulo') ); ?></h2>
				<ul class="tab-nav">
          <?php if( have_rows('rep_servicios_tabs_names') ): ?>
            <?php $count = 0; ?>
            <?php while( $count <= ( have_rows('rep_servicios_tabs_names')) ): the_row(); ?>
              <li class="active"><a href="#tab<?php echo $count ?>"><?php echo get_sub_field('rep_servicios_tabs_names_name'); ?></a></li>
              <?php $count ++; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
			<p><?php echo esc_html( get_field('servicios_tabs_names_descripcion') ); ?></p>
			</div>
			<!-- end tab-left -->
		</div>
		<!-- end col-6 -->
		<div class="col-lg-7">
			<div class="tab-right">
        <?php if( have_rows('rep_servicios_tabs_names') ): ?>
          <?php $count = 0; ?>
          <?php while($count <= (have_rows('rep_servicios_tabs_names'))): the_row(); ?>
			      <div id="tab<?php echo $count ?>" class="tab-item active-item"><img src="<?php echo get_sub_field('rep_servicios_tabs_names_imagen'); ?>" alt="Image"></div>
            <?php $count ++; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- end tab01 -->
			</div>
			<!-- end tab-right -->
		</div>
		<!-- end col-6 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->


<!-- Seccion Sector Trabajo -->
<section class="content-section">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="section-title text-left">
          <h6><?php echo esc_html( get_field('servicios_seccion_sector_trabajo_Titulo') ); ?></h6>
          <h2><?php echo esc_html( get_field('servicios_seccion_sector_trabajo_subtitulo') ); ?></h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->

      <?php if( have_rows('rep_sector_trabajo_servicios') ): ?>
        <?php while( have_rows('rep_sector_trabajo_servicios') ): the_row(); ?>
          <div class="col-lg-4 col-md-6">
            <a href="<?php echo esc_attr( get_field('rep_sector_trabajo_servicios _url') ); ?>" class="sector-box"> <span><?php echo get_sub_field('rep_sector_trabajo_servicios _nombre'); ?></span> <i class="lni lni-arrow-right"></i> </a> 
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


<?php get_footer(); ?>