<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );
///// My Functions /////
//// Removes editor in the CMS in WP ////
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );
//// Customizing Login Page ////
function inhabitent_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri('stylesheet_directory')  . '/customlogin.css" />';
}
add_action('login_head', 'inhabitent_custom_login');
function inhabitent_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_url' );
//// Read More Button in Journal single post ////
function new_excerpt_more($more) {
       global $post;
	return ' [...] <p class="readmore"> <a class="moretag" href="'. get_permalink($post->ID) . '"> Read More &#x2192; </a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//// About Header Hero CSS ////
function about_header_styles_method() {
			if ( ! is_page_template( 'about.php')) {
				return ;
			}
				$image =CFS()->get( 'about_banner' );
				$custom_css = "
				.about-header {
background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url(" . $image . ") no-repeat center bottom;
background-size: cover, cover;
}";
				wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'about_header_styles_method' );

//Adjusting archive page loop for products
function inhabitent_modify_product_archive($query){
  if(is_post_type_archive('product') && !is_admin() && $query->is_main_query()){
    $query->set('posts_per_page', 16);
    $query->set('order', 'ASC');
    $query->set('orderby', 'title');
  }
}
add_action('pre_get_posts', 'inhabitent_modify_product_archive');
