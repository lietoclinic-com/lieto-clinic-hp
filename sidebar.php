<div class="p-sidebar">

  <?php //if(!is_single()): 
  ?>
  <div class="p-sidebar__search">
    <div class="p-sidebar__title _search">コラムを探す</div>
    <form role="search" method="get" action="<?php echo esc_url(home_url()); ?>" class="p-sidebar__searchForm">
      <input type="text" name="s" placeholder="キーワードを入力">
      <input type="submit" value="&#xf002">
      <input type="hidden" name="post_type" value="post">
    </form>
  </div>
</div>
<?php //endif; 
?>

<div class="p-sidebar__article">
  <div class="p-sidebar__title _popular">人気のコラム</div>
  <ul class="p-sidebar__articleList">

    <?php
    if (!is_user_logged_in() && !is_robots()) {
      setPostViews(get_the_ID());
    }
    $args = array(
      'post_type' => 'post',
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
      'posts_per_page' => 5
    );
    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="p-sidebar__articleItem">
          <a href="<?php the_permalink(); ?>">
            <div class="p-sidebar__articleModified">
              <?php
              if (get_the_time() == get_the_modified_time()) { // 記事の公開日と更新日を比べて、同じの場合
                $text = '投稿日';
              } else {
                $text = '更新日';
              }
              ?>
              <div class="p-sidebar__articleModifiedTtl"><?php echo $text; ?></div>
              <time class="p-sidebar__articleModifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d'); ?></time>
            </div>

            <div class="p-sidebar__articleDesc">
              <figure class="p-sidebar__articleFigure">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                <?php endif; ?>
              </figure>
              <div class="p-sidebar__articleTitle">
                <?php
                if (mb_strlen($post->post_title) > 26) {
                  $title = mb_substr($post->post_title, 0, 26);
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </div>
            </div>
          </a>
        </li>
      <?php endwhile;
      wp_reset_postdata() ?>
    <?php endif; ?>
  </ul>
</div>

<div class="p-sidebar__category">
  <div class="p-sidebar__title _category">コラムカテゴリー</div>
  <ul class="p-sidebar__categoryList">
    <?php
    $terms = get_terms('category');
    foreach ($terms as $term) :
      // $slug = 'column/' . $term->slug;
      $slug = $term->slug;
    ?>
      <li class="p-sidebar__categoryItem"><a href="<?php echo esc_url(home_url($slug)); ?>/"><?php echo $term->name; ?></a></li>
    <?php
    endforeach;
    ?>
  </ul>
</div>

<div class="p-sidebar__article">
  <div class="p-sidebar__title _new">新着コラム</div>
  <ul class="p-sidebar__articleList">
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
    );
    $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()) : ?>
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="p-sidebar__articleItem">
          <a href="<?php the_permalink(); ?>">
            <div class="p-sidebar__articleModified">
              <?php
              if (get_the_time() == get_the_modified_time()) { // 記事の公開日と更新日を比べて、同じの場合
                $text = '投稿日';
              } else {
                $text = '更新日';
              }
              ?>
              <div class="p-sidebar__articleModifiedTtl"><?php echo $text; ?></div>
              <time class="p-sidebar__articleModifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d'); ?></time>
            </div>

            <div class="p-sidebar__articleDesc">
              <figure class="p-sidebar__articleFigure">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                <?php endif; ?>
              </figure>
              <div class="p-sidebar__articleTitle">
                <?php
                if (mb_strlen($post->post_title) > 26) {
                  $title = mb_substr($post->post_title, 0, 26);
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </div>
            </div>
          </a>
        </li>

      <?php endwhile;
      wp_reset_postdata() ?>
    <?php endif; ?>
  </ul>
</div>


</div>
