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
    $sections_list = array(
      "a"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/a.svg",
        "label"=>"Label a",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a1.jpg",
            "description"=>"Some representative placeholder content for the first slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a2.jpg",
            "description"=>"Some representative placeholder content for the first slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a3.jpg",
            "description"=>"Some representative placeholder content for the first slide."
          ),
        ),
      ),
      "b"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/b.svg",
        "label"=>"Label b",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "c"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/c.svg",
        "label"=>"Label c",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "d"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/d.svg",
        "label"=>"Label d",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "e"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/e.svg",
        "label"=>"Label e",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "f"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/f.svg",
        "label"=>"Label f",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "g"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/g.svg",
        "label"=>"Label g",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "h"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/h.svg",
        "label"=>"Label h",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
      "i"=>array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/i.svg",
        "label"=>"Label i",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i1.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i2.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i3.jpg",
            "description"=>"Some representative placeholder content for the second slide."
          ),
        ),
      ),
    );
    $nav_items="";
    $tab_panes="";
    $first=TRUE;
    foreach ($sections_list as $key => $value) {
      if ($first) {
        $nav_items .= "<div class=\"col-4 nav-item\" role=\"presentation\"><button class=\"nav-link w-100 active\" id=\"section3-a-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#section3slider-a-pane\" type=\"button\" role=\"tab\" aria-controls=\"section3slider-a\" aria-selected=\"true\"><img src=\"".$value["icon"]."\" class=\" w-100\" alt=\"".$value["icon"]."\"><br>".$value['label']."</button></div>";
        $tab_panes .= "
        <div class=\"tab-pane fade show active\" id=\"section3slider-".$key."-pane\" role=\"tabpanel\" aria-labelledby=\"section3-".$key."-tab\" tabindex=\"0\">
          <div id=\"section3slider-".$key."\" class=\"carousel slide\">
            <div class=\"carousel-indicators\">";
        $first_slide=TRUE;
        foreach ($value["slides"] as $slide_key => $slide_value) {
          if ($first_slide) {
            $tab_panes .= "<button type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide-to=\"".$slide_key."\" class=\"active\" aria-current=\"true\" aria-label=\"Slide ".$slide_key."\"></button>";
            $first_slide=FALSE;
          } else {
            $tab_panes .= "<button type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide-to=\"".$slide_key."\" aria-label=\"Slide ".$slide_key."\"></button>";
          }
        }
        $tab_panes .= "
            </div>
            <div class=\"carousel-inner\">";
            $first_slide=TRUE;
            foreach ($value["slides"] as $slide_key => $slide_value) {
              if ($first_slide) {
                $tab_panes .= "
                <div class=\"carousel-item active\">
                  <img src=\"".$slide_value["image"]."\" class=\"d-block w-100\" alt=\"".$slide_value["image"]."\">
                  <div class=\"p-4 text-bg-primary bg-gradient\" style=\"--bs-bg-opacity: .8;\">
                    <p>".$slide_value["description"]."</p>
                  </div>
                </div>";
                $first_slide=FALSE;
              } else {
                $tab_panes .= "
                <div class=\"carousel-item\">
                  <img src=\"".$slide_value["image"]."\" class=\"d-block w-100\" alt=\"".$slide_value["image"]."\">
                  <div class=\"p-4 text-bg-primary bg-gradient\" style=\"--bs-bg-opacity: .8;\">
                    <p>".$slide_value["description"]."</p>
                  </div>
                </div>";
              }
            }
            $tab_panes .= "
            </div>
            <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Previous</span>
            </button>
            <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"visually-hidden\">Next</span>
            </button>
          </div>
        </div>";
        $first=FALSE;
      } else {
        $nav_items .= "<div class=\"col-4 nav-item\" role=\"presentation\"><button class=\"nav-link w-100\" id=\"section3slider-".$key."-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#section3slider-".$key."-pane\" type=\"button\" role=\"tab\" aria-controls=\"section3slider-".$key."\" aria-selected=\"false\"><img src=\"".$value["icon"]."\" class=\" w-100\" alt=\"".$value["icon"]."\"><br>".$value['label']."</button></div>";
        $tab_panes .= "
        <div class=\"tab-pane fade\" id=\"section3slider-".$key."-pane\" role=\"tabpanel\" aria-labelledby=\"section3slider-".$key."-tab\" tabindex=\"0\">
          <div id=\"section3slider-".$key."\" class=\"carousel slide\">
            <div class=\"carousel-indicators\">";
            $first_slide=TRUE;
            foreach ($value["slides"] as $slide_key => $slide_value) {
              if ($first_slide) {
                $tab_panes .= "<button type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide-to=\"".$slide_key."\" class=\"active\" aria-current=\"true\" aria-label=\"Slide ".$slide_key."\"></button>";
                $first_slide=FALSE;
              } else {
                $tab_panes .= "<button type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide-to=\"".$slide_key."\" aria-label=\"Slide ".$slide_key."\"></button>";
              }
            }
            $tab_panes .= "
                </div>
                <div class=\"carousel-inner\">";
                $first_slide=TRUE;
                foreach ($value["slides"] as $slide_key => $slide_value) {
                  if ($first_slide) {
                    $tab_panes .= "
                    <div class=\"carousel-item active\">
                      <img src=\"".$slide_value["image"]."\" class=\"d-block w-100\" alt=\"".$slide_value["image"]."\">
                      <div class=\"p-4 text-bg-primary bg-gradient\" style=\"--bs-bg-opacity: .8;\">
                        <p>".$slide_value["description"]."</p>
                      </div>
                    </div>";
                    $first_slide=FALSE;
                  } else {
                    $tab_panes .= "
                    <div class=\"carousel-item\">
                      <img src=\"".$slide_value["image"]."\" class=\"d-block w-100\" alt=\"".$slide_value["image"]."\">
                      <div class=\"p-4 text-bg-primary bg-gradient\" style=\"--bs-bg-opacity: .8;\">
                        <p>".$slide_value["description"]."</p>
                      </div>
                    </div>";
                  }
                }
                $tab_panes .= "
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide=\"prev\">
                  <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                  <span class=\"visually-hidden\">Previous</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#section3slider-".$key."\" data-bs-slide=\"next\">
                  <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                  <span class=\"visually-hidden\">Next</span>
                </button>
              </div>
            </div>";
      }
    }
		return "
    <div class=\"row\">
      <div class=\"col-6\">
        <div class=\"row nav nav-pills slider-buttons\">
        ".$nav_items."
        </div>
      </div>
      <div class=\"col-6\">
        <div class=\"tab-content\" id=\"section3slider-tabContent\">
        ".$tab_panes."
        </div>
      </div>
    </div>
		";
	});
} );

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'section3slider_shortcode_bootstrap', plugin_dir_url( __FILE__ )."vendor/bootstrap-5.3.3-dist/css/bootstrap.min.css");

	wp_enqueue_script( 'section3slider_shortcode_bootstrap', plugin_dir_url( __FILE__ )."vendor/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js");
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