<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageAbout">

    <div class="p-pageAbout__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">ABOUT</div>
        <h1 class="c-pageTitle__ja">当院について</h2>
      </div>
    </div>

    <div class="p-pageAbout__body">

      <!-- コンセプト -->
      <section class="p-pageAboutConcept">
        <div class="p-pageAboutConcept__head c-wideTitle">
          <div class="p-pageAboutConcept__headInner l-inner">
            <div class="c-wideTitle__content">
              <div class="c-wideTitle__en">CONCEPT</div>
              <h2 class="c-wideTitle__ja">コンセプト</h2>
            </div>
          </div>
        </div>
        <div class="p-pageAboutConcept__inner l-inner">
          <div class="p-pageAboutConcept__body p-concept">
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

      <!-- 選ばれる理由 -->
      <section class="p-pageAboutReason">
        <div class="p-pageAboutReason__inner l-inner">
          <div class="p-pageAboutReason__head c-secTitle">
            <div class="c-secTitle__en">WHY LIETO CLINIC</div>
            <h2 class="c-secTitle__ja">リエートクリニックの<br>医療ダイエットが選ばれる理由</h2>
          </div>

          <div class="p-pageAboutReason__body">
            <ul class="p-pageAboutReason__list">

              <li class="p-pageAboutReason__item">
                <figure class="p-pageAboutReason__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_01.png" alt="有資格者が施術するから安心の医療痩身">
                </figure>
                <div class="p-pageAboutReason__desc">
                  <h3 class="p-pageAboutReason__title">有資格者が施術するから<br>安心の医療痩身</h3>
                  <p class="p-pageAboutReason__text">
                    医師・看護師などの有資格者が施術を行うことで、お客様の健康状態や体質に合わせたプランをご提案させていただきます。<br>
                    <br>
                    専門的な知識と経験に基づいて行われるため、安心して施術を受けていただけます。
                  </p>
                </div>
              </li>

              <li class="p-pageAboutReason__item">
                <figure class="p-pageAboutReason__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_02.png" alt="短期間での痩身や難しい部分痩せも対応">
                </figure>
                <div class="p-pageAboutReason__desc">
                  <h3 class="p-pageAboutReason__title">短期間での痩身や<br>難しい部分痩せも対応</h3>
                  <p class="p-pageAboutReason__text">
                    短期間での効果的な痩身や、通常難しいとされる部分痩せにも対応することができます。<br>
                    <br>
                    科学的な根拠に基づいたアプローチを用いて、特定の部位の脂肪やセルライトに対して、技術や機器を駆使して細胞レベルで効果的な施術が可能です。
                  </p>
                </div>
              </li>

              <li class="p-pageAboutReason__item">
                <figure class="p-pageAboutReason__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_03.png" alt="切らない施術で安心して痩身">
                </figure>
                <div class="p-pageAboutReason__desc">
                  <h3 class="p-pageAboutReason__title">切らない施術で<br>安心して痩身</h3>
                  <p class="p-pageAboutReason__text">
                    リエートクリニックでは、最先端の医療痩身機器や注射・点滴治療、ダイエット薬などを用いた切らない施術を行っています。<br>
                    <br>
                    お客様のお悩みに沿ったリエートクリニックオリジナルプログラムにより、理想のお身体を目指します。
                  </p>
                </div>
              </li>
            </ul>

            <div class="p-pageAboutReason__select">
              <div class="p-pageAboutReason__selectText">
                リエートクリニックは、<br class="_sp">
                <span>こ</span><span>ん</span><span>な</span><span>方</span>に選ばれています
              </div>
              <div class="p-pageAboutReason__selectLine">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_line.png" alt="line">
              </div>

              <ul class="p-pageAboutReason__selectBox">
                <li class="p-pageAboutReason__selectItem">
                  <div class="p-pageAboutReason__selectItemText">食事制限<br>が苦手な方</div>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_01.png" alt="食事制限">
                </li>
                <li class="p-pageAboutReason__selectItem">
                  <div class="p-pageAboutReason__selectItemText">運動が<br>苦手な方</div>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_02.png" alt="運動">
                </li>
                <li class="p-pageAboutReason__selectItem">
                  <div class="p-pageAboutReason__selectItemText">ダイエットに<br>失敗ばかりする方</div>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_03.png" alt="ダイエット">
                </li>
                <li class="p-pageAboutReason__selectItem">
                  <div class="p-pageAboutReason__selectItemText">人生最後の<br>ダイエットにしたい方</div>
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_04.png" alt="人生最後">
                </li>
              </ul>
            </div>

            <!-- CTA -->
            <div class="p-pageAboutReason__cta">
              <?php get_template_part('template-parts/part', 'cta'); ?>
            </div>

          </div>
        </div>
      </section>

      <!-- アクセス・店舗情報 -->
      <section class="p-pageAboutAccess">
        <div class="p-pageAboutAccess__inner l-inner">
          <div class="p-pageAboutAccess__head c-secTitle">
            <div class="c-secTitle__en">ACCESS</div>
            <h2 class="c-secTitle__ja">アクセス・店舗情報</h2>
          </div>

          <div class="p-pageAboutAccess__body">
            <div class="p-pageAboutAccess__area p-access">
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
    <div class="p-pageAbout__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
