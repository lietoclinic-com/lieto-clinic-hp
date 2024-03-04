<?php
  function change_title($title){
    if(is_post_type_archive('column')){
      $title = 'コラム一覧｜リエートクリニック【公式】';
    }
    if(is_post_type_archive('clinic')){
      $title = 'クリニック一覧｜リエートクリニック【公式】';
    }
    if(is_post_type_archive('news')){
      $title = 'お知らせ｜リエートクリニック【公式】';
    }
    if(is_post_type_archive('recruit')){
      $title = '採用について｜リエートクリニック【公式】';
    }
    return $title;
  }
  add_filter('wpseo_title', 'change_title');
