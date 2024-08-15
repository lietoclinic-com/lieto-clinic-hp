<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMessage">

    <div class="p-pageMessage__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MESSAGE</div>
        <h1 class="c-pageTitle__ja">院長挨拶</h2>
      </div>
    </div>

    <div class="p-pageMessage__body">

      <!-- 院長挨拶 -->
      <section class="p-pageMessageGreeting">
        <div class="p-pageMessageGreeting__inner l-inner">
          <figure class="p-pageMessageGreeting__mainimg">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/message/message.png" alt="「幸せ=Lieto」Clinicとの出逢いが  皆様の僥倖でありますように。">
          </figure>

          <h2 class="p-pageMessageGreeting__head">
            <p class="p-pageMessageGreeting__title">
              「幸せ=Lieto」Clinicとの出逢いが<br>&thinsp;&thinsp;皆様の僥倖でありますように。
            </p>
          </h2>

          <div class="p-pageMessageGreeting__desc">
            <p class="p-pageMessageGreeting__text">
              数多くのクリニックの中から当院のホームページにお越しいただき、心より感謝申し上げます。
              <br>
              <br>私たちが日常的に耳にする様々なダイエット方法は、しばしば過度な忍耐を求め、その結果として肉体的、精神的に大きな負担をもたらします。
              <br>しかしながら、その効果は一時的なもので、終わってみれば健康を害することすらあります。
              <br>
              <br>当クリニックでは、単に体重を減らすだけではなく、「美しく、健康的に」痩せることを追求しております。
              <br>医師、看護師、管理栄養士が一丸となり、それぞれのお客様の健康状態とライフスタイルを細かく分析し、最適な栄養指導、適切な投薬、医療機器を使用したダイエットプログラムをご提案しております。
              <br>
              <br>お客様一人ひとりの「幸せ」の実現を全力でサポートすることが、私たちの使命です。
              <br>美と健康の両面で、お客様の人生に価値を加えられるよう尽力いたします。
              <br>
              <br>スタッフ一同、皆様のご来院を心からお待ちしております。
            </p>

            <h2 class="p-pageMessageGreeting__post">
              <div class="p-pageMessageGreeting__clinic">リエートクリニック</div>
              <div class="p-pageMessageGreeting__name"><span>院長</span>松永 宏之</div>
            </h2>

          </div>

            <!--
            <div class="p-pageMinorAge__head p-pageMinorHead" style="margin-top: 48px;">
              <h3 class="p-pageMinorHead__title">経歴</h3>
            </div>
            <div class="p-singleRecruitInfo__body">
              <div class="p-singleRecruitInfo__list">
                <div class="p-singleRecruitInfo__row">
                  <dt>20xx.01</dt>
                  <dd><a href="https://www.med.kanazawa-u.ac.jp/" target="_blank">金沢大学医学部</a> 卒</dd>
                </div>
                <div class="p-singleRecruitInfo__row">
                  <dt>20xx.01</dt>
                  <dd><a href="https://www.kouseiren-ta.or.jp/index.html" target="_blank">厚生連高岡病院</a> 勤務</dd>
                </div>
                <div class="p-singleRecruitInfo__row">
                  <dt>20xx.01</dt>
                  <dd><a href="https://web.hosp.kanazawa-u.ac.jp/" target="_blank">金沢大学附属病院</a> 勤務</dd>
                </div>
                <div class="p-singleRecruitInfo__row">
                  <dt>20xx.01</dt>
                  <dd>美容クリニック 勤務</dd>
                </div>
                <div class="p-singleRecruitInfo__row">
                  <dt>2024.04</dt>
                  <dd>リエートクリニック横浜院 就任</dd>
                </div>
                <div class="p-singleRecruitInfo__row">
                  <dt>2024.06</dt>
                  <dd>リエートクリニック横浜院院長 就任</dd>
                </div>
              </div>
            </div>
            -->

        </div>
      </section>

      <!-- アクセス・店舗情報 -->
      <section class="p-pageMessageAccess">
        <div class="p-pageMessageAccess__inner l-inner">
          <div class="p-pageMessageAccess__head c-secTitle">
            <div class="c-secTitle__en">ACCESS</div>
            <h2 class="c-secTitle__ja">アクセス・店舗情報</h2>
          </div>

          <div class="p-pageMessageAccess__body">
            <div class="p-pageMessageAccess__area p-access">
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
    <div class="p-pageMessage__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
