    <ul class="p-pageCase__list p-case">

          <?php if(!is_singular('clinic')): ?>
            <li class="p-case__item">
              <div class="p-case__head">
                <div class="p-case__headName">症例</div>
                <div class="p-case__headNum">01</div>
              </div>
              <div class="p-case__body">

                <div class="p-case__box" style="border: none;">
              
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-mv.webp" alt="mv" class="sp-hide">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-mv-sp.webp" alt="mv" class="sp-block">
                  <div class="sp-hide">
                    <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-no01-before.webp" alt="Before">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-no01-after.webp" alt="After">
                    </div>
                  </div>
                                    
                  <div class="sp-block">
                    <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-no01-after-sp.webp" alt="Before">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case-no01-before-sp.webp" alt="After">
                    </div>
                  </div>

                </div>

                <div class="p-case__box">
                  <div class="p-case__boxTitle js-accordion">
                    Y.A様
                    <div class="p-case__boxTitleMark"></div>
                  </div>
                  <div class="p-case__boxDescWrap">
                    <div class="p-case__boxDesc">
                      <dl class="p-case__boxContent">
                        <dt>治療内容</dt>
                        <dd>コース名：リエートクリニックオリジナルプログラム<br>施術内容：医療脂肪冷却機器、医療電磁場機器、医療用HIFU、脂肪溶解注射、ダイエット点滴、ダイエット薬セット、医師による投薬指導、オリジナルプロテイン、医師監修サプリメント、管理栄養士によるパーソナル食事指導</dd>
                      </dl>
                      <dl class="p-case__boxDetail">
                        <dt>金額</dt>
                        <dd>400,000円〜1,500,000円</dd>
                        <dt>期間・回数</dt>
                        <dd>4ヶ月/14回</dd>
                        <dt>リスク・副作用</dt>
                        <dd>便秘、下痢、筋肉痛、赤み、腫れ、内出血、しこり、低血糖、吐気、嘔吐</dd>
                      </dl>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <?php endif; ?>

          <!-- ここから投稿を表示 -->

          <?php
            $args = array(
                'post_type'      => 'case',
                'posts_per_page' => -1, // すべての症例を取得
                'post_status'    => 'publish',
                'orderby'        => 'menu_order', // 管理画面で設定した順番で表示
                'order'          => 'ASC' // 昇順（管理画面の並び順をそのまま反映）
            );

            // TOPページの場合
            if (is_front_page()) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'case_position',
                        'field'    => 'slug',
                        'terms'    => 'top', // 「TOP」のみ取得
                    ),
                );
            }

            // single-clinic.php（クリニック詳細ページ）の場合
            if (is_singular('clinic')) {
                // 現在表示されている clinic の投稿IDを取得
                $clinic_id = get_queried_object_id();

                // clinic のスラッグを取得
                $clinic_slug = get_post_field('post_name', $clinic_id);

                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'case_position',
                        'field'    => 'slug',
                        'terms'    => $clinic_slug, // クリニックのタームと一致するものを取得
                    ),
                );
              }
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                $case_number = 2; // 症例番号のカウント
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
          ?>
                  <li class="p-case__item">
                      <div class="p-case__head">
                          <div class="p-case__headName">症例</div>
                          <div class="p-case__headNum"><?php echo str_pad($case_number, 2, '0', STR_PAD_LEFT); ?></div>
                      </div>
                      <div class="p-case__body">
                          <div class="p-case__box" style="border: none;">
                              
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

          <!-- ここまで投稿を表示 -->

        </ul>