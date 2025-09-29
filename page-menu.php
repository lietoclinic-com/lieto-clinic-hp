<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMenu">
    <div class="p-pageMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MENU</div>
        <h1 class="c-pageTitle__ja">施術一覧</h2>
      </div>
    </div>

    <div class="p-pageMenu__body">
      <section class="p-pageMenuTreatment p-treatment">

        <!-- banner -->
        <div class="banner-container" style="margin-top: 0;">
          <a href="https://lietoclinic.com/form/" target="_blank">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/monitor_in-header.webp" alt="モニター募集" decoding="async" loading="lazy">
          </a>
        </div>

        <div class="p-treatment__inner l-inner">
          <div class="p-treatment__title">施術内容</div>


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

            <div class="p-pageMenu__banner">
              <a href="/menu/exosome/">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner.png" alt="エクソソーム点滴" class="_overTab">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/treatment_banner_sp.png" alt="エクソソーム点滴" class="_sp">
              </a>
            </div>

          </div>
        </div>
      </section>


      <div class="p-pageMenu__btn">
        <a href="/monitor/" class="c-btn _orange">モニター募集情報をみる</a>
      </div>

      <!-- CTA -->
      <div class="p-pageMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>
    </div>

  </section>

</main>

<?php get_footer();
