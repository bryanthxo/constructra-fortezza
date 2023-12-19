<?php get_header(); ?>


<header class="page-header">
  <div class="container">
    <h1>NEWS</h1>
	  <h6><?php the_title(); ?></h6>
  </div>
  <!-- end container --> 
</header>
<!-- end page-header -->
<section class="content-section ">


  <div class="container">
    <div class="row">
      <div class="col-lg-8">
	      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <div class="news-box">
        <figure><?php if (has_post_thumbnail()) { the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid')); } ?></figure>
            <div class="content"> 
              <small><?php the_time('F j, Y'); ?></small>
              <h3><?php the_title(); ?></h3>
            <div class="author"> <img src="<?php bloginfo('template_url');?>/images/author01.jpg" alt="Image"> <span>by <b><?php the_author(); ?></b></span> </div>
            <!-- end author --> 
			      <br>
			      <?php the_content(); ?>
            <?php comments_template( '/short-comments.php' ); ?>
			      </div>
			      <!-- end content -->
        </div>
        <!-- end news-box --> 
        <ul class="pagination">
          <li class="page-item"> <a class="page-link" href="<?php previous_posts_link(); ?>">PREV</a> </li>
          <li class="page-item"> <a class="page-link" href="<?php next_posts_link(); ?>">NEXT</a> </li>
        </ul>
      </div>
      

      <?php endwhile; endif; ?>

      <!-- end col-8 -->
		<div class="col-lg-4">
			<aside class="sidebar">
			<?php get_sidebar(); ?>
			</aside>
			<!-- end sidebar -->
		</div>
		<!-- end col-4 -->
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 



</section>
<!-- end content-section -->


<?php get_footer(); ?>