<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageRecruit">

    <div class="p-pageRecruit__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">RECRUIT</div>
        <h1 class="c-pageTitle__ja">採用について</h2>
      </div>
    </div>

    <div class="p-pageRecruit__body p-recruitBody">

      <!-- メッセージ -->
      <div class="p-pageRecruitMessage p-recruitMessage">
        <div class="p-recruitMessage__inner l-inner">
          関わる全ての人々の幸福を追求する為に、<br class="_overTab">最良最適な美容医療サービスを通じてお客様の美と健康を実現し、<br class="_overTab">社員の自己実現を導く美容クリニックで在り続ける。
        </div>
      </div>

      <!-- コンセプト -->
      <section class="p-pageRecruitConcept">
        <div class="p-pageRecruitConcept__head c-wideTitle">
          <div class="p-pageRecruitConcept__headInner l-inner">
            <div class="c-wideTitle__content">
              <div class="c-wideTitle__en">CONCEPT</div>
              <h2 class="c-wideTitle__ja">リエートクリニックのコンセプト</h2>
            </div>
          </div>
        </div>

        <div class="p-pageRecruitConcept__inner l-inner">
          <div class="p-pageRecruitConcept__body p-concept">
            <figure class="p-concept__figure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_about.png" alt="コンセプト">
            </figure>
            <div class="p-concept__desc">
              <div class="p-concept__message">
                リエートクリニックでは、<br class="_overPc">
                単なる医療痩身サービスの提供だけに留まらず、<br class="_overPc">
                『美しさ』や『健康』をより追求いたします。
              </div>
              <p class="p-concept__text">
                細胞レベルで身体にアプローチすることで、理想の体型づくりと共に人間本来の美しさを取り戻す美容医療を提供し、お客様の人生における『幸せ＝Lieto』の実現に貢献いたします。
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- 採用職種一覧 -->
      <section class="p-pageRecruitJob">
        <div class="p-pageRecruitJob__inner l-inner">
          <h2 class="p-pageRecruitJob__head c-recruitHead">採用職種一覧</h2>
          <div class="p-pageRecruitJob__body">
            <ul class="p-pageRecruitJob__list">

              <li class="p-pageRecruitJob__item">
                <figure class="p-pageRecruitJob__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/job_01.png" alt="医師">
                </figure>
                <div class="p-pageRecruitJob__desc">
                  <h3 class="p-pageRecruitJob__title">医師</h3>
                  <ul class="p-pageRecruitJob__clinics">
                    <?php
                    $args = array(
                      'post_type' => 'recruit',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $job = get_field('recruit_job')['label']; // 職種を取得 
                        ?>
                        <?php if ($job == "医師") : ?>
                          <li class="p-pageRecruitJob__clinic"><a href="<?php the_permalink(); ?>">リエートクリニック <?php the_field('recruit_title'); ?>院</a></li>
                        <?php endif; ?>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </li>

              <li class="p-pageRecruitJob__item">
                <figure class="p-pageRecruitJob__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/job_02.png" alt="看護師">
                </figure>
                <div class="p-pageRecruitJob__desc">
                  <h3 class="p-pageRecruitJob__title">看護師</h3>
                  <ul class="p-pageRecruitJob__clinics">
                    <?php
                    $args = array(
                      'post_type' => 'recruit',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $job = get_field('recruit_job')['label']; // 職種を取得 
                        ?>
                        <?php if ($job == "看護師") : ?>
                          <li class="p-pageRecruitJob__clinic"><a href="<?php the_permalink(); ?>">リエートクリニック <?php the_field('recruit_title'); ?>院</a></li>
                        <?php endif; ?>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </li>

              <li class="p-pageRecruitJob__item">
                <figure class="p-pageRecruitJob__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/job_03.png" alt="管理栄養士">
                </figure>
                <div class="p-pageRecruitJob__desc">
                  <h3 class="p-pageRecruitJob__title">管理栄養士</h3>
                  <ul class="p-pageRecruitJob__clinics">
                    <?php
                    $args = array(
                      'post_type' => 'recruit',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $job = get_field('recruit_job')['label']; // 職種を取得 
                        ?>
                        <?php if ($job == "管理栄養士") : ?>
                          <li class="p-pageRecruitJob__clinic"><a href="<?php the_permalink(); ?>">リエートクリニック <?php the_field('recruit_title'); ?>院</a></li>
                        <?php endif; ?>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </li>

              <li class="p-pageRecruitJob__item">
                <figure class="p-pageRecruitJob__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/job_04.png" alt="カウンセラー">
                </figure>
                <div class="p-pageRecruitJob__desc">
                  <h3 class="p-pageRecruitJob__title">カウンセラー</h3>
                  <ul class="p-pageRecruitJob__clinics">
                    <?php
                    $args = array(
                      'post_type' => 'recruit',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $job = get_field('recruit_job')['label']; // 職種を取得 
                        ?>
                        <?php if ($job == "カウンセラー") : ?>
                          <li class="p-pageRecruitJob__clinic"><a href="<?php the_permalink(); ?>">リエートクリニック <?php the_field('recruit_title'); ?>院</a></li>
                        <?php endif; ?>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </li>

              <li class="p-pageRecruitJob__item">
                <figure class="p-pageRecruitJob__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/job_05.png" alt="受付事務">
                </figure>
                <div class="p-pageRecruitJob__desc">
                  <h3 class="p-pageRecruitJob__title">受付事務</h3>
                  <ul class="p-pageRecruitJob__clinics">
                    <?php
                    $args = array(
                      'post_type' => 'recruit',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php $job = get_field('recruit_job')['label']; // 職種を取得 
                        ?>
                        <?php if ($job == "受付事務") : ?>
                          <li class="p-pageRecruitJob__clinic"><a href="<?php the_permalink(); ?>">リエートクリニック <?php the_field('recruit_title'); ?>院</a></li>
                        <?php endif; ?>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- 採用の流れ -->
      <section class="p-pageRecruitFlow p-recruitFlow">
        <div class="p-recruitFlow__inner l-inner">
          <div class="p-recruitFlow__head c-recruitHead">採用の流れ</div>
          <div class="p-recruitFlow__body">
            <ul class="p-recruitFlow__list">

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_01.png" alt="採用応募フォームよりご応募ください">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">01</div>
                  <div class="p-recruitFlow__descText">
                    採用応募フォームより<br class="_sp">ご応募ください
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_02.png" alt="採用担当者よりご連絡いたします">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">02</div>
                  <div class="p-recruitFlow__descText">
                    採用担当者より<br>ご連絡いたします
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_03.png" alt="オンライン面談後複数回の面接">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">03</div>
                  <div class="p-recruitFlow__descText">
                    オンライン面談後<br>複数回の面接
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_04.png" alt="採用・内定のご連絡">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">04</div>
                  <div class="p-recruitFlow__descText">
                    採用・内定のご連絡
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </section>

      <!-- 採用応募フォーム -->
      <div class="p-pageRecruitForm p-recruitForm">
        <div class="p-recruitForm__inner l-inner">
          <div class="p-recruitForm__bg">
            <div class="p-recruitForm__desc">
              <div class="p-recruitForm__text">採用応募フォーム</div>
              <a href="/recruit/entry/" class="p-recruitForm__link">
                <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling_circle.png' alt="icon">採用応募はこちらから
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 勤務先情報 -->
      <section class="p-pageRecruitAccess">
        <div class="p-pageRecruitAccess__inner l-inner">
          <div class="p-pageRecruitAccess__head c-secTitle">
            <div class="c-secTitle__en">WORK INFORMATION</div>
            <h2 class="c-secTitle__ja">勤務先情報</h2>
          </div>

          <div class="p-pageRecruitAccess__body">
            <div class="p-pageRecruitAccess__area p-access">
              <?php
              $recruit_name = get_field('recruit_name');
              $args = array(
                'post_type' => 'clinic',
                'posts_per_page' => -1,
              );
              $query = new WP_Query($args);
              ?>

              <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="p-access__area">
                    <div class="p-access__clinic">
                      <div class="p-access__desc">
                        <div class="p-access__title">
                          <span><?php the_field("clinic_name") ?>院</span>
                        </div>
                        <dl class="p-access__list">
                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_access_brown.png' alt="icon">住所</dt>
                            <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field('clinic_info')['clinic_info_address']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_train_brown.png' alt="icon">最寄駅</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_station']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_brown.png' alt="icon">電話番号</dt>
                            <dd><a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></a></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_time_brown.png' alt="icon">診療時間</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_time']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt>休診日</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_close']; ?></dd>
                          </div>
                          <div class="p-access__listRow">
                            <dt>支払い方法</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_payment']; ?></dd>
                          </div>
                        </dl>
                      </div>
                      <div class="p-access__map">
                        <?php echo get_field('clinic_info')['clinic_info_map']; ?>
                      </div>
                    </div>

                    <div class="p-access__btn">
                      <a href="<?php the_permalink(); ?>" class="c-btn"><?php the_field('clinic_name') ?>院を詳しくみる</a>
                    </div>
                  </div>

                <?php endwhile;
                wp_reset_postdata() ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- CTA -->
    <div class="p-pageRecruit__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
