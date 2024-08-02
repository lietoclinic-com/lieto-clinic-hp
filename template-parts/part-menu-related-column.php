<?php $slug = get_post(get_the_ID())->post_name; ?>
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'tag' => $slug,
  );
  $query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
  <div class="p-singleMenu__area l-inner">
    <h2 class="p-singleMenu__title _nols">関連コラム</h2>
    
    <ul class="p-singleMenu__box _relatedColumn">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <li class="p-pageColumn__articlesItem">
          <a href="<?php the_permalink(); ?>">
            <figure class="p-pageColumn__articlesFigure">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
              <?php endif; ?>
            </figure>
            <div class="p-pageColumn__articlesDesc">
              <div class="p-pageColumn__articlesCat">
                <?php
                  $term_obj = get_the_terms($post->ID, 'category');
                  echo $term_obj[0]->name;
                ?>
              </div>
              <div class="p-pageColumn__dates c-articleDates">
                <div class="c-articleDates__modified">
                  <div class="c-articleDates__modifiedTtl">更新日</div>
                  <time class="c-articleDates__modifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d') ?></time>
                </div>
                <div class="c-articleDates__published">
                  <div class="c-articleDates__publishedTtl">公開日</div>
                  <time class="c-articleDates__publishedNum" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
                </div>
              </div>
              <h3 class="p-pageColumn__articlesTitle">
                <?php
                if (mb_strlen($post->post_title) > 39) {
                  $title = mb_substr($post->post_title, 0, 39);
                  echo $title . '...';
                } else {
                  echo $post->post_title;
                }
                ?>
              </h3>
            </div>
          </a>
        </li>
      <?php endwhile; wp_reset_postdata() ?>
    </ul>

    <div class="p-pageColumn__articlesBtn">
      <a href="/tag/<?php echo $slug; ?>/" class="c-btn">関連コラム一覧へ</a>
    </div>
  </div>
<?php endif; ?>
