<?php
//----------------------------------------------------
// Custom Block - ブログカード -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------

$slug = block_value('blog-slug');
$args = array(
  'posts_per_page' => 1,
  'post_type' => 'post',
  'name' => $slug
);
$target_post = get_posts($args);
?>

<?php if (!empty($target_post)) : ?>
  <div class="p-pageColumn__articlesItem c-blog-card">
    <?php foreach ($target_post as $post) : setup_postdata($post); ?>

      <a href="<?php the_permalink(); ?>">
        <figure class="p-pageColumn__articlesFigure">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img sizes=auto loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/common/sample_01.png">
          <?php endif; ?>
        </figure>
        <div class="p-pageColumn__articlesDesc">
          <div class="p-pageColumn__articlesDescInner">
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
            <h4 class="p-pageColumn__articlesTitle"><?php the_title(); ?></h4>
          </div>

          <div class="p-pageColumn__articlesDetail">詳しく見る</div>
        </div>
      </a>

    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
