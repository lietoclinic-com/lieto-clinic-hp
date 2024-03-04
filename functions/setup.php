<?php
//----------------------------------------------------
// 基本設定
//----------------------------------------------------
function my_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5',array(
    'comment-list', 
    'comment-form', 
    'search-form', 
    'gallery',
    'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');  
