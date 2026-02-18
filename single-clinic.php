<?php get_header(); ?>

<main class="l-main">

  <?php
    $page = get_post( get_the_ID() );
    $slug = $page->post_name;
  ?>

  <div class="bg01">

    <section class="p-singleClinicFv <?php echo $slug; ?>">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>

      <div class="p-singleClinicFv__inner">
        <h1 class="p-singleClinicFv__title">
          <span class="p-singleClinicFv__title-read"><?php the_field("clinic_name"); ?>で医療ダイエットをご希望の方へ</span>
          <br>リエートクリニック
          <br><span><?php the_field("clinic_name"); ?>院</span>
        </h1>
        <div class="p-singleClinicFv__walktime">
          <span class="p-singleClinicFv__walktimeText">
            <?php echo get_field("clinic_time")['clinic_near_station'] ?>駅から<br>
            徒歩<span class="_num"><?php echo get_field("clinic_time")['clinic_walktime'] ?></span>分
          </span>
        </div>

      </div>
    </section>

    <!-- 診療時間 -->
    <div class="p-singleClinicTime">
      <div class="p-singleClinicTime__inner l-inner">

        <!-- PC版 -->
        <table class="p-singleClinicTime__table">
          <tr>
            <th>診療時間</th>
            <th>日</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th>土</th>
          </tr>
          <?php
          while (have_rows('clinic_open')) : the_row();
            while (have_rows('clinic_open_table')) : the_row();
              $time = get_sub_field('clinic_open_time');
              $sun = get_sub_field('clinic_open_sun');
              $mon = get_sub_field('clinic_open_mon');
              $tue = get_sub_field('clinic_open_tue');
              $wed = get_sub_field('clinic_open_wed');
              $thu = get_sub_field('clinic_open_thu');
              $fri = get_sub_field('clinic_open_fri');
              $sat = get_sub_field('clinic_open_sat');
          ?>
              <tr>
                <td><?php echo $time; ?></td>
                <td><?php echo $sun; ?></td>
                <td><?php echo $mon; ?></td>
                <td><?php echo $tue; ?></td>
                <td><?php echo $wed; ?></td>
                <td><?php echo $thu; ?></td>
                <td><?php echo $fri; ?></td>
                <td><?php echo $sat; ?></td>
              </tr>
          <?php
            endwhile;
          endwhile;
          ?>
        </table>

        <?php // SP版
        while (have_rows('clinic_open')) : the_row();
          while (have_rows('clinic_open_table')) : the_row();
            $time = get_sub_field('clinic_open_time');
            $sun = get_sub_field('clinic_open_sun');
            $mon = get_sub_field('clinic_open_mon');
            $tue = get_sub_field('clinic_open_tue');
            $wed = get_sub_field('clinic_open_wed');
            $thu = get_sub_field('clinic_open_thu');
            $fri = get_sub_field('clinic_open_fri');
            $sat = get_sub_field('clinic_open_sat');
        ?>
            <div class="p-singleClinicTime__spTable _sp">
              <div class="p-singleClinicTime__spHead">
                <div class="p-singleClinicTime__spHeadBox">診療時間</div>
                <div class="p-singleClinicTime__spHeadBox"><?php echo $time; ?></div>
              </div>

              <table class="p-singleClinicTime__spBody">
                <tr>
                  <th>日</th>
                  <th>月</th>
                  <th>火</th>
                  <th>水</th>
                  <th>木</th>
                  <th>金</th>
                  <th>土</th>
                </tr>
                <tr>
                  <td><?php echo $sun; ?></td>
                  <td><?php echo $mon; ?></td>
                  <td><?php echo $tue; ?></td>
                  <td><?php echo $wed; ?></td>
                  <td><?php echo $thu; ?></td>
                  <td><?php echo $fri; ?></td>
                  <td><?php echo $sat; ?></td>
                </tr>
              </table>
            </div>
        <?php
          endwhile;
        endwhile;
        ?>

        <div class="p-singleClinicTime__text"><?php echo get_field("clinic_open")["clinic_open_text"]; ?></div>
      </div>
    </div>

  </div>

  <!-- アクセス・方法・外観内観 -->
  <section class="p-singleClinicAccess">

    <!-- バナー -->
    <div class="p-pageMonitor__banner" style="margin-top: 0; padding-top: 40px; margin-bottom: 40px; background-color: #FFF4E3;">
      <div class="p-pageMonitor__bannerInner l-inner">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" target="_blank">
          <picture>
            <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar_sp.jpg">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar.jpg" alt="バナー">
          </picture>
        </a>
      </div>
    </div>

    <!-- menu -->
    <div class="p-injectionMenu">
      <div class="p-injectionMenu__inner l-inner">
        <ul class="p-injectionMenu__list">
          <li class="p-injectionMenu__item"><a href="#access">アクセス</a></li>
          <li class="p-injectionMenu__item"><a href="#reason">選ばれる理由</a></li>
          <li class="p-injectionMenu__item"><a href="#content">施術内容</a></li>
          <li class="p-injectionMenu__item"><a href="#flow">施術の流れ</a></li>
          <li class="p-injectionMenu__item"><a href="#faq">よくあるご質問</a></li>
        </ul>
      </div>
    </div>

    <?php get_template_part('template-parts/banner-slider'); ?>

    <div class="p-singleClinicAccess__inner" id="access">
      <div class="p-singleClinicAccess__head c-secTitle">
        <div class="c-secTitle__en">ACCESS</div>
        <h2 class="c-secTitle__ja"><?php the_field("clinic_name"); ?>院のアクセス・店舗情報</h2>
      </div>

      <!-- 店舗情報 -->
      <div class="p-singleClinicAccess__body l-inner">
        <div class="p-singleClinicAccess__area p-access">
          <div class="p-access__clinic">
            <div class="p-access__desc">
              <div class="p-access__title">
                <span><?php echo get_field("clinic_name"); ?>院</span>
              </div>
              <dl class="p-access__list">
                <div class="p-access__listRow">
                  <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_access_brown.png' alt="icon">住所</dt>
                  <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field("clinic_info")['clinic_info_address']; ?></dd>
                </div>
                <div class="p-access__listRow">
                  <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_train_brown.png' alt="icon">最寄駅</dt>
                  <dd><?php echo get_field("clinic_info")['clinic_info_station'] ?></dd>
                </div>
                <div class="p-access__listRow">
                  <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_brown.png' alt="icon">電話番号</dt>
                  <dd><a href="tel:<?php echo get_field("clinic_info")['clinic_info_tel'] ?>"><?php echo get_field("clinic_info")['clinic_info_tel'] ?></a></dd>
                </div>
                <div class="p-access__listRow">
                  <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_time_brown.png' alt="icon">診療時間</dt>
                  <dd><?php echo get_field("clinic_info")['clinic_info_time'] ?></dd>
                </div>
                <div class="p-access__listRow">
                  <dt>休診日</dt>
                  <dd><?php echo get_field("clinic_info")['clinic_info_close'] ?></dd>
                </div>
                <div class="p-access__listRow">
                  <dt>支払い方法</dt>
                  <dd><?php echo get_field("clinic_info")['clinic_info_payment'] ?></dd>
                </div>
              </dl>
            </div>
            <?php if(get_field('clinic_gallery')): ?>
              <div class="p-access__map">
                <?php echo get_field("clinic_info")['clinic_info_map'] ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- アクセス方法 -->
      <?php if (get_field("clinic_access")) : ?>
        <div class="p-singleClinichow l-inner">
          <div class="p-singleClinichow__head p-clinicHead">
            <h3 class="p-clinicHead__title">最寄駅から<?php echo get_field("clinic_name"); ?>院への<br class="_sp">アクセス方法</h3>
          </div>

          <div class="p-singleClinichow__body">
            <div class="p-singleClinichow__area">
              <div class="p-singleClinichow__tabs">
                <?php
                while (have_rows('clinic_access')) : the_row();
                ?>
                  <div class="p-singleClinichow__tab">
                    <?php the_sub_field('clinic_access_station'); ?>
                  </div>
                <?php
                endwhile;
                ?>
              </div>

              <div class="p-singleClinichow__tables">
                <?php
                while (have_rows('clinic_access')) : the_row();
                ?>
                  <div class="p-singleClinichow__table">
                    <ul class="p-singleClinichow__boxes">

                      <?php
                      while (have_rows('clinic_access_order')) : the_row();
                      ?>
                        <li class="p-singleClinichow__box">
                          <figure class="p-singleClinichow__boxFigure">
                            <div class="p-singleClinichow__boxNum"></div>
                            <img loading="lazy" src="<?php the_sub_field('clinic_access_image'); ?>" alt="アクセス画像">
                          </figure>
                          <p class="p-singleClinichow__boxText">
                            <?php the_sub_field('clinic_access_desc'); ?>
                          </p>
                        </li>
                      <?php
                      endwhile;
                      ?>
                    </ul>
                  </div>
                <?php
                endwhile;
                ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <!-- 道のり動画 -->
      <?php
      $clinic_slug = $post->post_name;
      $video_ids = array(
        'yokohama' => 'bsb3u0P9Zxs',
        'nagoya' => 'jfzJeUHD588',
        'ikebukuro' => 'slczMfptaB4',
      );
      if (isset($video_ids[$clinic_slug])) :
        $video_id = $video_ids[$clinic_slug];
        $clinic_name = get_field("clinic_name");
      ?>
        <div class="p-singleClinicVideo l-inner">
          <div class="p-singleClinicVideo__head p-clinicHead">
            <h3 class="p-clinicHead__title"><?php echo $clinic_name; ?>院までの道のり</h3>
          </div>
          <div class="p-singleClinicVideo__body">
            <div class="p-topAccess__videoWrap">
              <iframe src="https://www.youtube.com/embed/<?php echo $video_id; ?>"
                      width="100%"
                      height="100%"
                      title="<?php echo $clinic_name; ?>院までの道のり"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <?php if(get_field('clinic_gallery')): ?>
        <!-- 外観・内観 -->
        <div class="p-singleClinicAlbum">
          <div class="l-inner">
            <div class="p-singleClinicAlbum__head p-clinicHead">
              <h3 class="p-clinicHead__title"><?php echo get_field("clinic_name"); ?>院の外観・内観</h3>
            </div>
          </div>
          <div class="p-singleClinicAlbum__body">
            <ul class="p-singleClinicAlbum__list">
              <?php
              $images = get_field('clinic_gallery');
              foreach ($images as $image) :
              ?>
                <li class="p-singleClinicAlbum__item">
                  <img loading="lazy" src="<?php echo $image; ?>" alt="内観">
                </li>
              <?php
              endforeach;
              ?>
            </ul>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <?php get_template_part('template-parts/part-lp-con'); ?>

  <!-- 選ばれる理由 -->
  <section class="p-singleClinicReason p-reason" id="reason">
    <div class="p-reason__inner l-inner">
      <div class="p-reason__head c-secTitle">
        <div class="c-secTitle__en">WHY LIETO CLINIC</div>
        <h2 class="c-secTitle__ja">リエートクリニック<?php echo get_field("clinic_name"); ?>院の<br>医療ダイエットが選ばれる理由</h2>
      </div>
      <div class="p-reason__body">
        <?php get_template_part('template-parts/reason-content'); ?>
      </div>
    </div>
  </section>

  <!-- 当院の症例 -->
  <?php
    // 現在表示されている clinic の投稿IDを取得
    $clinic_id = get_queried_object_id();

    // clinic のスラッグを取得
    $clinic_slug = get_post_field('post_name', $clinic_id);


    $show_section = false; // 初期状態は非表示

    if ($clinic_slug) {
        // 該当する症例が1件でもあるか確認
        $check_args = array(
            'post_type'      => 'case',
            'posts_per_page' => 1, // 1件でも見つかればよい
            'post_status'    => 'publish',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'case_position',
                    'field'    => 'slug',
                    'terms'    => $clinic_slug, // クリニックのスラッグと一致するターム
                ),
            ),
        );

        $check_query = new WP_Query($check_args);

        if ($check_query->have_posts()) {
            $show_section = true; // 1件でもあれば表示
        }
    }

    // `$show_section` が true の場合のみ表示
    if ($show_section) :
  ?>
    <section class="p-singleClinicCase" id="case">
      <div class="p-singleClinicCase__inner l-inner">
          <div class="p-singleClinicCase__head p-clinicHead">
              <h3 class="p-clinicHead__title"><span><span style="transform: translateX(6px); display: inline-block;">累計3万件以上！</span><br><?php echo esc_html(get_field("clinic_name", $clinic_id)); ?>院の症例</span></h3>
          </div>
          <div class="p-singleClinicCase__body">
              <?php get_template_part('template-parts/all-case'); ?>
          </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- 施術内容 -->
  <div class="p-singleClinicTreatmentWrap" id="content">
    <section class="p-singleClinicTreatment">
      <div class="p-singleClinicTreatment__bgc">
        <div class="p-singleClinicTreatment__inner l-inner">

          <div class="p-singleClinicTreatment__main p-treatment">
            <div class="p-treatment__head c-secTitle">
              <div class="c-secTitle__en  _black">TREATMENT</div>
              <h2 class="c-secTitle__ja"><?php echo esc_html(get_field("clinic_name", $clinic_id)); ?>院の施術内容</h2>
            </div>

            <div class="p-treatment__body">
              <div class="p-treatment__content">
                <div class="p-treatment__contentTitle">
                  脂肪細胞を減らしたい方へ
                </div>
                <ul class="p-treatment__contentList">

                  <li class="p-treatment__contentItem">
                    <a href="/menu/stimsure/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_01.png" alt="医療電磁場機器">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemText">メリハリのある理想のボディラインを</div>
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">医療電磁場機器</h3>
                          <div class="p-treatment__contentItemSubtitle">StimSure-スティムシュアー</div>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/clatuu-a/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_02.png" alt="医療脂肪冷却機器">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemText">脂肪細胞のみ狙いうちで凍結排出</div>
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">医療脂肪冷却機器</h3>
                          <div class="p-treatment__contentItemSubtitle">CLATUU α -クラツーアルファ-</div>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/hifu/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_03.png" alt="医療HIFU">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemText">引き締めながら脂肪細胞を破壊</div>
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">医療HIFU</h3>
                          <div class="p-treatment__contentItemSubtitle">ULTRAcel [zíː] -ウルトラセル ジィー-</div>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/fat-dissolving-injection/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_04.png" alt="脂肪溶解注射">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemText">気になる部位を切らずに部分痩せ</div>
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">脂肪溶解注射</h3>
                          <div class="p-treatment__contentItemSubtitle"> </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="p-treatment__content _bottom">
                <div class="p-treatment__contentTitle">
                  太りにくく、痩せやすいカラダ作りへ
                </div>
                <ul class="p-treatment__contentList">

                  <li class="p-treatment__contentItem">
                    <a href="/menu/glp-1/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_05.png" alt="GLP1">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">GLP-1</h3>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/beauty-drip/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_06.png" alt="美容点滴">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">ダイエット美容点滴</h3>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/original-supplement/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_07.jpg" alt="サプリメント">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">オリジナルサプリメント</h3>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/original-protein/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_08.png" alt="プロテイン">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">オリジナルプロテイン</h3>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/diet-supplement/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_09.png" alt="薬">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">ダイエット薬</h3>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="p-treatment__contentItem">
                    <a href="/menu/guidance/">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_10.png" alt="指導">
                      <div class="p-treatment__contentItemDesc">
                        <div class="p-treatment__contentItemHead">
                          <h3 class="p-treatment__contentItemTitle">食事・栄養指導</h3>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="p-singleClinicTreatment__banner">
              <a href="/menu/exosome/">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner.png" alt="エクソソーム点滴" class="_overTab">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner_sp.png" alt="エクソソーム点滴" class="_sp">
              </a>
            </div>

            <div class="p-singleClinicTreatment__btns">
              <a href="/menu/" class="c-btn">施術一覧をみる</a>
              <a href="/monitor/" class="c-btn _orange">モニター募集情報をみる</a>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

  <?php get_template_part('template-parts/caution-content'); ?>

  <!-- CTA -->
  <div class="p-singleClinic__cta l-inner">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

  <!-- ご予約から施術の流れ -->
  <section class="p-singleClinicFlow" id="flow">
    <div class="p-singleClinicFlow__inner l-inner">

      <div class="p-singleClinicFlow__area">
        <div class="p-singleClinicFlow__head c-secTitle">
          <h2 class="c-secTitle__ja">ご予約から施術の流れ</h2>
        </div>

        <?php get_template_part('template-parts/part-flow'); ?>
      </div>

    </div>
  </section>

  <!-- 担当医師挨拶 -->
  <?php // if (get_field("clinic_doctor")['clinic_doctor_image']) : ?>
    <section class="p-singleClinicMessage p-message">
      <div class="p-message__head c-wideTitle">
        <div class="p-message__headInner l-inner">
          <div class="c-wideTitle__content">
            <div class="c-wideTitle__en">MESSAGE</div>
            <?php if(get_field("clinic_name") === '名古屋'): ?>
              <h2 class="c-wideTitle__ja">担当医師挨拶</h2>
            <?php else: ?>
              <h2 class="c-wideTitle__ja">統括院長挨拶</h2>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!--
      <div class="p-message__inner l-inner">
        <div class="p-message__body">
          <figure class="p-message__figure">
            <img loading="lazy" src="<?php echo get_field("clinic_doctor")['clinic_doctor_image']; ?>" alt="担当医師写真">
            <div class="p-message__post">
              <div class="p-message__clinic">リエートクリニック<?php echo get_field("clinic_name"); ?>院</div>
              <div class="p-message__name"><span>医師</span><?php echo get_field("clinic_doctor")['clinic_doctor_name'] ?></div>
            </div>
          </figure>
          <div class="p-message__desc">
            <p class="p-message__text">
              <?php echo get_field("clinic_doctor")['clinic_doctor_desc'] ?>
            </p>
          </div>
        </div>
      </div>

      <div class="p-message__inner l-inner">
        <div class="p-message__body">
          <div class="p-message__desc">
            <figure class="p-message__figure">
              <div class="p-message__post">
                <div class="p-message__clinic">リエートクリニック<?php echo get_field("clinic_name"); ?>院</div>
                <div class="p-message__name"><span>院長</span><?php echo get_field("clinic_doctor")['clinic_doctor_name'] ?></div>
              </div>
            </figure>
            <p class="p-message__text">
              <?php echo get_field("clinic_doctor")['clinic_doctor_desc'] ?>
            </p>
          </div>
        </div>
      </div>
      -->

      <div class="p-message__inner l-inner">
        <div class="p-message__body">
          <figure class="p-message__figure">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック名古屋院 院長 松永 宏之">
            <div class="p-message__post">
              <div class="p-message__clinic">リエートクリニック</div>
              <?php if(get_field("clinic_name") === '名古屋'): ?>
                <div class="p-message__name"><span>名古屋院/院長</span>松永 宏之</div>
              <?php else: ?>
                <div class="p-message__name"><span>統括院長</span>松永 宏之</div>
              <?php endif; ?>
            </div>
          </figure>
          <div class="p-message__desc">
            <p class="p-message__text">
              数多くのクリニックの中から当院のホームページにお越しいただき、心より感謝申し上げます。
              <br>
              <br> 私たちが日常的に耳にする様々なダイエット方法は、しばしば過度な忍耐を求め、その結果として肉体的、精神的に大きな負担をもたらします。
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
          </div>
        </div>
      </div>

    </section>
  <?php // endif; ?>


  <!-- よくあるご質問 -->
  <?php if (get_field("clinic_faq")) : ?>
    <section class="p-singleClinicFaq" id="faq">
      <div class="p-singleClinicFaq__inner l-inner">
        <div class="p-singleClinicFaq__head c-secTitle">
          <div class="c-secTitle__en">FAQ</div>
          <h2 class="c-secTitle__ja">よくあるご質問</h2>
        </div>

        <div class="p-singleClinicFaq__content p-faq" itemscope itemtype="https://schema.org/FAQPage">

          <?php
          while (have_rows('clinic_faq')) : the_row();
          ?>
            <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

              <div class="p-faq__question">
                <div class="p-faq__questionDesc">
                  <div class="p-faq__questionMark">Q</div>
                  <span class="p-faq__questionText" itemprop="name">
                    <?php the_sub_field('clinic_faq_question'); ?>
                  </span>
                </div>
                <span class="p-faq__questionOpen"></span>
              </div>

              <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                <div class="p-faq__answerDesc">
                  <div class="p-faq__answerMark">A</div>
                  <span class="p-faq__answerText" itemprop="text">
                    <?php the_sub_field('clinic_faq_answer'); ?>
                  </span>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          ?>
        </div>

        <div class="p-singleClinicFaq__btn">
          <a href="/faq/" class="c-btn">よくあるご質問を詳しくみる</a>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- CTA -->
  <div class="p-singleClinic__bottomcta l-inner">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

  <section class="p-pageColumn__articles _related p-message">
    <div class="l-inner">
      <div class="p-pageColumn__articlesHead">
        <h2 class="p-pageColumn__articlesHeadJa">お役立ちコラム</h2>
        <span class="p-pageColumn__articlesHeadEn">COLUMN</span>
      </div>
      <ul class="p-pageColumn__articlesList">
        <?php
          // 別のカスタム投稿テンプレ内から、通常投稿の「medical-die」カテゴリ最新3件
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'category_name'  => 'medical-diet',
          );

          $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="p-pageColumn__articlesItem">
              <a href="<?php the_permalink(); ?>">
                <figure class="p-pageColumn__articlesFigure">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                  <?php endif; ?>
                </figure>
                <div class="p-pageColumn__articlesDesc">
                  <div class="p-pageColumn__articlesCat">
                    <?php
                    $term_obj = get_the_terms($post->ID, 'category');
                    echo $term_obj[0]->name;
                    ?>
                  </div>
                  <div class="p-pageColumn__dates c-articleDates">
                    <div class="c-articleDates__modified">
                      <div class="c-articleDates__modifiedTtl">更新日</div>
                      <time class="c-articleDates__modifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d') ?></time>
                    </div>
                    <div class="c-articleDates__published">
                      <div class="c-articleDates__publishedTtl">公開日</div>
                      <time class="c-articleDates__publishedNum" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
                    </div>
                  </div>
                  <h3 class="p-pageColumn__articlesTitle"><?php the_title(); ?></h3>
                </div>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata() ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>

</main>

<?php get_footer();
