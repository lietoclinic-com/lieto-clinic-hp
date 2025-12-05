<?php
  get_header();
  $case_title = get_the_title();
  $case_pc = get_field('症例写真_pc'); // PC画像グループ
  $case_sp = get_field('症例写真_sp'); // SP画像グループ
  $treatment_content = get_field('治療内容');
  $price = get_field('金額');
  $duration = get_field('期間・回数');
  $risks = get_field('リスク・副作用');
  $case_mv = get_field('症例mv');
  $case_weight = get_field('体重');
  $case_fat = get_field('体脂肪率');
  $case_west = get_field('ウエスト');
?>

<main class="l-main">

  <section class="p-singleNews">

    <div class="p-singleNews__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
    
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
              <div class="p-singleNews__published" style="width: 100%; margin-top: 1em;">
                <div class="p-singleNews__publishedTtl is-case" style="width: 160px;">施術クリニック</div>
                <style>
                @media (max-width: 767px) {
                  .p-singleNews__publishedTtl.is-case {
                    width: 100px !important;
                  }
                }
                </style>
                <?php
                  $clinic_id = get_field('at-clinic'); // clinic の投稿IDが返ってくる
                  if ( $clinic_id ) :
                ?>
                <a href="<?php echo get_the_permalink($clinic_id) ?>" class="p-singleNews__publishedNum" style="text-decoration: underline;"><?php 
                    $clinic_title = get_the_title( $clinic_id );
                    echo esc_html( $clinic_title );
                ?></a>
                <?php endif; ?>
              </div>
            </div>

            <div class="p-case__box" style="border: none; margin-left: auto;">

                <?php if($case_mv['pc']['url']): ?>
                  <img src="<?php echo esc_url($case_mv['pc']['url']); ?>" alt="mv" class="sp-hide">
                <?php endif; ?>
                <?php if($case_mv['sp']['url']): ?>
                  <img src="<?php echo esc_url($case_mv['sp']['url']); ?>" alt="mv" class="sp-block">
                <?php endif; ?>
                
                <!-- PC表示 -->
                <?php if ($case_pc) : ?>
                  <div class="sp-hide">
                    <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
                      <img src="<?php echo esc_url($case_pc['before']['url']); ?>" alt="Before">
                      <img src="<?php echo esc_url($case_pc['after']['url']); ?>" alt="After">
                    </div>
                  </div>
                <?php endif; ?>

                <!-- SP表示 -->
                <?php if ($case_sp) : ?>
                  <div class="sp-block">
                    <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
                      <img src="<?php echo esc_url($case_sp['before']['url']); ?>" alt="Before">
                      <img src="<?php echo esc_url($case_sp['after']['url']); ?>" alt="After">
                    </div>
                  </div>
                <?php endif; ?>
                
            </div>

            <div class="case-contents">
              <h1 class="case-contents__title"><?php the_title(); ?></h1>
              <div class="case-contents__wrap">

                <div class="case-contents__row">
                  <h2 class="case-contents__row-title"><span>体重</span></h2>
                  <div class="case-contents__row-num">
                    <span><?php echo $case_weight['before']; ?></span>kg → <span><?php echo $case_weight['after']; ?></span>kg
                  </div>
                  <div class="case-contents__row-after"><span>-<?php echo $weight_total = (float)$case_weight['before'] - (float)$case_weight['after']; ?></span>kg</div>
                </div>

                <div class="case-contents__row">
                  <h2 class="case-contents__row-title"><span>体脂肪率</span></h2>
                  <div class="case-contents__row-num">
                    <span><?php echo $case_fat['before']; ?></span>% → <span><?php echo $case_fat['after']; ?></span>%
                  </div>
                  <div class="case-contents__row-after"><span>-<?php echo $fat_total = (float)$case_fat['before'] - (float)$case_fat['after']; ?></span>%</div>
                </div>

                <div class="case-contents__row">
                  <h2 class="case-contents__row-title"><span>ウエスト</span></h2>
                  <div class="case-contents__row-num">
                    <span><?php echo $case_west['before']; ?></span>cm → <span><?php echo $case_west['after']; ?></span>cm
                  </div>
                  <div class="case-contents__row-after"><span>-<?php echo $west_total = (float)$case_west['before'] - (float)$case_weight['after']; ?></span>cm</div>
                </div>
                
              </div>
            </div>

            <div class="p-case__box" style="margin-left: auto;">
              <div class="p-case__boxDescWrap" style="display: block; margin-left: auto;">
                  <div class="p-case__boxDesc">
                      <dl class="p-case__boxContent">
                          <dt>治療内容</dt>
                          <dd><?php echo nl2br(esc_html($treatment_content)); ?></dd>
                      </dl>
                      <dl class="p-case__boxDetail">
                          <dt>金額</dt>
                          <dd><?php echo esc_html($price); ?> 円</dd>
                          <dt>期間・回数</dt>
                          <dd><?php echo esc_html($duration); ?></dd>
                          <dt>リスク・副作用</dt>
                          <dd><?php echo nl2br(esc_html($risks)); ?></dd>
                      </dl>
                  </div>
              </div>
            </div>

            <div class="p-singleNews__content p-content">
              <?php the_content(); ?>
            </div>
              
          <?php endwhile; ?>
        <?php endif; ?>

        <div class="p-singleNews__btn"><a href="/case/" class="c-btn c-btnReturn">当院の症例一覧にもどる</a></div>
      </div>
    </div>

  </section>

</main>

<?php get_footer();
