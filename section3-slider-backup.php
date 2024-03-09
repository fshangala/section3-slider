<?php
/**
 * Plugin Name:       Section 3 Slider
 * Plugin URI:        https://github.com/fshangala/section3-slider
 * Description:       A section with a slider of images
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Funduluka Shangala
 * Author URI:        https://github.com/fshangala
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       section3-slider
 * Domain Path:       /languages
 */

/**
* Register the section3slider_render shortcode
*/
add_action( 'init', function(){
	add_shortcode("section3slider_render",function($attr=[],$content=null){
		return "
    <div class=\"row\">
      <div class=\"col-6\">
        <div class=\"row\">
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[0]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/app_registration_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[1]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/assistant_navigation_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[2]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/dataset_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[3]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/download_for_offline_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[4]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/manage_search_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[5]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/open_with_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[6]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/settings_accessibility_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[7]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/star_half_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
          <div class=\"col-4\"><button onclick=\"var owl = $('.owl-carousel');owl.owlCarousel();owl.trigger('to.owl.carousel',[8]);\" class=\"btn w-100\"><img src=\"".plugin_dir_url( __FILE__ )."assets/icons/terminal_FILL0_wght400_GRAD0_opsz24.png\" class=\"img-thumbnail w-100\" alt=\"a\"></button></div>
        </div>
      </div>
      <div class=\"col-6\">
        <div class=\"owl-carousel\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/a.jpg\" class=\"img-thumbnail\" alt=\"a\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/b.jpg\" class=\"img-thumbnail\" alt=\"b\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/c.png\" class=\"img-thumbnail\" alt=\"c\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/d.png\" class=\"img-thumbnail\" alt=\"d\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/e.PNG\" class=\"img-thumbnail\" alt=\"e\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/f.PNG\" class=\"img-thumbnail\" alt=\"f\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/g.PNG\" class=\"img-thumbnail\" alt=\"g\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/h.PNG\" class=\"img-thumbnail\" alt=\"h\">
          <img src=\"".plugin_dir_url( __FILE__ )."assets/i.PNG\" class=\"img-thumbnail\" alt=\"i\">
        </div>
      </div>
    </div>
		";
	});
} );

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'section3slider_shortcode_bootstrap', plugin_dir_url( __FILE__ )."vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css");
	wp_enqueue_style( 'section3slider_shortcode_owl_carousel', plugin_dir_url( __FILE__ )."vendor/assets/owl.carousel.min.css");
	wp_enqueue_style( 'section3slider_shortcode_owl_carousel_theme', plugin_dir_url( __FILE__ )."vendor/assets/owl.theme.default.min.css");

	wp_enqueue_script( 'section3slider_shortcode_bootstrap', plugin_dir_url( __FILE__ )."vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js");
	wp_enqueue_script( 'section3slider_shortcode_jquery', plugin_dir_url( __FILE__ )."vendor/jquery-3.7.1.min.js");
	wp_enqueue_script( 'section3slider_shortcode_owl_carousel', plugin_dir_url( __FILE__ )."vendor/owl.carousel.min.js");
	wp_enqueue_script( 'section3slider_main', plugin_dir_url( __FILE__ )."main.js");
});

/**
 * Activate the plugin.
 */
function section3slider_activate() { 
	// Trigger our function that registers the custom post type plugin.
	section3slider_setup_post_type(); 
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'section3slider_activate' );

/**
 * Deactivation hook.
 */
function section3slider_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'section3slide' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'section3slider_deactivate' );