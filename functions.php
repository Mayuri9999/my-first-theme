<?php
function homefinder_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menus(array(
    'primary' => 'Primary Menu',
  ));
}
add_action('after_setup_theme', 'homefinder_setup');

function homefinder_styles() {
  wp_enqueue_style('homefinder-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'homefinder_styles');