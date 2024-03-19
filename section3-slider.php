<?php
/**
 * Plugin Name:       Section 3 Slider
 * Plugin URI:        https://github.com/fshangala/section3-slider
 * Description:       A section with a slider of images
 * Version:           2.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Funduluka Shangala
 * Author URI:        https://github.com/fshangala
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       section3-slider
 * Domain Path:       /languages
 */


add_action( 'init', function(){
  /**
  * Register the section3slider_render shortcode
  */
	add_shortcode("section3slider_render",function($attr=[],$content=null){
    $sections_list = array(
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/a.svg",
        "label"=>"Label a",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/a3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/b.svg",
        "label"=>"Label b",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/b3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/c.svg",
        "label"=>"Label c",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/c3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/d.svg",
        "label"=>"Label d",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/d3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/e.svg",
        "label"=>"Label e",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/e3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/f.svg",
        "label"=>"Label f",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/f3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/g.svg",
        "label"=>"Label g",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/g3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/h.svg",
        "label"=>"Label h",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/h3.jpg",
          ),
        ),
      ),
      array(
        "icon"=>plugin_dir_url( __FILE__ )."assets/icons/i.svg",
        "label"=>"Label i",
        "title"=>"Some Title",
        "description"=>"Making good use of the advantages of  high floors and adding a loft to your home will not only enhance the modern feel of your home, but also help increase practical space!",
        "slides"=>array(
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i1.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i2.jpg",
          ),
          array(
            "image"=>plugin_dir_url( __FILE__ )."assets/i3.jpg",
          ),
        ),
      ),
    );

    $nav_items="";
    $tab_panes="";
    foreach ($sections_list as $key => $value) {
      $nav_items .= "<button class=\"button\" onclick=\"showSlide(".$key.");\"><img src=\"".$value["icon"]."\" alt=\"".$value["icon"]."\">".$value["label"]."</button>";
      $tab_panes .= "<div class=\"slideshow-container\">";
      foreach ($value["slides"] as $slide_key => $slide_value) {
        $tab_panes .= "<div class=\"slide\"><img src=\"".$slide_value["image"]."\" alt=\"a1.jpg\"></div>";
      }
      $tab_panes .= "
      <div class=\"text\">
        <div class=\"text-header\">
          <h3 class=\"heading\">".$value["title"]."</h3>
          <div class=\"buttons\">
            <button class=\"previous\">previous</button>
            <button class=\"next\">next</button>
          </div>
        </div>
        <div class=\"text-body\">
          <p>".$value["description"]."</p>
        </div>
      </div>";
      $tab_panes .= "</div>";
    }
		return "
    <div class=\"section3slider\">
      <div class=\"row\">
        <div class=\"column\">
          <div class=\"button-group\">
          ".$nav_items."
          </div>
        </div>
        <div class=\"column\">
          <div class=\"slideshows\">
            ".$tab_panes."
          </div>
        </div>
      </div>
    </div>
		";
	});
} );

add_action( 'wp_enqueue_scripts', function(){
	wp_enqueue_style( 'section3slider_style', plugin_dir_url( __FILE__ )."style.css");
	wp_enqueue_script( 'section3slider_js', plugin_dir_url( __FILE__ )."new.js");
});

/**
 * Activate the plugin.
 */
register_activation_hook( __FILE__, function(){
	flush_rewrite_rules(); 
} );

/**
 * Deactivation hook.
 */
register_deactivation_hook( __FILE__, function(){
	flush_rewrite_rules();
} );