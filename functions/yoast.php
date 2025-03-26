<?php 
  //-----------------------------------------------------
  // 【yoast seo schema 構造化データ】
  //-----------------------------------------------------
  add_filter( 'wpseo_json_ld_output', '__return_false' );
  
  // canonical URLの設定
  function custom_canonical_url() {
    add_filter('wpseo_canonical','__return_false');
    
    // カスタムのcanonical URLを追加
    add_action('wp_head', function() {
      global $wp;
      $current_url = home_url(add_query_arg(array(), $wp->request))."/"; // お尻に"/"入り
      echo '<link rel="canonical" href="' . esc_url($current_url) . '" >' . "\n"; // canonical表示
    });
  }
  add_action('init', 'custom_canonical_url');


  // ２ページ目以降のタイトル変更
  function custom_wpseo_title($title) {
    if (is_page('latest') or is_category()) {
      if (is_paged()){ //2ページ目かどうかの判別
        $pagenum = get_query_var('paged'); //ページ番号の取得
        // カスタムタイトルを設定
        $title = '最新コラム一覧｜'.$pagenum.'ページ目｜リエートクリニック【公式】';
      }
    }
    return $title;
  }
  add_filter('wpseo_title', 'custom_wpseo_title', 10, 1);
