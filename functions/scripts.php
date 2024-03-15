<?php
//----------------------------------------------------
// CSSとJSのスクリプト読み込み
//----------------------------------------------------

function my_scripts() {
  
  wp_deregister_script('jquery');
  // jquery
  wp_enqueue_script('jquery-js', '//code.jquery.com/jquery-3.6.0.min.js', array(), '1.0.0', true);

  // ajaxzip3
  wp_enqueue_script('ajaxzip3-js', '//ajaxzip3.github.io/ajaxzip3.js', array('jquery-js'), '1.0.0', true);

  // slick.js
  wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery-js'), '1.0.0', true);

  // main.js
  wp_enqueue_script('main-js', get_template_directory_uri().'/dist/js/main.min.js', array('jquery-js'), '1.0.0', true);

  // font-awesome.css
  // wp_enqueue_style('font-awesome','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0');

  // slick.css
  wp_enqueue_style('slick_css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0');
  wp_enqueue_style('slick-theme_css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.0');
  // common.css
  wp_enqueue_style('style_css', get_template_directory_uri().'/dist/css/style.min.css', array(), '1.0.0');
}
add_action( 'wp_enqueue_scripts', 'my_scripts');
