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

    $ages = $_GET['age'];
    if(is_post_type_archive('voice')){
      if (!empty($ages)) {
        foreach( $ages as $age ) {
          if($age === 'twenty'){$title .= '20代';}
          if($age === 'thirty'){$title .= '30代';}
          if($age === 'fourty'){$title .= '40代';}
          if($age === 'fifty'){$title .= '50代';}
          if($age === 'sixty'){$title .= '60代';}
        }
        $title .= 'の患者様の声｜リエートクリニック【公式】';

      } else { // 年齢が選択されない場合
        $title = '患者様の声｜リエートクリニック【公式】';
      }
    }

    // 性別カテゴリーページ
    if (is_tax('sex')) {
      $term = get_queried_object();
      $title = $term->name;
      if (!empty($ages)) {
        foreach( $ages as $age ) {
          if($age === 'twenty'){$title .= '20代';}
          if($age === 'thirty'){$title .= '30代';}
          if($age === 'fourty'){$title .= '40代';}
          if($age === 'fifty'){$title .= '50代';}
          if($age === 'sixty'){$title .= '60代';}
        }
      }
      $title .= 'の患者様の声 |リエートクリニック【公式】';
    }
    return $title;
  }
  add_filter('wpseo_title', 'change_title');
