<?php
function load_custom_scripts() {
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap');

  // Theme CSS
  wp_enqueue_style('theme-css', get_theme_file_uri('/assets/css/style.css'));

  // Swiper CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');

  // jQuery
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, false);

  // jQuery InView
  wp_enqueue_script('jquery-inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

  // Theme JavaScript
  wp_enqueue_script('theme-js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'load_custom_scripts');
