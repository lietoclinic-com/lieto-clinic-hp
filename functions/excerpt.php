<?php
//----------------------------------------------------
// 抜粋の記号と文字数の設定
//----------------------------------------------------

function excerpt_word() {
  return '...';
}
add_filter('excerpt_more','excerpt_word');

function excerpt_length() {
  return 80;
}
add_filter( 'excerpt_mblength', 'excerpt_length');
