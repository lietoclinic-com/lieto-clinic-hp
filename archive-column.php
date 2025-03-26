<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageColumn">

    <div class="p-pageColumn__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">COLUMN</div>
        <h1 class="c-pageTitle__ja">コラム一覧</h2>
      </div>
    </div>

    <div class="p-pageColumn__body l-inner">
      <div class="p-pageColumn__mainbar">

        <div class="p-pageColumn__editor p-editor">
          <div class="p-editor__head">
            当院のコラムは全て医師が監修しております
          </div>
          <div class="p-editor__box">
            <div class="p-editor__content">
              <figure class="p-editor__figure">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/profile.png" alt='リエートクリニック名古屋院院長 松永 宏之'>
              </figure>
              <div class="p-editor__desc">
                <div class="p-editor__profile">監修者プロフィール</div>
                <div class="p-editor__post">リエートクリニック名古屋院 <br class="_sp">院長</div>
                <div class="p-editor__name">松永 宏之</div>
                <div class="p-editor__btn _overTab">
                  <a href="<?php echo esc_url(home_url()); ?>/greeting/" class="c-btn">監修者について詳しく見る</a>
                </div>
              </div>
            </div>

            <div class="p-editor__btn _sp">
              <a href="<?php echo esc_url(home_url()); ?>/greeting/" class="c-btn">監修者について詳しく見る</a>
            </div>
          </div>
        </div>

        <section class="p-pageColumn__articles _recommend">
          <div class="p-pageColumn__articlesHead">
            <h2 class="p-pageColumn__articlesHeadJa">おすすめ記事</h2>
            <span class="p-pageColumn__articlesHeadEn">recommend</span>
          </div>
          <ul class="p-pageColumn__articlesList">

            <?php
            $args = array(
              'post_type' => 'column',
              'posts_per_page' => 5,
              'tax_query' => array(
                array(
                  'taxonomy' => 'recommend',
                  'field' => 'slug',
                  'terms' => 'recommend',
                )
              )
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                      <?php endif; ?>
                    </figure>
                    <div class="p-pageColumn__articlesDesc">
                      <div class="p-pageColumn__articlesCat">
                        <?php
                        $term_obj = get_the_terms($post->ID, 'column_cat');
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

              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>

          </ul>
        </section>

        <section class="p-pageColumn__articles _popular">
          <div class="p-pageColumn__articlesHead">
            <h2 class="p-pageColumn__articlesHeadJa">人気のコラム</h2>
            <span class="p-pageColumn__articlesHeadEn">popular</span>
          </div>
          <ul class="p-pageColumn__articlesList">

            <?php
            if (!is_user_logged_in() && !is_robots()) {
              setPostViews(get_the_ID());
            }
            $args = array(
              'post_type' => 'column',
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'order' => 'DESC',
              'posts_per_page' => 5
            );
            ?>

            <?php if ($query->have_posts()) : ?>
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
                        $term_obj = get_the_terms($post->ID, 'column_cat');
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
              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </ul>
        </section>

        <section class="p-pageColumn__articles _new">
          <div class="p-pageColumn__articlesHead">
            <h2 class="p-pageColumn__articlesHeadJa">新着コラム</h2>
            <span class="p-pageColumn__articlesHeadEn">new</span>
          </div>
          <ul class="p-pageColumn__articlesList">

            <?php
            $args = array(
              'post_type' => 'column',
              'posts_per_page' => 5,
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
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                      <?php endif; ?>
                    </figure>
                    <div class="p-pageColumn__articlesDesc">
                      <div class="p-pageColumn__articlesCat">
                        <?php
                        $term_obj = get_the_terms($post->ID, 'column_cat');
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
              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </ul>
          <div class="p-pageColumn__articlesBtn">
            <a href="/latest/" class="c-btn">すべてのコラムをみる</a>
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
