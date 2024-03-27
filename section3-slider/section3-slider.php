<?php
/**
 * Plugin Name:       Section 3 Slider
 * Plugin URI:        https://github.com/fshangala/section3-slider
 * Description:       A section with a slider of images
 * Version:           2.1.3
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
      $nav_items .= "<button class=\"fshangala-button\"><img src=\"".$value["icon"]."\" alt=\"".$value["icon"]."\">".$value["label"]."</button>";
      $tab_panes .= "<div class=\"fshangala-slideshow-container\">";
      foreach ($value["slides"] as $slide_key => $slide_value) {
        $tab_panes .= "<div class=\"fshangala-slide\"><img src=\"".$slide_value["image"]."\" alt=\"a1.jpg\"></div>";
      }
      $tab_panes .= "
      <div class=\"fshangala-text\">
        <div class=\"fshangala-text-header\">
          <h3 class=\"fshangala-heading\">".$value["title"]."</h3>
          <div class=\"fshangala-buttons\">
            <button class=\"fshangala-previous\">&#10094;</button>
            <button class=\"fshangala-next\">&#10095;</button>
          </div>
        </div>
        <div class=\"fshangala-text-body\">
          <p>".$value["description"]."</p>
        </div>
      </div>";
      $tab_panes .= "</div>";
    }
		return "
    <div class=\"section3slider\">
      <div class=\"fshangala-row\">
        <div class=\"fshangala-column\">
          <div class=\"fshangala-button-group\">
          ".$nav_items."
          </div>
        </div>
        <div class=\"fshangala-column\">
          <div class=\"fshangala-slideshows fshangala-slide-animation\">
            ".$tab_panes."
          </div>
        </div>
      </div>
    </div>
		";
	});
} );
/*
class Elementor_Hello_World_Widget_1 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_1';
	}

	public function get_title() {
		return esc_html__( 'Hello World 1', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>
		<p> Hello World </p>
		<?php
	}

	protected function content_template() {
		?>
		<p> Hello World </p>
		<?php
	}
}

add_action( 'elementor/widgets/register', function($widgets_manager){
  $widgets_manager->register( new Elementor_Hello_World_Widget_1() );
} );
*/

add_action( 'elementor/frontend/after_enqueue_styles', function(){
	wp_register_style( 'section3slider_style', plugins_url( 'style.css', __FILE__ ) );

	wp_enqueue_style( 'section3slider_style' );
} );

add_action( 'elementor/frontend/after_register_scripts', function(){
	wp_register_script( 'section3slider_js', plugins_url( 'new.js', __FILE__ ) );

	wp_enqueue_script( 'section3slider_js' );
} );

//add_action( 'wp_enqueue_scripts', function(){
	//wp_enqueue_style( 'section3slider_style', plugin_dir_url( __FILE__ )."style.css");
	//wp_enqueue_script( 'section3slider_js', plugin_dir_url( __FILE__ )."new.js");
//});

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