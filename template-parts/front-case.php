        <ul class="p-pageCase__list p-case">

                    <?php
                      $args = array(
                          'post_type'      => 'case',
                          'posts_per_page' => 4, // すべての症例を取得
                          'post_status'    => 'publish',
                          'orderby'        => 'menu_order', // 管理画面で設定した順番で表示
                          'order'          => 'ASC' // 昇順（管理画面の並び順をそのまま反映）
                      );
                      if (is_front_page()) {
                          $args['tax_query'] = array(
                              array(
                                  'taxonomy' => 'case_position',
                                  'field'    => 'slug',
                                  'terms'    => 'top', // 「TOP」のみ取得
                              ),
                          );
                      }

                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        $case_number = 1; // 症例番号のカウント
                        if(is_singular('clinic')){
                          $case_number = 1; // 症例番号のカウント
                        }
                        while ($query->have_posts()) : $query->the_post();
                            // ACFフィールド取得
                            $case_title = get_the_title();
                            $case_pc = get_field('症例写真_pc'); // PC画像グループ
                            $case_sp = get_field('症例写真_sp'); // SP画像グループ
                            $treatment_content = get_field('治療内容');
                            $price = get_field('金額');
                            $duration = get_field('期間・回数');
                            $risks = get_field('リスク・副作用');
                            $case_mv = get_field('症例mv');
                  ?>
                  <li class="p-case__item">
                      <div class="p-case__head">
                          <div class="p-case__headName">症例</div>
                          <div class="p-case__headNum"><?php echo str_pad($case_number, 2, '0', STR_PAD_LEFT); ?></div>
                      </div>
                      <div class="p-case__body">
                          <div class="p-case__box" style="border: none;">

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

                          <div class="p-case__box">
                              <div class="p-case__boxTitle js-accordion">
                                  <?php echo esc_html($case_title); ?>
                                  <div class="p-case__boxTitleMark"></div>
                              </div>
                              <div class="p-case__boxDescWrap">
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
                      </div>
                  </li>
          <?php
                    $case_number++; // 症例番号のカウントを増やす
                endwhile;
                wp_reset_postdata();
            endif;
          ?>

        </ul>

        <div class="p-topAbout__btn">
          <a href="/case/" class="c-btn" style="margin: 0 auto;">症例をもっと見る</a>
        </div>