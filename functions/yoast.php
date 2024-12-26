<?php 
  //-----------------------------------------------------
  // 【yoast seo schema 構造化データ】
  //-----------------------------------------------------
  add_filter( 'wpseo_json_ld_output', '__return_false' );
  
  function custom_canonical_url() {
    add_filter('wpseo_canonical','__return_false');
    
    // カスタムのcanonical URLを追加
    add_action('wp_head', function() {
      global $wp;
      $current_url = home_url(add_query_arg(array(), $wp->request))."/";
      
      // ページネーションの場合はページ番号を含むURLを使用
      if (is_paged()) {
        $paged = get_query_var('paged');
        $current_url = get_pagenum_link($paged);
      }
      echo '<link rel="canonical" href="' . esc_url($current_url) . '" >' . "\n";

    });
  }
  add_action('init', 'custom_canonical_url');
