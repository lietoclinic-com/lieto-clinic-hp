<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageAbout">

    <div class="p-pageAbout__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">COMPANY</div>
        <h1 class="c-pageTitle__ja">法人概要</h2>
      </div>
    </div>

    <div class="p-pageAbout__body">

      <!-- 詳細情報とリスク・副作用 -->
      <div class="p-singleMenu__area l-inner">
        <div class="p-pageAboutAccess__head c-secTitle">
          <div class="c-secTitle__en">COMPANY</div>
          <h2 class="c-secTitle__ja">医療法人社団高整会</h2>
        </div>
        <div class="p-singleMenu__box">
          <dl class="p-singleMenu__detail">
            <div class="p-singleMenu__detailRow">
              <dt>法人名</dt>
              <dd>医療法人社団高整会</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>理事長名</dt>
              <dd>松永 宏之</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>住所</dt>
              <dd>熊本県荒尾市原万田815番地2</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>設立年月日</dt>
              <dd>1989年10月24日</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>事業内容</dt>
              <dd>クリニック運営</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>お問い合わせ先</dt>
              <dd><a href="mailto:info@kounkai.clinic" target="_blank">info@kounkai.clinic</a></dd>
            </div>
          </dl>
        </div>
      </div>

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
