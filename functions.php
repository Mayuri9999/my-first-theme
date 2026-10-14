<?php
function my_first_theme_styles() {
  wp_enqueue_style('my-first-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_first_theme_styles');