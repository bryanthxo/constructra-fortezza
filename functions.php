<?php 





//create top menu
if(function_exists('register_nav_menus')){
    register_nav_menus(array(
		'superior' => 'Menu Principal Superior',
		'redes-sociales' => 'Menu Redes Sociales'
	));
}

//imagenes destacadas
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

//agregando sidebar
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

//agregar logo
add_theme_support( 'custom-logo' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );



//formulario de contacto
add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );
  
function custom_email_confirmation_validation_filter( $result, $tag ) {
  if ( 'your-email-confirm' == $tag->name ) {
    $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
    $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
  
    if ( $your_email != $your_email_confirm ) {
      $result->invalidate( $tag, "Are you sure this is the correct address?" );
    }
  }
  
  return $result;
}






?>