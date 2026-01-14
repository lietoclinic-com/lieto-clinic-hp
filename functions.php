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

    // 管理画面（編集画面）や RSS などでは挿入しない
    if ( is_admin() ) {
        return $content;
    }

    // 投稿タイプが「post」のシングルページ以外は何もしない
    if ( ! is_singular( 'post' ) ) {
        return $content;
    }

    // 挿入したいバナーHTML
    $banner = '
    <!-- banner -->
    <div class="banner-container" style="margin-top: 40px;">
      <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" target="_blank" rel="noopener">
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
