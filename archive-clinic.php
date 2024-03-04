<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageClinic">

    <div class="p-pageClinic__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">CLINIC</div>
        <h1 class="c-pageTitle__ja">クリニック一覧</h2>
      </div>
    </div>

    <div class="p-pageClinic__body">
      <div class="p-pageClinicLink__inner l-inner">
        <ul class="p-pageCliniclink__btns">

          <?php
          $args = array(
            'post_type' => 'clinic',
            'posts_per_page' => -1,
          );
          $query = new WP_Query($args);
          $count;
          $ans;
          ?>

          <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();
              $count++; ?>

              <li class="p-pageClinicLink__btn">
                <a href="#clinic_0<?php echo $count; ?>"><?php the_field("clinic_name") ?>院<div class="p-pageClinicLink__btnMark"></div></a>
              </li>

            <?php endwhile;
            wp_reset_postdata() ?>
          <?php endif; ?>
        </ul>
      </div>

      <section class="p-pageClinicContent">
        <h2 class="p-pageClinicContent__title">クリニック一覧</h2>
        <ul class="p-pageClinicContent__list">

          <!-- 院 -->
          <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post();
              $ans++; ?>

              <li class="p-pageClinicContent__item p-access">
                <div class="l-inner">
                  <div class="p-access__title" id="clinic_0<?php echo $ans; ?>">
                    <span><?php the_field("clinic_name") ?>院</span>
                  </div>

                  <div class="p-access__sliders">
                    <ul class="p-access__mainSlider js-clinic-mainslick_0<?php echo $ans; ?>">
                      <?php
                      $image_num = 0;
                      $images = get_field('clinic_gallery');
                      foreach ($images as $image) :
                        $image_num++;
                        if ($image_num < 5) :
                      ?>
                          <li class="p-access__mainSliderItem">
                            <img loading="lazy" src="<?php echo $image; ?>">
                          </li>
                      <?php
                        endif;
                      endforeach;
                      ?>
                    </ul>

                    <ul class="p-access__subSlider js-clinic-subslick_0<?php echo $ans; ?>">
                      <?php
                      $subimage_num = 0;
                      $images = get_field('clinic_gallery');
                      foreach ($images as $image) :
                        $subimage_num++;
                        if ($subimage_num < 5) :
                      ?>
                          <li class="p-access__subSliderItem">
                            <img loading="lazy" src="<?php echo $image; ?>">
                          </li>
                      <?php
                        endif;
                      endforeach;
                      ?>
                    </ul>
                  </div>

                  <div class="p-access__clinic">
                    <div class="p-access__desc">
                      <dl class="p-access__list">
                        <div class="p-access__listRow">
                          <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_access_brown.png'>住所</dt>
                          <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field('clinic_info')['clinic_info_address']; ?></dd>
                        </div>
                        <div class="p-access__listRow">
                          <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_train_brown.png'>最寄駅</dt>
                          <dd><?php echo get_field('clinic_info')['clinic_info_station']; ?></dd>
                        </div>
                        <div class="p-access__listRow">
                          <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_tel_brown.png'>電話番号</dt>
                          <dd><a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></a></dd>
                        </div>
                        <div class="p-access__listRow">
                          <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_time_brown.png'>診療時間</dt>
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
              </li>

            <?php endwhile;
            wp_reset_postdata() ?>
          <?php endif; ?>

        </ul>

      </section>

    </div>

    <!-- CTA -->
    <div class="p-pageClinic__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
