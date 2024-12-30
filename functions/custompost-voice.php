<?php
/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'voice',
    array(
      'label' => '患者様の声',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
      // この部分を追加
      'rewrite' => array(
        'slug' => 'voice/post',  // URLに /post/ を追加
        'with_front' => true
      )
    )
  );

  register_taxonomy(
    'sex',
    'voice',
    array(
      'label' => '性別',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'age',
    'voice',
    array(
      'label' => '年齢',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
}
