<?php 
/**
 * Template Name: Plantilla Proyectos
 */
get_header(); ?>


<header class="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
<section class="content-section ">
  <div class="container">
    <div class="row">
		<div class="col-12">
			<ul class="isotope-filter">
   			<li data-filter="*" class="current">TODOS</li>
			<?php if( have_rows('rep_proyecto_categoria') ): ?>
        		<?php while( have_rows('rep_proyecto_categoria') ): the_row(); ?>
			<li data-filter=".<?php echo get_sub_field('rep_proyecto_categoria_nombre'); ?>"><?php echo get_sub_field('rep_proyecto_categoria_nombre'); ?></li>
				<?php endwhile; ?>
      		<?php endif; ?>
   		</ul>
		</div>
		<!-- end col-12 -->
	  	<div class="col-12">
			<ul class="projects">

			<?php if( have_rows('rep_proyecto') ): ?>
        		<?php while( have_rows('rep_proyecto') ): the_row(); ?>
				<li class="<?php echo get_sub_field('rep_proyecto_cat'); ?>">
				 	<figure class="project-box">
						<a href="<?php echo get_sub_field('rep_proyecto_url'); ?>">
							<img src="<?php echo get_sub_field('rep_proyecto_imagen'); ?>" alt="Image">
						</a>
						<figcaption>
							<h5><?php echo get_sub_field('rep_proyecto_nombre'); ?></h5>
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