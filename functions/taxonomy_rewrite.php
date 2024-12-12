<?php
/*	カスタム投稿のパーマリンク設定
-----------------------------------------------------*/
//パーマリンクからタクソノミー名を削除
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
  return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);

//カスタムタクソノミーアーカイブ用のリライトルールを追加 ページ送り時もリライト
//★それぞれcolumnはカスタム投稿タイプ名、column_catはカスタムタクソノミー名を挿入
add_rewrite_rule('column/([^/]+)/?$', 'index.php?column_cat=$matches[1]', 'top');
add_rewrite_rule('column/([^/]+)/page/([0-9]+)/?$', 'index.php?column_cat=$matches[1]&paged=$matches[2]', 'top');

// 基本アーカイブページ用のrewriteルール（追加）
add_rewrite_rule(
  'voice/?$',
  'index.php?post_type=voice',
  'top'
);

// 基本アーカイブページのページネーション用（追加）
add_rewrite_rule(
  'voice/page/([0-9]+)/?$',
  'index.php?post_type=voice&paged=$matches[1]',
  'top'
);

// 性別でのアーカイブページ用のrewriteルール（既存）
add_rewrite_rule(
  'voice/([^/]+)/?$',
  'index.php?sex=$matches[1]',
  'top'
);
add_rewrite_rule(
  'voice/([^/]+)/page/([0-9]+)/?$',
  'index.php?sex=$matches[1]&paged=$matches[2]',
  'top'
);

// 記事詳細ページ用のrewriteルール（既存）
add_rewrite_rule(
  'voice/post/([^/]+)/?$',
  'index.php?post_type=voice&name=$matches[1]',
  'top'
);

/*
	タクソノミー未選択時に特定のタームを選択させる
----------------------------------------------------- */
function add_defaultcategory_automatically($post_ID) {
  global $wpdb;
  //カスタムタクソノミーのタームを取得
  $curTerm = wp_get_object_terms($post_ID, 'column_cat');//★カスタムタクソノミー名
  //既存のターム指定数が未設定の時に特定のタームを指定
  if (0 == count($curTerm)) {
    $defaultTerm= array(6);//★選択させたいタームID(その他)
    wp_set_object_terms($post_ID, $defaultTerm, 'column_cat');//★カスタムタクソノミー名
  }
}
// columnを作成する際に指定
add_action('publish_column', 'add_defaultcategory_automatically');//★publish_カスタム投稿タイプ名
