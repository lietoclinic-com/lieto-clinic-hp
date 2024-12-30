<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageVoice">

    <div class="p-pageVoice__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">VOICE</div>
        <h1 class="c-pageTitle__ja">患者様の声</h2>
      </div>
    </div>

    <div class="p-pageVoice__body">
      <div class="p-pageVoice__inner l-inner">
        
        <!-- 検索 -->
        <div class="p-pageVoice__search">
          <?php get_template_part('template-parts/part','voiceSearch'); ?>
        </div>

        <!-- 検索結果 -->
        <div class="p-pageVoice__result">
          <ul class="p-pageVoice__list">
            <?php 
              $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
              $args = array(
                'paged' => $paged,
                'post_type' => 'voice',
                'posts_per_page' => 9,
                'tax_query' => array(
                  'relation' => 'AND',
                  array(
                    'taxonomy' => 'sex',
                    'field' => 'slug',
                    'terms' => $term,
                  ),                  
                ),
              );
              // 
              if ( !empty( $_GET['age']) ) {
                $args['tax_query'][] = [
                  'taxonomy' => 'age',
                  'field'    => 'slug',
                  'terms'    => $_GET['age'],
                ];
              }
              $query = new WP_Query($args);
            ?>
            
            <?php if($query->have_posts()): ?>
              <?php while($query->have_posts()): $query->the_post(); ?>
                <li class="p-pageVoice__item">
                  <a href="<?php the_permalink(); ?>" class="p-pageVoice__itemLink">
                    <figure class="p-pageVoice__itemFigure">
                      <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="患者様の声サムネイル">
                        <?php endif; ?>
                    </figure>
                    <div class="p-pageVoice__itemDesc">
                      <div class="p-pageVoice__itemCat">
                        <?php the_terms($post->ID, 'sex'); ?> / <?php the_terms($post->ID, 'age'); ?>
                      </div>
                      <div class="p-pageVoice__itemTitle"><?php the_title(); ?></div>
                    </div>
                  </a>
                </li>
                  
              <?php endwhile; wp_reset_postdata() ?>
            <?php endif; ?>
          </ul>

          <!-- ページネーション -->
          <div class="p-pageVoice__pagination">
            <?php get_template_part('template-parts/part','pagination'); ?>
          </div>
        </div>
      </div>

  </section>

</main>

<?php get_footer();
