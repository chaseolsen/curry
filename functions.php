<?php

function curry_script_enqueue() {
  // Get Style
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/curry.css', array(), '1.0.0', 'all');
  // Get JS
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/curry.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'curry_script_enqueue');

function curry_theme_setup() {

  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}

// Execute function after theme setup is done
add_action('after_setup_theme', 'curry_theme_setup');

// Theme support
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

?>
