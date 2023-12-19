<?php 
/**
 * Template Name: Plantilla Proyectos
 */
get_header(); ?>


<header class="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
	  <h6>Small Programs Perfect For Beginners To Get Started With Personal Growth</h6>
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
          	<li data-filter=".one">EDIFICIOS</li>
          	<li data-filter=".two">COMERCIALES</li>
          	<li data-filter=".three">VILLAS</li>
   		</ul>
		</div>
		<!-- end col-12 -->
	  	<div class="col-12">
			<ul class="projects">
				<li class="one">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide01.jpg" alt="Image"></a>
          <figcaption>
            <h5>Quark Life Homes</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="two">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide02.jpg" alt="Image"></a>
          <figcaption>
            <h5>River Life Residence</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="three">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide03.jpg" alt="Image"></a>
          <figcaption>
            <h5>Orgue Shopping Mall</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="one">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide04.jpg" alt="Image"></a>
          <figcaption>
            <h5>Green Socks Villas</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="two">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide05.jpg" alt="Image"></a>
          <figcaption>
            <h5>Prensten Hudson's</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="three">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide06.jpg" alt="Image"></a>
          <figcaption>
            <h5>York Education Center</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="one">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide07.jpg" alt="Image"></a>
          <figcaption>
            <h5>Miamy Beach House</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
				<li class="two">
				 <figure class="project-box"> <a href="project-single.html"><img src="<?php bloginfo('template_url');?>/images/slide08.jpg" alt="Image"></a>
          <figcaption>
            <h5>All Life Resorts</h5>
          </figcaption>
        </figure>
					<!-- end project-box -->
				</li>
				<!-- end li -->
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