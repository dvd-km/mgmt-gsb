<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Top Menu', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
    // fontawesome cdn
    wp_enqueue_style( 'wp-bootstrap-pro-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css' );
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );


function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}



//* ---------- news and events ------------ */
 // create section
 add_action ('init','create_post_type');
 function create_post_type() {
        register_post_type('news-and-events',
        array(
            'labels' => array(
            'name' => __('News and Events'),
            'singluar_name' => __('News and Events')
        ),
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'taxonomies' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

// create tags & categories
add_action  ('init','define_news_category');
    function define_news_category() {
        register_taxonomy('newscategory','news-and-events',
        array ('hierarchical'=>false,'label'=>'News and Events Category','query_var'=>true,'rewrite'=>true));
    }
add_action  ('init','define_news_tag');
    function define_news_tag() {
        register_taxonomy('newstag','news-and-events',
        array ('hierarchical'=>false,'label'=>'News and Events Tag','query_var'=>true,'rewrite'=>true));
    }
    
// create path to single-custom.php
function include_template_function($template_path) {
  if (get_post_type() == 'news-and-events') {
    if (is_single()) {
      if ($theme_file = locate_template(array ('single-news.php'))) {
        $template_path = $theme_file;
      } else {
        $template_path = plugin_dir_path(__FILE__) . '/single-news.php';
      }
    }
  }
  return $template_path;
}

add_filter('template_include', 'include_template_function', 1);



//Add columns to news admin post list
function add_acf_columns ( $columns ) {
    return array_merge ( $columns, array ( 
      'eventttime' => __ ( 'Event Time' ),
      'eventlocation'   => __ ( 'Event Location' ), 
      'eventnote'   => __ ( 'Event Note' ) 
    ) );
  }
  add_filter ( 'manage_news-and-events_posts_columns', 'add_acf_columns' );


//output the meta field values
function news_custom_column ( $column, $post_id ) {
    switch ( $column ) {
      case 'eventttime':
        echo get_post_meta ( $post_id, 'eventtime', true );
        break;
      case 'eventlocation':
        echo get_post_meta ( $post_id, 'eventlocation', true );
        break;
        case 'eventnote':
        echo get_post_meta ( $post_id, 'eventnote', true );
        break;
    }
  }
  add_action ( 'manage_news-and-events_posts_custom_column', 'news_custom_column', 10, 2 );




//* ---------- video ------------ */
 // create section
 add_action ('init','create_post_type_2');
 function create_post_type_2() {
        register_post_type('video',
        array(
            'labels' => array(
            'name' => __('Videos'),
            'singluar_name' => __('Videos')
        ),
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'taxonomies' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
    
   
// create path to single-custom.php
function include_template_function_2($template_path) {
  if (get_post_type() == 'video') {
    if (is_single()) {
      if ($theme_file = locate_template(array ('single-video.php'))) {
        $template_path = $theme_file;
      } else {
        $template_path = plugin_dir_path(__FILE__) . '/single-video.php';
      }
    }
  }
  return $template_path;
}

add_filter('template_include', 'include_template_function_2', 1);



//* ---------- shoutout ------------ */
 // create section
 add_action ('init','create_post_type_3');
 function create_post_type_3() {
        register_post_type('shoutout',
        array(
            'labels' => array(
            'name' => __('Shoutout'),
            'singluar_name' => __('Shoutout')
        ),
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'taxonomies' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
    
// create path to single-custom.php
function include_template_function_3($template_path) {
  if (get_post_type() == 'shoutout') {
    if (is_single()) {
      if ($theme_file = locate_template(array ('single-shoutout.php'))) {
        $template_path = $theme_file;
      } else {
        $template_path = plugin_dir_path(__FILE__) . '/single-shoutout.php';
      }
    }
  }
  return $template_path;
}

add_filter('template_include', 'include_template_function_3', 1);




//* ---------- staffs ------------ */
 // create section
//  add_action ('init','create_post_type_4');
//  function create_post_type_4() {
//         register_post_type('staff',
//         array(
//             'labels' => array(
//             'name' => __('Staffs'),
//             'singluar_name' => __('Staffs')
//         ),
//         'publicly_queryable' => true,
//         'show_in_nav_menus' => true,
//         'show_ui' => true,
//         'taxonomies' => true,
//         'supports' => array('title', 'editor', 'thumbnail'),
//         )
//     );
// }
    
// create tags & categories
// add_action  ('init','define_staff_category');
//     function define_staff_category() {
//         register_taxonomy('staffcategory','staff',
//         array ('hierarchical'=>false,'label'=>'Staffs Category','query_var'=>true,'rewrite'=>true));
//     }

// create path to single-custom.php
// function include_template_function_4($template_path) {
//   if (get_post_type() == 'shoutout') {
//     if (is_single()) {
//       if ($theme_file = locate_template(array ('single-staff.php'))) {
//         $template_path = $theme_file;
//       } else {
//         $template_path = plugin_dir_path(__FILE__) . '/single-staff.php';
//       }
//     }
//   }
//   return $template_path;
// }

// add_filter('template_include', 'include_template_function_4', 1);




//* ---------- jobs ------------ */
 // create section
 add_action ('init','create_post_type_5');
 function create_post_type_5() {
        register_post_type('jobs',
        array(
            'labels' => array(
            'name' => __('Jobs'),
            'singluar_name' => __('Jobs')
        ),
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'taxonomies' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
    
// create path to single-custom.php
function include_template_function_5($template_path) {
  if (get_post_type() == 'jobs') {
    if (is_single()) {
      if ($theme_file = locate_template(array ('single-job.php'))) {
        $template_path = $theme_file;
      } else {
        $template_path = plugin_dir_path(__FILE__) . '/single-job.php';
      }
    }
  }
  return $template_path;
}

add_filter('template_include', 'include_template_function_5', 1);




/*others*/
//remove post removing menu item
function post_remove () { 
    remove_menu_page('edit.php');
 }
 add_action('admin_menu', 'post_remove');  
//remove comment menu item 
 add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}


//remove page text field 
add_action('admin_init', 'remove_textarea');

    function remove_textarea() {
            remove_post_type_support( 'page', 'editor' );
            // remove_post_type_support( 'video', 'editor' );
    }


    // get metadata for news and courses templates

function be_dps_output_customization_list( $output_whole, $original_atts, $image, $title, $date, $excerpt, $inner_wrapper, $content, $class, $author, $category_display_text  ) {
    $eventtime = get_post_meta ( get_the_ID(), 'eventtime', true ); 
    $eventtime = date('M d, Y', strtotime($eventtime));
    $date = $eventtime; //for upcoming & past sorting 
    $eventtime_2 = get_post_meta ( get_the_ID(), 'eventtime_2', true ); 
    $eventlocation = get_post_meta (  get_the_ID(), 'eventlocation', true );
    $output_whole = 
    '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">'. $image . $title .  $author . $category_display_text . $excerpt . $content . '</' . $inner_wrapper . '>'; 

        if (get_post_type() == 'news-and-events') {
            if( !empty($eventtime) && !empty($eventtime_2) ) {
                $eventtime_2 = date('M d, Y', strtotime($eventtime_2));
                $output_whole = 
                '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">'.
                $image . 
                '<div class="meta"><span>'. $eventtime. ' — '. $eventtime_2.'</span> </div>'. 
                $title .  $author . $category_display_text . $excerpt . $content . '</' . $inner_wrapper . '>'; 
            } 
            
            else if( !empty($eventtime) && empty($eventtime_2) ) {
                $output_whole = 
                '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">'.
                $image . 
                '<div class="meta"><span>'. $eventtime. '</span> </div>'. 
                $title . $author . $category_display_text . $excerpt . $content . '</' . $inner_wrapper . '>'; 
            }
            
            
        } 

    return $output_whole;
}
add_filter( 'display_posts_shortcode_output', 'be_dps_output_customization_list', 10, 11 );




//gallery

//remove the thumb size specs

set_post_thumbnail_size( 1200, 9999 );
add_image_size( 'homepage-thumb', 220, 180, true );

function add_image_insert_override($sizes){
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'add_image_insert_override' );


remove_image_size('large');
remove_image_size('medium');
remove_image_size('thumbnail');


function remove_image_sizes( $sizes, $metadata ) {
    return [];
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_image_sizes', 10, 2 );


//remove image links on a gallery
add_shortcode( 'gallery', 'modified_gallery_shortcode' );
function modified_gallery_shortcode($attr) {
    $attr['link']="none";
    $output = gallery_shortcode($attr);
    return $output; 
}

// allow multiple galleries in a page

function mbgc_gallery_shortcode( $atts ) {

    // $post_id = $atts['id'];

    extract( shortcode_atts(
        array(
            'id' => '',
        ), $atts )
    );

    $html_out = '123';

    // $post = get_post( $id );

    // if ( $post ) :

        if( have_rows('mbgc_gallery') ):

            $html_out .= '<div class="mbgc-gallery owl-carousel owl-theme">';

            while( have_rows('mbgc_gallery') ): the_row(); 

                // vars
                $image = get_sub_field('mbgc_image');
                $caption = get_sub_field('mbgc_caption');
                $title = get_sub_field('mbgc_title');
                $sub_title = get_sub_field('mbgc_sub_title');

                var_dump($caption);

                if ( $image ) :         
                    $html_out .= '<div class="mbgc-gallery-item">';

                        if ( $caption ) : 
                            $html_out .= '<div class="mbgc-slide-caption">';
                                $html_out .= '<h4>' . $caption . '</h4>';
                                $html_out .= '<div class="mbgc-slide-titles">';
                                    $html_out .= '<h6>' . $title . '</h6>';
                                    $html_out .= '<h6>' . $sub_title . '</h6>';
                                $html_out .= '</div>';
                            $html_out .= '</div>';
                        endif;

                        $html_out .= '<div class="mbgc-slide">';
                            $html_out .= '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                        $html_out .= '</div>';

                    $html_out .= '</div>';
                endif;

            endwhile;

            $html_out .= '</div>';

        endif;

    // endif;

    return $html_out;

}
add_shortcode('mbgc_gallery', 'mbgc_gallery_shortcode');


//have two menus

function register_my_menu() {
  register_nav_menu('additional-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


//remove empty <p>
/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);




//set editer height

add_action('admin_head', 'admin_styles');
function admin_styles() {
	?>
	<style>
		iframe[id^='wysiwyg-acf-field-favicon_'] {
            min-height:40px;
            max-height:100px;
		}
	</style>
	<?php
}
//  

//read more 

function fredy_custom_excerpt($text) {
  $text = strip_shortcodes( $text );
  $text = apply_filters('the_content', $text);
  $text = str_replace(']]>', ']]>', $text);
// $excerpt_length = apply_filters('excerpt_length', 55);
  $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
  return wp_trim_words( $text, $excerpt_length, $excerpt_more );
}





//side bar on the news list
function my_widget_posts_args( $args ) {
	if ( is_tax() ) {
		$term = get_queried_object();
		$args = array(
			'posts_per_page' => 10,
			'tax_query'     => array(
				array(
					'taxonomy' => $term->taxonomy,
					'terms'    => $term->term_id,
				),
			),
		);
	}

	return $args;
}
add_filter( 'widget_posts_args', 'my_widget_posts_args');
