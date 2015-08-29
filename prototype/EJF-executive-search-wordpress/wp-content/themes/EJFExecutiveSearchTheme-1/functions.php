<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();

    function wpb_adding_scripts() {
        wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(),'1.1', true, true);
        wp_register_script('vendor', get_template_directory_uri() . '/js/vendor.js', array(),'1.1', true, true);
        wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(),'1.1', true, true);
        wp_enqueue_script('vendor');
        wp_enqueue_script('plugins');
        wp_enqueue_script('main');
    }

    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

        
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


    function string_limit_words($string, $word_limit)
    {
      $words = explode(' ', $string, ($word_limit + 1));
      if(count($words) > $word_limit) {
      array_pop($words);
      //add a ... at last article when more than limit word count
      echo implode(' ', $words)."..."; } else {
      //otherwise
      echo implode(' ', $words); }
    }

    add_theme_support('post-thumbnails');

    // Google fonts
    function load_fonts() {
            wp_enqueue_style('googleFonts-1', 'http://fonts.googleapis.com/css?family=Lato');
            wp_enqueue_style('googleFonts-2', 'http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic');
        }

    add_action('wp_print_styles', 'load_fonts');

?>