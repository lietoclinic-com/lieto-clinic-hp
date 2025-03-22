<?php
//----------------------------------------------------
// CSSとJSのスクリプト読み込み
//----------------------------------------------------
function my_scripts() {

  //【JSファイル】---------------------------------------
  // jquery
  wp_deregister_script('jquery'); // デフォルトは削除
  wp_enqueue_script('jquery', get_template_directory_uri() . '/dist/js/jquery-3.7.1.min.js', array(), '1.0.0', true);

  // ajaxzip3
  wp_enqueue_script('ajaxzip3', '//ajaxzip3.github.io/ajaxzip3.js', array('jquery'), '1.0.0', true);

  // slick-js
  wp_enqueue_script('slick', get_template_directory_uri() . '/dist/js/slick.min.js', array('jquery'), '1.0.0', true);

  // splide.js
  wp_enqueue_script('splide', get_template_directory_uri().'/dist/js/splide.min.js', array('jquery'), '1.0.0', true);

  // beer-slider-js
  // wp_enqueue_script('beer-slider', 'https://unpkg.com/beerslider/dist/BeerSlider.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('image-compare-viewer', 'https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.js', array('jquery'), '1.0.0', true);

  // main-js
  wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', array('jquery'), '1.0.0', true);



  // jsの遅延読み込み
  function add_defer_attribute($tag, $handle) {
    $defer_scripts = array('jquery', 'ajaxzip3', 'slick', 'image-compare-viewer', 'main'); // 遅延読み込みにしたいスクリプトのハンドルを指定
    foreach ($defer_scripts as $defer_script) {
      if (strpos($tag, $defer_script) !== false) {
        return str_replace(' src', ' defer="defer" src', $tag);
      }
    }
    return $tag;
  }
  add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);


  //【CSSファイル】---------------------------------------
  // slick-css
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/dist/css/slick.css', array(), '1.0.0');
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/dist/css/slick-theme.css', array('slick-style'), '1.0.0');

  // slider.css
  wp_enqueue_style('splide-css', get_template_directory_uri().'/dist/css/splide-core.min.css', array(), '1.0.0');

  // style-css
  wp_enqueue_style('style', get_template_directory_uri().'/dist/css/style.min.css', array(), '1.0.0');
  // wp_enqueue_style('beer-slider', get_template_directory_uri().'/dist/css/beer-slider.css', array(), '1.0.0');
  wp_enqueue_style('image-compare-viewer-css', 'https://unpkg.com/image-compare-viewer/dist/image-compare-viewer.min.css', array(), '1.0.0');
  wp_enqueue_style('add', get_template_directory_uri().'/dist/css/add.css', array(), '1.0.0');

  //トップの場合はCSSを非同期で読み込む
  function load_css_async_top($html, $handle, $href, $media) {
    //ホームの場合のみカスタマイズ
    if(is_front_page()) {
      //元の link 要素の HTML（改行が含まれているようなので前後の空白文字を削除）
      $default_html = trim($html);
      //HTML を変更
      $html = <<<EOT
      <link rel="stylesheet" id="{$handle}-css" href="$href" media="print" onload="this.media='all'">
      <noscript>{$default_html}</noscript>\n
      EOT;
    }
    return $html;
  }
  add_filter( 'style_loader_tag', 'load_css_async_top', 10, 4 );

}
add_action('wp_enqueue_scripts', 'my_scripts');
