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
        <h1 class="p-singleClinicFv__title">リエートクリニック<br><span><?php the_field("clinic_name"); ?>院</span></h1>
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

  <?php get_template_part('template-parts/part-lp-con'); ?>

  <!-- 選ばれる理由 -->
  <section class="p-singleClinicReason p-reason">
    <div class="p-reason__inner l-inner">
      <div class="p-reason__head c-secTitle">
        <div class="c-secTitle__en">WHY LIETO CLINIC</div>
        <h2 class="c-secTitle__ja">リエートクリニックの<br>医療ダイエットが選ばれる理由</h2>
      </div>
      <div class="p-reason__body">
        <ul class="p-reason__list">
          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_01.png" alt="有資格者が施術するから安心の医療痩身">
            <h3 class="p-reason__itemTitle">有資格者が施術するから<br>安心の医療痩身</h3>
            <p class="p-reason__itemText">
              医師・看護師などの有資格者が施術を行うことで、お客様の健康状態や体質に合わせたプランをご提案させていただきます。<br>
              <br>
              専門的な知識と経験に基づいて行われるため、安心して施術を受けていただけます。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_02.png" alt="短期間での痩身や難しい部分痩せも対応">
            <h3 class="p-reason__itemTitle">短期間での痩身や<br>難しい部分痩せも対応</h3>
            <p class="p-reason__itemText">
              短期間での効果的な痩身や、通常難しいとされる部分痩せにも対応することができます。<br>
              <br>
              科学的な根拠に基づいたアプローチを用いて、特定の部位の脂肪やセルライトに対して、技術や機器を駆使して細胞レベルで効果的な施術が可能です。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_03.png" alt="切らない施術で安心して痩身">
            <h3 class="p-reason__itemTitle">切らない施術で<br>安心して痩身</h3>
            <p class="p-reason__itemText _letter">
              リエートクリニックでは、最先端の医療痩身機器や注射・点滴治療、ダイエット薬などを用いた切らない施術を行っています。<br>
              <br>
              お客様のお悩みに沿ったリエートクリニックオリジナルプログラムにより、理想のお身体を目指します。
            </p>
          </li>
        </ul>
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
    <section class="p-singleClinicCase">
      <div class="p-singleClinicCase__inner l-inner">
          <div class="p-singleClinicCase__head p-clinicHead">
              <h3 class="p-clinicHead__title"><?php echo esc_html(get_field("clinic_name", $clinic_id)); ?>院の症例</h3>
          </div>
          <div class="p-singleClinicCase__body">
              <?php get_template_part('template-parts/all-case'); ?>
          </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- アクセス・方法・外観内観 -->
  <section class="p-singleClinicAccess">
    <div class="p-singleClinicAccess__inner">
      <div class="p-singleClinicAccess__head c-secTitle">
        <div class="c-secTitle__en">ACCESS</div>
        <h2 class="c-secTitle__ja">アクセス・店舗情報</h2>
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

  <!-- 施術内容 -->
  <div class="p-singleClinicTreatmentWrap">
    <section class="p-singleClinicTreatment">
      <div class="p-singleClinicTreatment__bgc">
        <div class="p-singleClinicTreatment__inner l-inner">

          <div class="p-singleClinicTreatment__main p-treatment">
            <div class="p-treatment__head c-secTitle">
              <div class="c-secTitle__en  _black">TREATMENT</div>
              <h2 class="c-secTitle__ja">施術内容</h2>
            </div>

            <div class="p-treatment__body">
              <div class="p-treatment__content">
                <div class="p-treatment__contentTitle">
                  脂肪細胞を破壊したい方へ
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

  <!-- CTA -->
  <div class="p-singleClinic__cta l-inner">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

  <!-- ご予約から施術の流れ -->
  <section class="p-singleClinicFlow">
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
  <?php if (get_field("clinic_doctor")['clinic_doctor_image']) : ?>
    <section class="p-singleClinicMessage p-message">
      <div class="p-message__head c-wideTitle">
        <div class="p-message__headInner l-inner">
          <div class="c-wideTitle__content">
            <div class="c-wideTitle__en">MESSAGE</div>
            <h2 class="c-wideTitle__ja">担当医師挨拶</h2>
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
      -->

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
      
    </section>
  <?php endif; ?>


  <!-- よくあるご質問 -->
  <?php if (get_field("clinic_faq")) : ?>
    <section class="p-singleClinicFaq">
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

</main>

<?php get_footer();
