<?php get_header('top'); ?>

<main class="l-main _top">

  <!-- FV -->
  <div class="p-topFv">
    <div class="p-topFv__img"></div>

    <div class="p-topFv__body">
      <div class="p-topFv__message">
        <div class="p-topFv__messageTop">細胞レベルで痩せながら</div>
        <div class="p-topFv__messageMiddle">
          <span class="_large">美</span>
          <span class="_large">し</span>
          <span class="_large">く</span>
          <span class="_small">を</span>
          <span class="_large">実現</span>
        </div>
        <div class="p-topFv__messageBottom">ACHIEVE BEAUTY</div>
      </div>

      <ul class="p-topFv__clinics">
        <?php
        $args = array(
          'post_type' => 'clinic',
          'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post();
            $count++; ?>

            <li class="p-topFv__clinic">
              <span class="p-topFv__clinicName"><?php the_field("clinic_name"); ?>院</span>
              <span class="p-topFv__clinicWalk">
                <?php echo get_field("clinic_time")['clinic_near_station'] ?>駅から<br>
                徒歩<span class="_num"><?php echo get_field("clinic_time")['clinic_walktime'] ?></span>分
              </span>
            </li>

          <?php endwhile;
          wp_reset_postdata() ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="p-topFv__scroll">
      <div class="p-topFv__scrollLine"></div>
      <span class="p-topFv__scrollText">scroll</span>
    </div>
  </div>

  <!-- slick, banner -->
  <div class="p-topBanner">
    <div class="p-topSlider">
      <div class="p-topSlider__inner">
        <ul class="p-topSliderList" id="p-topSlider__slick">
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/open-campaign/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_01.png" alt="オープン記念キャンペーン"></a>
          </li>
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/cash-back/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_02.png" alt="全額返金保証付"></a>
          </li>
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/gift-campaign/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_03.png" alt="ご来店でAmazonギフト 1,000円分をプレゼント"></a>
          </li>
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('monitor/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_04.png" alt="モニター募集ページへの誘導バナー"></a>
          </li>
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/present-campaign/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_05.png" alt="旅行券プレゼントキャンペーン"></a>
          </li>
          <li class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/tenmonth-campaign/')); ?>"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_06.png" alt="12ヶ月分0円キャンペーン"></a>
          </li>
        </ul>
      </div>
    </div>

    <!-- <div class="p-topBanner__img">
      <div class="p-topBanner__imgInner l-inner">
        <a href="">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_banner.png" alt="バナー">
        </a>
      </div>
    </div> -->
  </div>

  <!-- CTA -->
  <div class="p-topCta l-inner">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

  <!-- 選ばれる理由 -->
  <section class="p-topReason p-reason" id="top-reason">
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
            <p class="p-reason__itemText">
              リエートクリニックでは、切らない施術の取り扱いが多くございます。<br>
              <br>
              切らない施術は、手術のリスクやダウンタイムを最小限に抑えつつ、日常生活への影響も少ないのが特徴です。
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- About us -->
  <section class="p-topAbout" id="top-about">
    <div class="p-topAbout__head c-wideTitle">
      <div class="p-topAbout__headInner l-inner">
        <div class="c-wideTitle__content">
          <div class="c-wideTitle__en">About us</div>
          <h2 class="c-wideTitle__ja">わたしたちの想い</h2>
        </div>
      </div>
    </div>
    <div class="p-topAbout__inner l-inner">
      <div class="p-topAbout__body">
        <figure class="p-topAbout__figure">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_about.png" alt="わたしたちの想い">
        </figure>
        <div class="p-topAbout__desc">
          <div class="p-topAbout__message">
            リエートクリニックでは、<br class="_overPc">
            単なる医療痩身サービスの提供だけに留まらず、<br class="_overPc">
            『美しさ』や『健康』をより追求いたします。
          </div>
          <p class="p-topAbout__text">
            細胞レベルで身体にアプローチすることで、理想の体型づくりと共に人間本来の美しさを取り戻す美容医療を提供し、お客様の人生における『幸せ＝Lieto』の実現に貢献いたします。
          </p>
          <div class="p-topAbout__btn">
            <a href="/about/" class="c-btn">当院について詳しくみる</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 施術内容 -->
  <section class="p-topTreatment">
    <div class="p-topTreatment__bgc">
      <div class="p-topTreatment__inner l-inner">

        <div class="p-topTreatment__select">
          <div class="p-topTreatment__selectText">
            リエートクリニックは、<br class="_sp">
            <span>こ</span><span>ん</span><span>な</span><span>方</span>に選ばれています
          </div>
          <div class="p-topTreatment__selectLine">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_line.png" alt="">
          </div>

          <ul class="p-topTreatment__selectBox">
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">食事制限<br>が苦手な方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_01.png" alt="食事制限が苦手な方">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">運動が<br>苦手な方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_02.png" alt="運動が苦手な方">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">ダイエットに<br>失敗ばかりする方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_03.png" alt="ダイエットに失敗ばかりする方">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">人生最後の<br>ダイエットにしたい方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_04.png" alt="人生最後のダイエットにしたい方">
            </li>
          </ul>
        </div>

        <div class="p-topTreatment__main p-treatment" id="top-treatment">
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
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_05.png" alt="GLP-1">
                    <div class="p-treatment__contentItemDesc">
                      <div class="p-treatment__contentItemHead">
                        <h3 class="p-treatment__contentItemTitle">GLP-1</h3>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-treatment__contentItem">
                  <a href="/menu/beauty-drip/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_06.png" alt="ダイエット美容点滴">
                    <div class="p-treatment__contentItemDesc">
                      <div class="p-treatment__contentItemHead">
                        <h3 class="p-treatment__contentItemTitle">ダイエット美容点滴</h3>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-treatment__contentItem">
                  <a href="/menu/original-supplement/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_07.jpg" alt="オリジナルサプリメント">
                    <div class="p-treatment__contentItemDesc">
                      <div class="p-treatment__contentItemHead">
                        <h3 class="p-treatment__contentItemTitle">オリジナルサプリメント</h3>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-treatment__contentItem">
                  <a href="/menu/original-protein/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_08.png" alt="オリジナルプロテイン">
                    <div class="p-treatment__contentItemDesc">
                      <div class="p-treatment__contentItemHead">
                        <h3 class="p-treatment__contentItemTitle">オリジナルプロテイン</h3>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-treatment__contentItem">
                  <a href="/menu/diet-supplement/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_09.png" alt="ダイエット薬">
                    <div class="p-treatment__contentItemDesc">
                      <div class="p-treatment__contentItemHead">
                        <h3 class="p-treatment__contentItemTitle">ダイエット薬</h3>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-treatment__contentItem">
                  <a href="/menu/guidance/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_10.png" alt="食事・栄養指導">
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

          <div class="p-topTreatment__banner">
            <a href="/menu/exosome/">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner.png" alt="エクソソーム点滴" class="_overTab">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner_sp.png" alt="エクソソーム点滴" class="_sp">
            </a>
          </div>

          <div class="p-topTreatment__btns">
            <a href="/menu/" class="c-btn">施術一覧をみる</a>
            <a href="/monitor/" class="c-btn _orange">モニター募集情報をみる</a>
          </div>

        </div>
      </div>
    </div>

  </section>

  <!-- アクセス・店舗情報 -->
  <section class="p-topAccess" id="top-access">
    <div class="p-topAccess__inner l-inner">
      <div class="p-topAccess__head c-secTitle">
        <div class="c-secTitle__en">ACCESS</div>
        <h2 class="c-secTitle__ja">アクセス・店舗情報</h2>
      </div>

      <div class="p-topAccess__body">
        <div class="p-topAccess__area p-access">
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
                        <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_access_brown.png'>住所</dt>
                        <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field('clinic_info')['clinic_info_address']; ?></dd>
                      </div>

                      <div class="p-access__listRow">
                        <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_train_brown.png'>最寄駅</dt>
                        <dd><?php echo get_field('clinic_info')['clinic_info_station']; ?></dd>
                      </div>

                      <div class="p-access__listRow">
                        <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_brown.png'>電話番号</dt>
                        <dd><a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></a></dd>
                      </div>

                      <div class="p-access__listRow">
                        <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_time_brown.png'>診療時間</dt>
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

  <!-- 担当医師挨拶 -->
  <section class="p-topMessage p-message" id="top-message">
    <div class="p-message__head c-wideTitle">
      <div class="p-message__headInner l-inner">
        <div class="c-wideTitle__content">
          <div class="c-wideTitle__en">MESSAGE</div>
          <h2 class="c-wideTitle__ja">担当医師挨拶</h2>
        </div>
      </div>
    </div>

    <div class="p-message__inner l-inner">
      <div class="p-message__body">
        <figure class="p-message__figure">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック横浜院 医師 白川 巧">
          <div class="p-message__post">
            <div class="p-message__clinic">リエートクリニック横浜院</div>
            <div class="p-message__name"><span>医師</span>白川 巧</div>
          </div>
        </figure>
        <div class="p-message__desc">
          <p class="p-message__text">
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
        </div>
      </div>
      <div class="p-message__btn">
        <a href="/greeting/" class="c-btn">担当医師について詳しくみる</a>
      </div>
    </div>
  </section>

  <!-- よくあるご質問 -->
  <section class="p-topFaq" id="top-faq">
    <div class="p-topFaq__inner l-inner">
      <div class="p-topFaq__head c-secTitle">
        <div class="c-secTitle__en">FAQ</div>

        <h2 class="c-secTitle__ja">よくあるご質問</h2>
      </div>

      <div class="p-topFaq__content p-faq" itemscope itemtype="https://schema.org/FAQPage">
        <?php get_template_part('template-parts/faq/part', 'clinic'); ?>
      </div>

      <div class="p-topFaq__btn">
        <a href="/faq/" class="c-btn">よくあるご質問を詳しくみる</a>
      </div>
    </div>
  </section>

  <!-- 新着情報 -->
  <section class="p-topInformation" id="top-information">
    <div class="p-topInformation__inner">
      <div class="p-topInformation__head c-secTitle">
        <div class="c-secTitle__en">INFORMATION</div>
        <h2 class="c-secTitle__ja">新着情報</h2>
      </div>

      <div class="p-topInformation__body">

        <?php
        $query = new WP_Query(
          array('post_type' => 'post')
        );
        ?>
        <?php if ($query->have_posts()) : ?>
        <?php else : ?>
          <?php $no_post = '_noPost'; ?>
        <?php endif;
        wp_reset_postdata(); ?>

        <div class="p-topInformation__content _news <?php echo $no_post; ?>">
          <div class="p-topInformation__contentInner">
            <div class="p-topInformation__contentTitle">
              <div class="p-topInformation__contentTitleEn">NEWS</div>
              <h3 class="p-topInformation__contentTitleJa">お知らせ</h3>
            </div>

            <ul class="p-topInformation__list">
              <?php
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
              );
              $query = new WP_Query($args);
              ?>

              <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="p-topInformation__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="p-topInformation__itemDate"><?php the_time('Y.m.d'); ?></div>
                      <h4 class="p-topInformation__itemTitle">
                        <?php
                        if (mb_strlen($post->post_title) > 63) {
                          $title = mb_substr($post->post_title, 0, 63);
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </h4>
                    </a>
                  </li>

                <?php endwhile;
                wp_reset_postdata() ?>
              <?php endif; ?>
            </ul>
            <a href="/news/" class="p-topInformation__contentLink">
              <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_news.png'>
              <span>他のお知らせをみる</span>
            </a>
          </div>
        </div>

        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish',
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
          <div class="p-topInformation__content _column <?php echo $no_post; ?>">
            <div class="p-topInformation__contentInner">
              <div class="p-topInformation__contentTitle">
                <div class="p-topInformation__contentTitleEn">COLUMN</div>
                <h3 class="p-topInformation__contentTitleJa">コラム</h3>
              </div>

              <ul class="p-topInformation__list">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="p-topInformation__item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="p-topInformation__itemDate"><?php the_time('Y.m.d'); ?></div>
                      <h4 class="p-topInformation__itemTitle">
                        <?php
                        if (mb_strlen($post->post_title) > 63) {
                          $title = mb_substr($post->post_title, 0, 63);
                          echo $title . '...';
                        } else {
                          echo $post->post_title;
                        }
                        ?>
                      </h4>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>

              <a href="/column/" class="p-topInformation__contentLink">
                <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_column.png'>
                <span>他のコラムをみる</span>
              </a>
            </div>
          </div>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <div class="p-topCta l-inner">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

</main>

<?php get_footer();