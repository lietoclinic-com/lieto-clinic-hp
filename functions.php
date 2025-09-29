<?php
//----------------------------------------------------
// Functions
//
// MEMO: functions配下にファイルを格納するだけで適用されるため、
//       必要な機能以外は削除すること
//----------------------------------------------------

$includes = array('/functions');

foreach ($includes as $include) {
  foreach (glob(__DIR__ . $include . '/*.php') as $file) {
    $template_name = str_replace(
      array(trailingslashit(__DIR__), '.php'),
      '',
      $file
    );
    get_template_part($template_name);
  }
}

//----------------------------------------------------
// Functions
// コラム最初の見出し前にバナー表示
//----------------------------------------------------
function insert_banner_before_first_h2( $content ) {
    // 挿入したいバナーHTML
    $banner = '
    <!-- banner -->
    <div class="banner-container" style="margin-top: 40px;">
      <a href="https://lietoclinic.com/form/" target="_blank">
        <img src="' . esc_url( get_template_directory_uri() ) . '/dist/img/common/monitor_in-header.webp" alt="モニター募集" decoding="async" loading="lazy">
      </a>
    </div>
    ';

    // 最初の <h2> の直前にバナーを差し込む（1回だけ置換）
    $pattern     = '/(<h2[^>]*>)/i';
    $replacement = $banner . '$1';
    $content     = preg_replace( $pattern, $replacement, $content, 1 );

    return $content;
}
add_filter( 'the_content', 'insert_banner_before_first_h2' );
