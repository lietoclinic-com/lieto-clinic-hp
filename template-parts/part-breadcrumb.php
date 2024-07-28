<div class="c-breadcrumb">
  <div class="c-breadcrumb__inner">
    <ol class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">

      <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" class="home" itemprop="item">
          <span itemprop="name">リエートクリニック｜横浜・名古屋での医療痩身・メディカルダイエット</span>
        </a>
        <meta itemprop="position" content="1" />
      </li>
      <span>/</span>

      <?php // 親ページがある固定のとき
        if (is_page() && $post->post_parent):
          $parent_page = get_post($post->post_parent);
          $parent_page->post_title;
          $parent_page->post_name;
      ?>
      <!-- ①親がいる固定ページ -->
      <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/<?php echo $parent_page->post_name; ?>/" itemprop="item">
          <span itemprop="name"><?php echo $parent_page->post_title; ?></span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
        <span>/</span>
      <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span class="current-item" itemprop="name"><?php single_post_title(); ?></span>
        <meta itemprop="position" content="3" />
      </li>

      <?php elseif(is_search()): ?>
        <!-- ②検索結果ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/column/" itemprop="item">
            <span itemprop="name">コラム一覧</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <span>/</span>

        <?php
          global $wp_query;
          $total_results = $wp_query->found_posts;
          $search_query = get_search_query();
        ?>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">
            <?php echo $search_query; ?>
          </span>
          <meta itemprop="position" content="3" />
        </li>

      <?php elseif(is_home()):  ?>
        <!-- ③投稿アーカイブページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">コラム一覧</span>
          <meta itemprop="position" content="2" />
        </li>
      <?php elseif(is_post_type_archive('clinic')): ?>
        <!-- ③投稿アーカイブページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">クリニック一覧</span>
          <meta itemprop="position" content="2" />
        </li>
      <?php elseif(is_post_type_archive('news')): ?>
        <!-- ③投稿アーカイブページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">お知らせ</span>
          <meta itemprop="position" content="2" />
        </li>
      <?php elseif(is_post_type_archive('recruit')): ?>
        <!-- ③投稿アーカイブページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">採用について</span>
          <meta itemprop="position" content="2" />
        </li>

      <?php elseif(is_archive('column')): ?>
        <!-- ④コラムカテゴリ一覧ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/column/" itemprop="item">
            <span itemprop="name">コラム一覧</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
          <span>/</span>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name"><?php single_term_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>

      <?php elseif(is_singular('clinic')): ?>
        <!-- ⑥クリニック詳細ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/clinic/" itemprop="item">
            <span itemprop="name">クリニック一覧</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <span>/</span>
        
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>

      <?php elseif(is_singular('recruit')): ?>
        <!-- ⑥クリニック詳細ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/recruit/" itemprop="item">
            <span itemprop="name">採用について</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <span>/</span>
        
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="3" />
        </li>

      <?php elseif(is_singular('news')): ?>
        <!-- ⑦お知らせ詳細ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/news/" itemprop="item">
            <span itemprop="name">お知らせ</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <span>/</span>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">
            <?php //single_post_title(); ?>
            <?php
              if(mb_strlen($post->post_title) >60) {
                $title= mb_substr($post->post_title,0,60) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
            ?>
          </span>
          <meta itemprop="position" content="3" />
        </li>

        <?php elseif(is_singular('post')): // コラム詳細ページ
          $term_obj = get_the_terms($post->ID, 'category');
          // ⑤-1 タグがあるコラム詳細ページ
          if(has_tag(( array('stimsure', 'clatuu-a', 'hifu', 'glp-1', 'fat-dissolving-injection', 'original-protein', 'guidance', 'original-supplement', 'diet-supplement', 'beauty-drip', 'exosome')))) { 
            $tags = get_the_tags();
            foreach($tags as $post_tag){
              $count = 0;
              if($count == 0) {
                $tag = $post_tag;
              }
              $count++;
            }
        ?>
          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="/menu/" itemprop="item">
              <span itemprop="name">施術一覧</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <span>/</span>

          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url()); ?>/menu/<?php echo $tag->slug; ?>/" itemprop="item">
              <span itemprop="name"><?php echo $tag->name; ?></span>  
            </a>
            <meta itemprop="position" content="3" />
          </li>
          <span>/</span>


        <?php // ⑤-2 タグがないコラム詳細ページ
          } else {
        ?>
          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="/column/" itemprop="item">
              <span itemprop="name">コラム一覧</span>
            </a>
            <meta itemprop="position" content="2" />
          </li>
          <span>/</span>

          <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a href="<?php echo esc_url(home_url()); ?>/<?php echo $term_obj[0]->slug; ?>/" itemprop="item">
              <span itemprop="name"><?php echo $term_obj[0]->name; ?></span>  
            </a>
            <meta itemprop="position" content="3" />
          </li>
          <span>/</span>
        <?php } ?>

        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">
            <?php
              if(mb_strlen($post->post_title) >39) {
                $title= mb_substr($post->post_title,0,39) ;
                echo $title . '...';
              } else {
                echo $post->post_title;
              }
            ?>
          </span>
          <meta itemprop="position" content="4" />
        </li>
        

      <?php elseif(is_404()): ?>
        <!-- ⑧404ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name">お探しのページが見つかりません</span>
          <meta itemprop="position" content="2" />
        </li>


      <?php else: //その他(固定) ?>
        <!-- ②固定ページ -->
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="current-item" itemprop="name"><?php single_post_title(); ?></span>
          <meta itemprop="position" content="2" />
        </li>

      <?php endif; ?>

    </ol>
  </div>
</div>
