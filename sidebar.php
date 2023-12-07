                <div class="widget">
				<h6 class="widget-title">BUSCAR</h6>
				<?php get_search_form(); ?>
				</div>
				<!-- end widget -->
				<!-- <div class="widget"> -->
				<!-- <h6 class="widget-title">CATEGORIES</h6> -->
				    <!-- <ul class="categories">
						<li><a href="#">Business</a></li>
						<li><a href="#">Construction</a></li>
						<li><a href="#">Buildings</a></li>
						<li><a href="#">Development</a></li>
						<li><a href="#">Apartments</a></li>
						<li><a href="#">Condos</a></li>
						<li><a href="#">Villas & Houses</a></li>
					</ul> -->
                    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
                        <ul class="categories">
		                <?php dynamic_sidebar( 'primary' ); ?>
                        </ul>
	                <?php endif; ?>
				<!-- </div> -->
				<!-- end widget -->
				
				<!-- <div class="widget">
				<h6 class="widget-title">GALLERY</h6>
				<figure>
					<img src="images/slide01.jpg" alt="Image">
					</figure>				
					<figure>
					<img src="images/slide02.jpg" alt="Image">
					</figure>
				</div> -->
				<!-- end widget -->