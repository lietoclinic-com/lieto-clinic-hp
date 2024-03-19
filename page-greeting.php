<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMessage">

    <div class="p-pageMessage__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MESSAGE</div>
        <h1 class="c-pageTitle__ja">担当医師挨拶</h2>
      </div>
    </div>

    <div class="p-pageMessage__body">

      <!-- 担当医師挨拶 -->
      <section class="p-pageMessageGreeting">
        <div class="p-pageMessageGreeting__inner l-inner">
          <figure class="p-pageMessageGreeting__mainimg">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/message/message.png" alt="「幸せ=Lieto」Clinicとの出逢いが  皆様の僥倖でありますように。">
          </figure>

          <div class="p-pageMessageGreeting__head">
            <h2 class="p-pageMessageGreeting__title">
              「幸せ=Lieto」Clinicとの出逢いが<br>&thinsp;&thinsp;皆様の僥倖でありますように。
            </h2>
          </div>

          <div class="p-pageMessageGreeting__desc">
            <p class="p-pageMessageGreeting__text">
              はじめまして、当院を見つけ、この文章をお読み頂き、有り難うございます。<br>
              <br>
              理想の体型を目指し努力されてる皆様にとっては敵のように思われている糖と脂質ですが、脳にはエネルギーの糖が必要であり、脳は水分を除いた構成の大部分が脂質です。<br>
              <br>
              脂質は免疫にも重要です。過剰な制限は健康を害します。<br>
              糖と脂質を味方に、適切な食事をしながら痩せることを目指し、その経過で生じるストレスを軽減する方法を探求していきます。<br>
              <br>
              そのために生化学・分子生物学、薬理学、病態生理学と消化吸収、代謝、内分泌、血液循環、筋肉、心理、睡眠、脳神経・自律神経、性差、年齢差など多岐にわたる内容を総合判断し、食事の提案、投薬、最新医療機器を用いた施術を行います。<br>
              <br>
              通院中に、ご一緒に取り組んで頂いたことを生かして習慣化し、通院終了後も理想とされる体型作りと健康増進にお役立て頂くと幸いです。
            </p>

            <div class="p-pageMessageGreeting__post">
              <div class="p-pageMessageGreeting__clinic">リエートクリニック横浜院</div>
              <div class="p-pageMessageGreeting__name"><span>医師</span>白川 巧</div>
            </div>
          </div>
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
