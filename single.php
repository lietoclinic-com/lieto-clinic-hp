<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleColumn">

    <div class="p-singleColumn__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
    </div>

    <div class="p-singleColumn__body l-inner">
      <div class="p-singleColumn__mainbar">
        <div class="p-singleColumn__topInfo">
          <?php
          $term_obj = get_the_terms($post->ID, 'category');
          $term_name = $term_obj[0]->name;
          // $slug = 'column/' . $term_obj[0]->slug;
          $slug = $term_obj[0]->slug;
          ?>
          <a href="<?php echo esc_url(home_url($slug)); ?>/" class="p-singleColumn__articlesCat">
            <?php echo $term_name; ?>
          </a>

          <!-- SP版 SNSリンク -->
          <div class="p-singleColumn__sns _sp">
            <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_facebook.png" alt="facebook">
            </a>
            <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_hatena.png" alt="b.hatena">
            </a>
            <a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_twitter.png" alt="Twitter">
            </a>
            <a href="http://line.me/R/msg/text/?<?php echo get_the_permalink(); ?>%0a<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_line.png" alt="LINE">
            </a>
          </div>
        </div>

        <h1 class="p-singleColumn__title"><?php the_title(); ?></h1>

        <div class="p-singleColumn__info">
          <div class="p-singleColumn__dates c-articleDates">
            <div class="c-articleDates__modified">
              <div class="c-articleDates__modifiedTtl">更新日</div>
              <time class="c-articleDates__modifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d'); ?></time>
            </div>
            <div class="c-articleDates__published">
              <div class="c-articleDates__publishedTtl">公開日</div>
              <time class="c-articleDates__publishedNum" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>

          <!-- PC版 SNSリンク -->
          <div class="p-singleColumn__sns _overTab">
            <a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_facebook.png" alt="facebook">
            </a>
            <a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_hatena.png" alt="b.hatena">
            </a>
            <a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>" rel="nofollow noopener" target="_blank">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_twitter.png" alt="Twitter">
            </a>
            <a href="http://line.me/R/msg/text/?<?php echo get_the_permalink(); ?>%0a<?php echo get_the_title(); ?>" target="_blank" rel="nofollow noopener">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/sns_line.png" alt="LINE">
            </a>
          </div>
        </div>

        <div class="p-singleColumn__main">
          <figure class="p-singleColumn__thumbnail">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
          </figure>

          <div class="p-singleColumn__editor p-editor">
            <div class="p-editor__box">
              <div class="p-editor__content">
                <figure class="p-editor__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック名古屋院院長 松永 宏之">
                </figure>
                <div class="p-editor__desc">
                  <div class="p-editor__profile">監修者プロフィール</div>
                  <div class="p-editor__post">リエートクリニック名古屋院 <br class="_sp">院長</div>
                  <div class="p-editor__name">松永 宏之</div>
                  <div class="p-editor__btn _overTab">
                    <a href="/greeting/" class="c-btn">監修者について詳しく見る</a>
                  </div>
                </div>
              </div>

              <div class="p-editor__btn _sp">
                <a href="/greeting/" class="c-btn">監修者について詳しく見る</a>
              </div>
            </div>
          </div>

          <div class="p-singleColumn__content p-content">

            <?php
            // session_start();
            // $count = 0;
            // $_SESSION['faq'] = $count;
            // echo $_SESSION['faq'];
            ?>

            <details class= "wp-block-details is-layout-flow wp-block-details-is-layout-flow"><summary>当記事の内容はご自由に引用いただけます。</summary>
              <p style="margin: 0; padding:8px 12px; display: block; background-color: #f7f7f7; margin-top: 8px; line-height: 1.5;">
                ただし、引用の際は、引用元として当院名および記事タイトルを明記し、読者の方が元の記事に遷移できるよう、引用元URLへのリンクをお願いいたします。
                <br><br>例） 引用元：<a href="<?php echo home_url(); ?>">リエートクリニック</a>
              </p>
            </details>

            <?php the_content(); ?>


            <!-- 監修者 -->
            <div class="p-content__editor p-editor">
              <div class="p-editor__box">
                <div class="p-editor__content">
                  <figure class="p-editor__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック名古屋院院長 松永 宏之">
                  </figure>
                  <div class="p-editor__desc">
                    <div class="p-editor__profile">監修者プロフィール</div>
                    <div class="p-editor__post">リエートクリニック名古屋院 <br class="_sp">院長</div>
                    <div class="p-editor__name">松永 宏之</div>
                    <div class="p-editor__btn _overTab">
                      <a href="/greeting/" class="c-btn">監修者について詳しく見る</a>
                    </div>
                  </div>
                </div>

                <div class="p-editor__btn _sp">
                  <a href="/greeting/" class="c-btn">監修者について詳しく見る</a>
                </div>
              </div>
            </div>

            <a href="/column/" class="p-singleColumn__btn c-btn c-btnReturn">コラム一覧にもどる</a>
          </div>

          <section class="p-pageColumn__articles _related">
            <div class="p-pageColumn__articlesHead">
              <h2 class="p-pageColumn__articlesHeadJa">関連コラム</h2>
              <span class="p-pageColumn__articlesHeadEn">COLUMN</span>
            </div>
            <ul class="p-pageColumn__articlesList">
              <?php
              $terms = get_the_terms($post->ID, 'category');
              $category = $terms[0]->slug;
              $term_ID = [];
              foreach ((array) $terms as $term) :
                array_push($term_ID, $term->term_id); // タクソノミーのIDを格納
              endforeach;

              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post__not_in' => array($post->ID),
                'orderby' => 'rand',
                'category_name' => $category,

                // 'tax_query' => [ // タクソノミーに関連付けられた投稿を表示
                //   [
                //     'taxonomy' => 'column_cat',
                //     'terms' => $term_ID,
                //   ],
                // ],
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
                        <h3 class="p-pageColumn__articlesTitle"><?php the_title(); ?></h3>
                      </div>
                    </a>
                  </li>
                <?php endwhile;
                wp_reset_postdata() ?>
              <?php endif; ?>
            </ul>
            <div class="p-pageColumn__articlesBtn">
              <a href="/column/" class="c-btn">すべてのコラムをみる</a>
            </div>
          </section>
        </div>
      </div>

      <div class="p-singleColumn__sidebar">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </section>
</main>

<?php get_footer();
