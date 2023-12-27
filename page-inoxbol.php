<?php 
/**
 * Template Name: Plantilla Inoxbol
 */
get_header(); ?>

<header class="page-header">
  <div class="container">
    <figure class="logo-inoxbol">
        <img src="<?php the_field('inoxbol_logo'); ?>" alt="<?php echo esc_html( get_field('inoxbol_descripcion') ); ?>">
    </figure>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->

<!-- servicios -->
<section class="content-section ">
  <div class="container">
    <div class="row">
		<div class="col-12">
			<ul class="isotope-filter">
   			<li data-filter="*" class="current">TODOS</li>
			<?php if( have_rows('rep_inoxbol_categoria') ): ?>
        		<?php while( have_rows('rep_inoxbol_categoria') ): the_row(); ?>
			<li data-filter=".<?php echo get_sub_field('rep_inoxbol_categoria_nombre'); ?>"><?php echo get_sub_field('rep_inoxbol_categoria_nombre'); ?></li>
				<?php endwhile; ?>
      		<?php endif; ?>
   		</ul>
		</div>
		<!-- end col-12 -->
	  	<div class="col-12">
			<ul class="projects">

			<?php if( have_rows('rep_inoxbol') ): ?>
        		<?php while( have_rows('rep_inoxbol') ): the_row(); ?>
				<li class="<?php echo get_sub_field('rep_inoxbol_cat'); ?>">
				 	<figure class="project-box">
						<a href="<?php echo get_sub_field('rep_inoxbol_url'); ?>">
							<img src="<?php echo get_sub_field('rep_inoxbol_imagen'); ?>" alt="Image">
						</a>
						<figcaption>
							<h5><?php echo get_sub_field('rep_inoxbol_nombre'); ?></h5>
						</figcaption>
					</figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<?php endwhile; ?>
      		<?php endif; ?>
				
			</ul>
		</div>
		<!-- end col-12 -->
	  </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->





<?php get_footer(); ?>