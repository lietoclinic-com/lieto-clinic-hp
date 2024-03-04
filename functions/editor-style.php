<?php
//----------------------------------------------------
// ビジュアルエディタにスタイルを適用
//----------------------------------------------------

function my_theme_setup() {
  // editor-styles を指定
  add_theme_support('editor-styles');
  // 読み込むスタイルシートの場所を指定
  add_editor_style('editor-style.css'); 
}
add_action('after_setup_theme', 'my_theme_setup');
