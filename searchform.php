<!-- <form action="/" method="get">
	<label for="search">Search in <?php echo home_url( '/' ); ?></label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form> -->
<form action="<?php echo home_url( '/' ); ?>" method="get">
      <input type="search" placeholder="Escribe aqu&iacute;..." name="s" id="search">
      <input type="submit" value="BUSCAR">
</form>