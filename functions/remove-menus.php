<?php
//----------------------------------------------------
// 管理画面のコメントと投稿を非表示
//----------------------------------------------------

// メニュー(コメント)の非表示
function remove_menus(){
  remove_menu_page('edit-comments.php'); 
  // remove_menu_page('edit.php'); 
}
add_action( 'admin_menu', 'remove_menus' );


// 「投稿」を「コラム」に変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'コラム';
	$menu[5][0] = $name.'一覧';
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'コラム';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


// カテゴリ/タグの非表示
function hide_taxonomy_from_menu() {
  global $wp_taxonomies;

  // カテゴリーの非表示
  // if ( !empty( $wp_taxonomies['category']->object_type ) ) {
  //   foreach ( $wp_taxonomies['category']->object_type as $i => $object_type ) {
  //     if ( $object_type == 'post' ) {
  //       unset( $wp_taxonomies['category']->object_type[$i] );
  //     }
  //   }
  // }
  // タグの非表示
  if ( !empty( $wp_taxonomies['post_tag']->object_type ) ) {
    foreach ( $wp_taxonomies['post_tag']->object_type as $i => $object_type ) {
      if ( $object_type == 'post' ) {
        unset( $wp_taxonomies['post_tag']->object_type[$i] );
      }
    }
  }
  return true;
}
add_action( 'init', 'hide_taxonomy_from_menu' );
