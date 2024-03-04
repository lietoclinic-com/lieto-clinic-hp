<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageNews">

    <div class="p-pageNews__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">NEWS</div>
        <h1 class="c-pageTitle__ja">お知らせ</h2>
      </div>
    </div>

    <div class="p-pageNews__body">
      <div class="p-pageNews__area">
        <ul class="p-pageNews__list">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <li class="p-pageNews__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="p-pageNews__desc">
                    <time class="" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
                    <h2 class="p-pageNews__title">
                      <?php
                        if(mb_strlen($post->post_title) >101) {
                          $title= mb_substr($post->post_title,0,101) ;
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                      ?>
                    </h2>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>

        <div class="p-pageNews__pagination">
          <?php get_template_part('template-parts/part', 'pagination'); ?>
        </div>
      </div>
    </div>

  </section>
</main>

<?php get_footer();
