
<section class="footer-bar">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <figure class="logo">
        <?php if( has_custom_logo() ):  ?>
        <?php 
            // Get Custom Logo URL
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $custom_logo_url = $custom_logo_data[0];
        ?>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
           title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
           rel="home">

            <img src="<?php echo esc_url( $custom_logo_url ); ?>" 
                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

        </a>
    <?php else: ?>
        <div class="site-name"><?php bloginfo( 'name' ); ?></div>
    <?php endif; ?>
        </figure>
        <h2>Live <b>better</b> and <b>beautiful</b></h2>
        <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a>
        <div class="sales-representive">
          <figure> <img src="<?php bloginfo('template_url');?>/images/author01.jpg" alt="Image"> </figure>
          Sales representative <b>+1 (850) 344 0 66 #20</b> free call ! </div>
        <!-- end sales-representive --> 
      </div>
      <!-- end col-12  --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end footer-bar -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <h6 class="widget-title">HEADQUARTER</h6>
        <address>
        <p>228 Cardigan Road, Leeds<br>
          Geneva Switzerland</p>
        <p>+1 (850) 344 0 66 #20</p>
        <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>
        </address>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4 col-md-6">
        <h6 class="widget-title">SALES OFFICES</h6>
        <address>
        <p>121 South 8th Street, Suite 1200<br>
          Minneapolis MN 55402</p>
        <p>+1 (850) 344 0 66 #20</p>
        <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>
        </address>
      </div>
      <!-- end col-4 -->
      <div class="col-lg-4">
        <h6 class="widget-title">SUBSCRIPTION</h6>
        <p>For more information, please join us.</p>
        <form>
          <input type="email" placeholder="Type your e-mail">
          <input type="submit" value="JOIN NOW">
        </form>
      </div>
      <!-- end col-4 -->
      <div class="col-12">
        <div class="footer-bottom"> <span>© 2023 Fortezza | Grupo Constructor</span>
          <ul>
            <!-- <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li> -->
            <?php wp_nav_menu(array(
        'theme_location' => 'redes-sociales',
        'items_wrap' => '<li>%3$s</uli>'
      )); ?>
          </ul>
        </div>
        <!-- end footer-bottom --> 
      </div>
      <!-- end col-12  --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
  <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i> <small>Scroll Up</small> </a> 
  <!-- end scroll-top --> 
</footer>
<!-- end footer -->
<div id="sales-specialist-form">
  <form>
    <div class="form-group"> <span>Full Name</span>
      <input type="text">
    </div>
    <!-- end form-group -->
    <div class="form-group"> <span>Phone Number</span>
      <input type="text">
    </div>
    <!-- end form-group -->
    <div class="form-group"> <span>Current E-mail</span>
      <input type="email">
    </div>
    <!-- end form-group -->
    <div class="form-group">
      <input type="submit" value="REQUEST A CALL">
    </div>
    <!-- end form-group -->
  </form>
</div>
<!-- end sales-specialist-form --> 

<!-- JS FILES --> 
<script src="<?php bloginfo('template_url');?>/js/jquery.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/swiper.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/fancybox.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/odometer.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/isotope.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
<script src="https://kit.fontawesome.com/808781cc1c.js"></script>
</body>
</html>