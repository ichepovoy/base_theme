<?php
// Більш детально про цей файл в відео уроках 

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


function add_theme_scripts() {

    
    // wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.1', 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // wp_enqueue_style( 'advanced', get_template_directory_uri() . '/css/advanced.css', array(), '1.1', 'all');

    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);

}
add_filter( 'widget_text', 'do_shortcode' );

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



//menu register
add_action('init', 'register_nav_menus_on_init');

function register_nav_menus_on_init() {
    register_nav_menus(array(
        'top-pages-menu' => 'Top Pages Menu',
        'top-cat-menu' => 'Top Categories Menu',
        'footer-link-menu' => 'Footer Link Menu',
    ));
}
/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

//register widget
function devise_widgets_init() {
    register_sidebar(array(
        'name' => __( 'Search', 'devise' ),
        'id' => 'search-top',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => __( 'Language', 'devise' ),
        'id' => 'lang-top',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

}
add_action( 'init', 'devise_widgets_init' );

# Разрешить загрузку svg
function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

// search customization
function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );


add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );