<?php

// カスタム投稿タイプ「症例」の登録
function register_custom_post_type_case() {
  $labels = array(
      'name'               => '症例',
      'singular_name'      => '症例',
      'menu_name'          => '症例',
      'add_new'            => '新規追加',
      'add_new_item'       => '新しい症例を追加',
      'edit_item'          => '症例を編集',
      'new_item'           => '新しい症例',
      'view_item'          => '症例を表示',
      'search_items'       => '症例を検索',
      'not_found'          => '症例が見つかりません',
      'not_found_in_trash' => 'ゴミ箱に症例がありません',
  );

  $args = array(
      'label'             => '症例',
      'labels'            => $labels,
      'public'            => false, // 非公開
      'show_ui'           => true,
      'show_in_menu'      => true,
      'query_var'         => false,
      'rewrite'           => false,
      'capability_type'   => 'post',
      'has_archive'       => false, // アーカイブなし
      'hierarchical'      => false,
      'menu_position'     => 5,
      'menu_icon'         => 'dashicons-clipboard', // 管理画面のアイコン（適宜変更）
      'supports'          => array('title', 'thumbnail'), // タイトルとサムネイルのみ
  );

  register_post_type('case', $args);
}
add_action('init', 'register_custom_post_type_case');


// カスタムタクソノミー「表示箇所」の登録
function register_custom_taxonomy_case_position() {
  $labels = array(
      'name'          => '表示箇所',
      'singular_name' => '表示箇所',
      'menu_name'     => '表示箇所',
  );

  $args = array(
      'label'             => '表示箇所',
      'labels'            => $labels,
      'public'            => false,
      'show_ui'           => true,  // 管理画面で表示可能
      'show_admin_column' => true,  // 症例一覧で表示
      'hierarchical'      => true,  // カテゴリー型
      'query_var'         => false,
      'rewrite'           => false,
  );

  register_taxonomy('case_position', 'case', $args);

  // 初期ターム「TOP」を登録
  if (!term_exists('TOP', 'case_position')) {
      wp_insert_term('TOP', 'case_position', array('slug' => 'top'));
  }
}
add_action('init', 'register_custom_taxonomy_case_position');


// clinic の投稿が更新されるたびに、表示箇所タームを更新
function update_case_position_terms($post_id, $post) {
  // 自動保存やリビジョンの処理をスキップ
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
  }

  // 投稿タイプが 'clinic' でなければ何もしない
  if ($post->post_type !== 'clinic') {
      return;
  }

  // 'case_position' の既存タームを取得
  $existing_terms = get_terms(array(
      'taxonomy'   => 'case_position',
      'hide_empty' => false,
      'fields'     => 'slugs', // タームのスラッグを取得
  ));

  // clinic の投稿一覧を取得し、ターム情報をリスト化
  $clinic_posts = get_posts(array(
      'post_type'      => 'clinic',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
  ));

  $clinic_terms = array('top'); // デフォルトの「TOP」を含める
  $clinic_term_map = array('top' => 'TOP'); // スラッグとターム名のマッピング

  foreach ($clinic_posts as $clinic) {
      $clinic_title = $clinic->post_title;
      $clinic_slug  = !empty($clinic->post_name) ? $clinic->post_name : sanitize_title($clinic_title);

      if (!empty($clinic_slug) && !in_array($clinic_slug, $clinic_terms)) {
          $clinic_terms[] = $clinic_slug;
          $clinic_term_map[$clinic_slug] = $clinic_title;
      }
  }

  // **不要なタームを削除**
  foreach ($existing_terms as $term_slug) {
      if (!in_array($term_slug, $clinic_terms)) {
          $term = get_term_by('slug', $term_slug, 'case_position');
          if ($term) {
              wp_delete_term($term->term_id, 'case_position');
          }
      }
  }

  // **必要なタームを追加**
  foreach ($clinic_term_map as $slug => $name) {
      if (!term_exists($slug, 'case_position')) {
          wp_insert_term($name, 'case_position', array('slug' => $slug));
      }
  }
}
add_action('save_post', 'update_case_position_terms', 10, 2);