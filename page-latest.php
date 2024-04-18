<?php /* Template Name: 最新コラム一覧 */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageColumn">

    <div class="p-pageColumn__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">COLUMN</div>
        <h1 class="c-pageTitle__ja">最新コラム一覧</h2>
      </div>
    </div>

    <div class="p-pageColumn__body l-inner">
      <div class="p-pageColumn__mainbar">

        <section class="p-pageColumn__articles">
          <ul class="p-pageColumn__articlesList">

            <?php
            $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
            $args = array(
              'paged' => $paged,
              'post_type' => 'post',
              'posts_per_page' => 10,
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>

                <li class="p-pageColumn__articlesItem">
                  <a href="<?php the_permalink(); ?>">
                    <figure class="p-pageColumn__articlesFigure">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                      <?php endif; ?>
                    </figure>

                    <div class="p-pageColumn__articlesDesc">
                      <div class="p-pageColumn__articlesCat"><?php echo get_the_terms($post->ID, 'category')[0]->name; ?></div>
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


              <?php endwhile; ?>
            <?php endif; ?>
          </ul>

          <div class="p-pageColumn__pagination">
            <nav class="navigation pagination" aria-label="投稿">
              <h2 class="screen-reader-text">投稿ナビゲーション</h2>
              <div class="nav-links">
                <?php
                if ($query->max_num_pages > 0) {
                  echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'total' => $query->max_num_pages,
                    'prev_text' => '前へ',
                    'next_text' => '次へ',
                    'mid_size' => 2,
                  ));
                }
                wp_reset_postdata();
                ?>
              </div>
            </nav>
          </div>
        </section>
      </div>

      <div class="p-pageColumn__sidebar">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </section>
</main>

<?php get_footer();
