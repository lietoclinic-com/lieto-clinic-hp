<?php get_header(''); ?>

<main class="l-main _top">

  <!-- FV -->
  <div class="p-topFv">
    <div class="p-topFvSlider">
      <div class="p-topFvSliderList" id="p-fvSlider__slick">
        <div class="p-topFvSliderItem">
          <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg.jpg.webp">
          <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg_sp.jpg.webp">
          <div class="p-topFvSliderItem__copy">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy.png.webp">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy_sp.png.webp">
          </div>
        </div>
        <div class="p-topFvSliderItem p-topFvSliderItem--second">
          <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg02.jpg.webp">
          <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg_sp02.jpg.webp">
          <div class="p-topFvSliderItem__copy p-topFvSliderItem__copy--second">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy02.png.webp">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy02_sp.png.webp">
          </div>
        </div>
        <!--
        <div class="p-topFvSliderItem">
          <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg.jpg.webp">
          <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg_sp.jpg.webp">
          <div class="p-topFvSliderItem__copy">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy.png.webp">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_copy_sp.png.webp">
          </div>
        </div>
        -->
      </div>
    </div>

    <div class="p-topFv__body">
      
    </div>

    <div class="p-topFv__scroll">
      <div class="p-topFv__scrollLine"></div>
      <span class="p-topFv__scrollText">scroll</span>
    </div>

    <div class="p-topFv__warningWrap l-inner">
      <ul class="p-topFv__warningList">
        <li class="p-topFv__warningItem">※1 契約時の体重よりも1%以上の体重減少が見られた場合</li>
        <li class="p-topFv__warningItem">※2 2023年7月〜2024年10月までのコース卒業者対象</li>
      </ul>
    </div>
  </div>

  <!-- spot, link -->
  <div class="p-topIntro">
    <div class="p-intro__inner l-inner">
      <div class="p-intro__spotListWrap">
        <ul class="p-intro__spotList">
          <li class="p-intro__spotItem">
            <a href="/clinic/ikebukuro/" class="p-intro__spotLink">
              <div class="p-intro__spotImage">
                <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_ikebukuro.png.webp">
                <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_ikebukuro_sp.png.webp">
              </div>
              <div class="p-intro__spotTitle">池袋院</div>
            </a>
          </li>
          <li class="p-intro__spotItem">
            <a href="/clinic/yokohama/" class="p-intro__spotLink">
              <div class="p-intro__spotImage">
                <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_yokohama.png.webp">
                <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_yokohama_sp.png.webp">
              </div>
              <div class="p-intro__spotTitle">横浜院</div>
            </a>
          </li>
          <li class="p-intro__spotItem">
            <a href="/clinic/nagoya/" class="p-intro__spotLink">
              <div class="p-intro__spotImage">
                <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_nagoya.png.webp">
                <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/spot_nagoya_sp.png.webp">
              </div>
              <div class="p-intro__spotTitle">名古屋院</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="p-intro__menuListWrap">
        <ul class="p-intro__menuList">
          <li class="p-intro__menuItem">
            <a href="/about/" class="p-intro__menuLink">
              <div class="p-intro__menuImage">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/icon_hospital.png.webp">
              </div>
              <p class="p-intro__menuTitle">当院について</p>
            </a>
          </li>
          <li class="p-intro__menuItem">
            <a href="/menu/" class="p-intro__menuLink">
              <div class="p-intro__menuImage">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/icon_menu.png.webp">
              </div>
              <p class="p-intro__menuTitle">施術一覧</p>
            </a>
          </li>
          <li class="p-intro__menuItem">
            <a href="/case/" class="p-intro__menuLink">
              <div class="p-intro__menuImage">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/icon_case.png.webp">
              </div>
              <p class="p-intro__menuTitle">症例一覧</p>
            </a>
          </li>
          <li class="p-intro__menuItem">
            <a href="/flow/" class="p-intro__menuLink">
              <div class="p-intro__menuImage">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/icon_flow.png.webp">
              </div>
              <p class="p-intro__menuTitle">施術の流れ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- slick, banner -->
  <div class="p-topBanner">
    <div class="p-topSlider">
      <div class="p-topSlider__inner">
        <div class="p-topSliderList" id="p-topSlider__slick">
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/open-campaign/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_01a.png" alt="オープン記念キャンペーン"></a>
          </div>
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/cash-back/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_02.png" alt="全額返金保証付"></a>
          </div>
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/gift-campaign/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_03.png" alt="ご来店でAmazonギフト 1,000円分をプレゼント"></a>
          </div>
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('monitor/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_04.png" alt="モニター募集ページへの誘導バナー"></a>
          </div>
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/present-campaign/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_05.png" alt="旅行券プレゼントキャンペーン"></a>
          </div>
          <div class="p-topSliderItem">
            <a href="<?php echo esc_url(home_url('news/tenmonth-campaign/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/slider_06.png" alt="12ヶ月分0円キャンペーン"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="p-topCta l-inner" style="margin-bottom: 48px;">
    <?php get_template_part('template-parts/part', 'cta'); ?>
  </div>

  <?php get_template_part('template-parts/part-lp-con'); ?>


  <!-- 当院の症例 -->
  <section class="p-topFaq" id="top-case">
    <div class="p-pageCase__body">
      <div class="l-inner">

        <div class="p-topFaq__head c-secTitle">
          <div class="c-secTitle__en">CASE</div>
          <h2 class="c-secTitle__ja">当院の症例</h2>
        </div>

        <?php get_template_part('template-parts/front-case'); ?>
        
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
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_line.png" alt="line">
          </div>

          <ul class="p-topTreatment__selectBox">
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">食事制限<br>が苦手な方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_01.png" alt="食事制限">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">運動が<br>苦手な方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_02.png" alt="運動">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">ダイエットに<br>失敗ばかりする方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_03.png" alt="ダイエット">
            </li>
            <li class="p-topTreatment__selectItem">
              <div class="p-topTreatment__selectItemText">人生最後の<br>ダイエットにしたい方</div>
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/treatment_select_04.png" alt="人生最後">
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

  <!-- 選ばれる理由 -->
  <section class="p-topReason p-reason" id="top-reason">
    <div class="p-reason__inner l-inner">
      <div class="p-reason__head c-secTitle">
        <div class="c-secTitle__en">WHY LIETO CLINIC</div>
        <h2 class="c-secTitle__ja">リエートクリニックの<br>医療ダイエットが選ばれる理由</h2>
      </div>
      <div class="p-reason__body">
        <ul class="p-reason__list is-top">
          
          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_new01.webp" alt="">
            <h3 class="p-reason__itemTitle">検査結果をもとに導く<br>根拠ある痩身プラン</h3>
            <p class="p-reason__itemText">
              ただ体重を減らすのではなく、まずは太りやすさの原因を明確にすることからスタート。
              <br>血液検査やInBody測定を通じて、体内の状態や体組成を正確に把握し、体質に合った“ムリのない痩せ方”を見極めます。
              <br>感覚に頼らず、科学的根拠に基づいてプランを立てることで、効率的かつ安全なダイエットを目指せます。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_new02.webp" alt="">
            <h3 class="p-reason__itemTitle">豊富な医療機器で叶える<br>切らない痩身</h3>
            <p class="p-reason__itemText">
              脂肪冷却や電磁場による筋肉刺激、GLP-1など、多彩な選択肢を目的や体質に応じてご用意。
              <br>体に負担の少ない方法を中心に、気になる部位にしっかりとアプローチできます。
              <br>「外科的な治療には抵抗がある」「ダウンタイムは避けたい」といったニーズにも応えられる環境を整えています。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_new03.webp" alt="">
            <h3 class="p-reason__itemTitle">短期間でのダイエットや<br>難しい部分痩せも可能</h3>
            <p class="p-reason__itemText">
              「短期間で効果を出したい」「特定の部位を集中的にケアしたい」といった細かなご希望にも柔軟に対応。
              <br>施術や薬剤の組み合わせにより、忙しい方や部分痩せをご希望の方でも、短期間での変化が目指せます。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_new04.webp" alt="">
            <h3 class="p-reason__itemTitle">医師・看護師・栄養士が<br>チームで伴走</h3>
            <p class="p-reason__itemText">
              ダイエットを続ける上で大切なのは、無理なく続けられるサポート体制。
              <br>リエートクリニックでは、医師の診察を軸に、看護師の技術、管理栄養士の生活支援を組み合わせ、体の内外から健康的に体重と向き合える環境を整えています。
              <br>専門スタッフがチームで支えるからこそ、継続しやすく、確かな結果へとつながります。
            </p>
          </li>

          <li class="p-reason__item">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_new05.webp" alt="">
            <h3 class="p-reason__itemTitle">ムダのないあなただけの<br>ダイエットプランをご提案</h3>
            <p class="p-reason__itemText">
              年齢・体質・ライフスタイルが異なる中で、限られたコースから選ぶだけの方法では、本当に合った施術にはなかなか出会えません。
              <br>リエートクリニックでは、決まったパッケージではなく、必要な施術だけを無理なく組み合わせてご提案。
              <br>“あなただけ”のプランで、続けやすくリバウンドしにくい、現実的なダイエットをサポートしています。
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

  <!-- caution -->
  <section class="p-topCaution">
    <div class="p-topCaution__lead">
      <h2>CAUTION</h2>
      <p>
        医療ダイエットおよび当院をご検討している方
        <br class="sp-hide">ご注意ください！
      </p>
      <p>
        医療ダイエットは知名度のまだ低いダイエット方法のため
        <br class="sp-hide">適切でないサービスや誤った情報が横行しています。
      </p>
    </div>
    <img class="p-topCaution__lead-img sp-hide" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution-head.png' alt="">
    <img class="p-topCaution__lead-img sp-block" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution-head-sp.png' alt="">
    <div class="p-topCaution__wrap">
      <div class="p-topCaution__inner l-inner">
        <div class="p-topCaution__title">
          <div class="p-topCaution__title-top">CAUTION 1</div>
          <h3 class="p-topCaution__title-text">エステ機器を使っている</h3>
        </div>
        <p class="p-topCaution__text-center">
          医療ダイエットを提供しているサービスの中には医療機器と比べ効果が低い
          <br class="sp-hide">「エステ機器」を使っている場合がございます。
          <br>
          <br>特に極端に低価格な医療クリニックやエステ施設ではエステ機器を使っている場合がございます。
        </p>
        <table class="p-topCaution__table">
          <thead>
            <tr>
              <th width="20%"></th>
              <th width="40%">医療用脂肪<br class="sp-block">冷却マシン</th>
              <th width="40%">エステ用脂肪<br class="sp-block">冷却マシン</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>資格</th>
              <td>医師免許が必要</td>
              <td>不要</td>
            </tr>
            <tr>
              <th>提供場所</th>
              <td>皮膚科・美容外科・クリニック</td>
              <td>エステ・整体・ジムなど</td>
            </tr>
            <tr>
              <th>出力</th>
              <td>高い</td>
              <td>低い</td>
            </tr>
            <tr>
              <th>効果</th>
              <td>即効性がある</td>
              <td>時間がかかる</td>
            </tr>
            <tr>
              <th>施術価格</th>
              <td>高い</td>
              <td>安い</td>
            </tr>
          </tbody>
        </table>
        <div class="p-topCaution__diet">
          <div class="p-topCaution__diet-inner">
            <div class="p-topCaution__diet-title">
              当院では全てダイエット効果の高い
              <br>医療機器を使用しております
            </div>
            <ul class="p-topCaution__diet__list">
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
            </ul>
          </div>
        </div>
        <div class="p-topCaution__title">
          <div class="p-topCaution__title-top">CAUTION 2</div>
          <h3 class="p-topCaution__title-text">医師、看護師の<br class="sp-block">経過観察などなく、薬のみ処方</h3>
        </div>
        <div class="p-topCaution__column">
          <div class="p-topCaution__column-img">
            <img class="p-topCaution__lead-img sp-hide" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution2-img.png' alt="医師、看護師の経過観察などなく、薬のみ処方">
          </div>
          <div class="p-topCaution__column-text">
            医師が在籍する医療機関が運営している場合でも、薬やGLP-1のダイエット注射のみを処方、施術される場合もご注意ください。
            <br>
            <br>特にオンライン診療などで見られるケースですが、医師による適切な診断のもとで実施しない場合、低血糖や胃腸の調子を崩す場合がございます。
            <br>
            <br>また、並行して食事指導や適度な運動のサポートがない場合、栄養不良による体調不良はもちろん、代謝が下がりリバウンドに繋がりやすくなります。
          </div>
        </div>
        <div class="p-topCaution__title">
          <div class="p-topCaution__title-top">CAUTION 3</div>
          <h3 class="p-topCaution__title-text">都度払いに対応していない<br class="sp-block">クリニック</h3>
        </div>
        <div class="p-topCaution__column">
          <div class="p-topCaution__column-img">
            <img class="p-topCaution__lead-img sp-hide" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution3-img.png' alt="都度払いに対応していないクリニック">
          </div>
          <div class="p-topCaution__column-text">
            最近ではWebやSNSで低価格で医療ダイエットが受けられるように見える広告が多く見られます。
            <br>
            <br>実際には高額な費用を請求されることがほとんどです。
            <br>
            <br>当院では他の医療ダイエットクリニックではあまり実施されていない都度払い制度にも対応しています。
            <br>
            <br>そのため、ご自身のお財布事情に合わせて通院いただくことが可能です。
          </div>
        </div>
        <div class="p-topCaution__title">
          <div class="p-topCaution__title-top">CAUTION 4</div>
          <h3 class="p-topCaution__title-text">誤った情報が<br class="sp-block">混在する口コミサイト</h3>
        </div>
        <p class="p-topCaution__text-center">
          医療ダイエットを提供するクリニックが急激に増えたことで
          <br class="sp-hide">他院を悪く見せるような口コミをあえて投稿するようなクリニック（同業者）が発生してきています。
          <br>
          <br>実際、当院の口コミにも事実ではない口コミが増えてきております。
          <br>当院では患者様の体に関するデータは正確に管理しており、以下のような実績がございます。
        </p>
        <img class="p-topCaution__img4-1" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution4-img1.png' alt="体脂肪減少率97.2% リバウンドしない率100%">
        <p class="p-topCaution__text4-1">※2023年7月〜2024年10月までのコース卒業者様対象</p>
        <p class="p-topCaution__text-center">
          また、成果が出ないということも稀にございますのでそういった患者様には
          <br class="sp-hide">誠意を持って全額返金をさせていただいております。
        </p>
        <img class="p-topCaution__img4-2" loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/caution4-img2.png' alt="返せなかったら全額返金保証">
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
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック名古屋院 院長 松永 宏之">
          <div class="p-message__post">
            <div class="p-message__clinic">リエートクリニック名古屋院</div>
            <div class="p-message__name"><span>院長</span>松永 宏之</div>
          </div>
        </figure>
        <div class="p-message__desc">
          <p class="p-message__text">
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
        </div>
      </div>

      <?php get_template_part('template-parts/doctor-info'); ?>

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
          array(
            'post_type' => 'post',
            'post_status' => 'publish',
          )
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
              <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_news.png' alt="icon">
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
                <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_column.png' alt="icon">
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
