<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleNews">

    <div class="p-singleNews__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">VOICE</div>
        <div class="c-pageTitle__ja">患者様の声</div>
      </div>
    </div>

    <div class="p-singleNews__body">
      <div class="p-singleNews__voice">

        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
            <div class="p-singleNews__dates">
              <div class="p-singleNews__modified">
                <div class="p-singleNews__modifiedTtl">更新日</div>
                <time class="p-singleNews__modifiedNum" datetime="<?php the_modified_time('Y-m-d') ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d') ?></time>
              </div>
              <div class="p-singleNews__published">
                <div class="p-singleNews__publishedTtl">公開日</div>
                <time class="p-singleNews__publishedNum" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
              </div>
            </div>
    
            <h1 class="p-singleNews__title">
              <?php the_title(); ?>
            </h1>
    
            <div class="p-singleNews__figure">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="患者様の声サムネイル">
              <?php endif; ?>
            </div>

            <div class="p-singleNews__content">
              <?php the_content(); ?>
            </div>
              
          <?php endwhile; ?>
        <?php endif; ?>

        <div class="p-singleNews__btn"><a href="/voice/" class="c-btn c-btnReturn">患者様の声一覧にもどる</a></div>
      </div>
    </div>

  </section>

</main>

<?php get_footer();
