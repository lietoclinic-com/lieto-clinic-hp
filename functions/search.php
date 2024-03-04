<?php
//----------------------------------------------------
// 検索で、表示中のカスタム投稿の記事をセット
//----------------------------------------------------
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
    $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}
add_filter('template_include','custom_search_template');

// 検索結果ページのURL変更
// function search_url_customize() {
//   if ( is_search() && ! empty( $_GET['s'] ) ) {
//     wp_safe_redirect( home_url( '/column/' ) . urlencode( get_query_var( 's' ) ) );
//     exit();
//   }
// }
// add_action( 'template_redirect', 'search_url_customize' );
