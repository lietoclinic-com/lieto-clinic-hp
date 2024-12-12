<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMonitor">
    <div class="p-pageMonitor__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MONITOR</div>
        <h1 class="c-pageTitle__ja">モニター募集</h2>
      </div>
    </div>

    <div class="p-pageMonitor__body">

      <!-- FV -->
      <div class="p-pageMonitor__fv">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_fv_sp.jpg">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_fv.png" alt="医療ダイエット モニター募集中">
        </picture>
      </div>

      <!-- splide -->
      <div class="p-pageMonitor__slider">
        <div class="p-pageMonitor__sliderInner l-inner">
          <div class="splide" role="group" aria-label="slider" id="monitorSplide">
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_splide_01.jpg" alt="monitor01"></li>
                <li class="splide__slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_splide_02.jpg" alt="monitor02"></li>
                <li class="splide__slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_splide_03.jpg" alt="monitor03"></li>
                <li class="splide__slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_splide_04.jpg" alt="monitor04"></li>
                <li class="splide__slide"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_splide_05.jpg" alt="monitor05"></li>
              </ul>
            </div>

            <div class="splide__arrows">
              <button class="splide__arrow splide__arrow--prev"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/arrow_splide.png" alt="arrow" decoding="async" loading="lazy"></button>
              <button class="splide__arrow splide__arrow--next"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/arrow_splide.png" alt="arrow" decoding="async" loading="lazy"></button>
            </div>

            <div class="pagination">
              <span id="slide-current"></span>
              <span>/</span>
              <span id="slide-length"></span>
            </div>
          </div>
      </div>

      <!-- バナー -->
      <div class="p-pageMonitor__banner">
        <div class="p-pageMonitor__bannerInner l-inner">
          <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" target="_blank">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar_sp.jpg">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar.jpg" alt="バナー">
            </picture>
          </a>
        </div>
      </div>

      <!-- モニター条件 -->
      <div class="p-pageMonitorCondition">
        <div class="p-pageMonitorCondition__inner l-inner">
          <h2 class="p-pageMonitor__title">こんな方を探しています</h2>
          <div class="p-pageMonitorCondition__body">
            <div class="p-pageMonitorCondition__desc">
              <ul class="p-pageMonitorCondition__list">
                <li class="p-pageMonitorCondition__item">ダイエットが長続きしない</li>
                <li class="p-pageMonitorCondition__item">リバウンド経験がある</li>
                <li class="p-pageMonitorCondition__item">食事制限や運動なしで楽に痩せたい</li>
                <li class="p-pageMonitorCondition__item">短期間で理想の体型を手に入れたい</li>
                <li class="p-pageMonitorCondition__item">一人でのダイエットに限界を感じている</li>
                <li class="p-pageMonitorCondition__item">医療の力で健康的に痩せたい</li>
                <li class="p-pageMonitorCondition__item">メスを使わない医療ダイエットがしたい</li>
              </ul>
            </div>
            <figure class="p-pageMonitorCondition__figure">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_condition_01.jpg" alt="こんな方を探しています" decoding="async" loading="lazy">
            </figure>
          </div>

          <div class="p-pageMonitorCondition__box">
            <div class="p-pageMonitorCondition__boxFigure">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_condition_02.png" alt="モニター条件" decoding="async" loading="lazy">
            </div>
            <div class="p-pageMonitorCondition__boxDesc">
              <div class="p-pageMonitorCondition__boxTitle">モニター条件</div>
              <ul class="p-pageMonitorCondition__boxList">
                <li class="p-pageMonitorCondition__boxItem">ビフォーアフターの写真やデータの公開</li>
                <li class="p-pageMonitorCondition__boxItem">当院が指定する回数および期間の通院</li>
                <li class="p-pageMonitorCondition__boxItem">当院が指定する日時での撮影</li>
                <li class="p-pageMonitorCondition__boxItem">特定の疾患がない</li>
              </ul>
              <div class="p-pageMonitorCondition__boxAttention">
                <!-- ※上記すべての条件に同意いただける方のみ、<br>モニター価格で施術を受けていただけます。 -->
                ※上記の条件に加え、細かい条件がございますので<br>カウンセリングの際に詳しくご説明させていただいております。
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 掲載内容 -->
      <div class="p-pageMonitorContent">
        <div class="p-pageMonitorContent__inner l-inner">
          <h2 class="p-pageMonitor__title">掲載内容</h2>
          <div class="p-pageMonitorContent__body">
            <div class="p-pageMonitorContent__text">
            ・全顔モニター<br>
            お顔をお出しして全身撮影にご協力いただける方
            </div>
            <div class="p-pageMonitorContent__text">
            ・部分モニター<br>
            お顔出しなし（モザイク含む）での全身撮影、もしくはお体のパーツのみの撮影にご協力いただける方
            </div>
            <div class="p-pageMonitorContent__attention">
            ※割引額はメニューやプログラム、撮影範囲によって異なります。
            </div>
          </div>
        </div>
      </div>

      <!-- 掲載先 -->
      <div class="p-pageMonitorPublish">
        <div class="p-pageMonitorPublish__inner l-inner">
          <h2 class="p-pageMonitor__title">掲載先</h2>

          <div class="p-pageMonitorPublish__body">
            <div class="p-pageMonitorPublish__box">
              <ul class="p-pageMonitorPublish__icons">
                <li class="p-pageMonitorPublish__icon">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_publish_icon_01.png" alt="ホームページ" decoding="async" loading="lazy">
                  <p class="p-pageMonitorPublish__iconText">ホームページ</p>
                </li>
                <li class="p-pageMonitorPublish__icon">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_publish_icon_02.png" alt="SNS" decoding="async" loading="lazy">
                  <p class="p-pageMonitorPublish__iconText">SNS</p>
                </li>
                <li class="p-pageMonitorPublish__icon">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_publish_icon_03.png" alt="院内資料" decoding="async" loading="lazy">
                  <p class="p-pageMonitorPublish__iconText">院内資料</p>
                </li>
              </ul>
              <div class="p-pageMonitorPublish__boxText">など、Web媒体・雑誌などを含む媒体</div>
            </div>

            <div class="p-pageMonitorPublish__attention">※撮影した写真や動画は当院のHPや広告、SNSなどに掲載いたします。また、院内の研修会などで使用する場合もあります。</div>

            <ul class="p-pageMonitorPublish__list">
              <li class="p-pageMonitorPublish__item">
                <div class="p-pageMonitorPublish__itemDesc">
                  <div class="p-pageMonitorPublish__itemTitle">太る原因「脂肪細胞」は<wbr>自力で減らせない</div>
                  <div class="p-pageMonitorPublish__itemText">
                  人の体は成長とともに脂肪細胞の数が増加し、成人になるとその数が大幅に増えることはなくなります。食事制限や運動で体重が減っても、脂肪細胞は小さくなるだけで、細胞自体の数は変わりません。<br>
                  <br>
                  ダイエットに成功してもリバウンドしてしまうのは、脂肪細胞が体内に存在するからです。<br>
                  一時的に体重を減らすことはできても、過食や運動不足が続けば脂肪細胞が再び肥大化し、リバウンドしてしまう可能性があるのです。<br>
                  <br>
                  食事制限や運動がムダとは言いません。ただ、自己流のダイエットには限界があり、リバウンドのリスクがつきまとうことは無視できない事実です。
                  </div>
                </div>
                <div class="p-pageMonitorPublish__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_publish_01.jpg" alt="太る原因「脂肪細胞」は自力で減らせない" decoding="async" loading="lazy">
                </div>
              </li>
              <li class="p-pageMonitorPublish__item">
                <div class="p-pageMonitorPublish__itemDesc">
                  <div class="p-pageMonitorPublish__itemTitle">
                  脂肪細胞にサヨナラ！<br>
                  人生最後のダイエットは<wbr>「リエートクリニック」におまかせ
                  </div>
                  <div class="p-pageMonitorPublish__itemText">
                  過度な食事制限や運動をせず、理想の体型を手に入れる方法の一つに「医療ダイエット」があります。医療的アプローチで脂肪細胞を破壊するので、無理なく理想のボディラインを手に入れることができます。<br>
                  <br>
                  機能しなくなった脂肪細胞は時間の経過とともに体外へ排出され、復活することはありません。医療ダイエットなら、太る原因となる脂肪細胞に直接アプローチできるので、我慢やストレスの少ないボディメイクができるのです。<br>
                  <br>
                  「人生最後のダイエットを成功に導き、理想のボディラインとともに明るい未来を歩いてもらいたい」私たちリエートクリニックは、このような想いでお客様と日々向き合っております。<br>
                  <br>
                  お客様の理想や体質に合わせて最適な痩身プログラムを作成し、効率的かつ効果的なダイエットをご提案いたします。医療ダイエットモニターが一歩踏み出すきっかけになれば幸いです。
                  </div>
                </div>
                <div class="p-pageMonitorPublish__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_publish_02.jpg" alt="人生最後のダイエットは「リエートクリニック」におまかせ" decoding="async" loading="lazy">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- バナー -->
      <div class="p-pageMonitor__banner">
        <div class="p-pageMonitor__bannerInner l-inner">
          <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" target="_blank">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar_sp.jpg">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_bannar.jpg" alt="バナー">
            </picture>
          </a>
        </div>
      </div>

      <!-- 選ばれる理由 -->
      <div class="p-bgcImg">
        <div class="p-bgc">
          <section class="p-pageMonitorReason">
            <div class="p-pageMonitorReason__inner l-inner">
              <div class="p-pageMonitorReason__head c-secTitle">
                <div class="c-secTitle__en">WHY LIETO CLINIC</div>
                <h2 class="c-secTitle__ja">リエートクリニックの<br>医療ダイエットが選ばれる理由</h2>
              </div>
              <div class="p-pageMonitorReason__body">
                <ul class="p-pageMonitorReason__list">

                  <li class="p-pageMonitorReason__item">
                    <figure class="p-pageMonitorReason__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_01.png" alt="安心の医療痩身">
                    </figure>
                    <div class="p-pageMonitorReason__box">
                      <div class="p-pageMonitorReason__boxTitle">
                        有資格者が施術するから<br>
                        安心の医療痩身
                      </div>
                      <p class="p-pageMonitorReason__boxText">
                        医師・看護師などの有資格者が施術を行うことで、お客様の健康状態や体質に合わせたプランをご提案させていただきます。<br>
                        <br>
                        専門的な知識と経験に基づいて行われるため、安心して施術を受けていただけます。
                      </p>
                    </div>
                  </li>
                  <li class="p-pageMonitorReason__item">
                    <figure class="p-pageMonitorReason__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_02.png" alt="短期間での痩身や難しい部分痩せも対応">
                    </figure>
                    <div class="p-pageMonitorReason__box">
                      <div class="p-pageMonitorReason__boxTitle">
                        短期間での痩身や<br>
                        難しい部分痩せも対応
                      </div>
                      <p class="p-pageMonitorReason__boxText">
                        短期間での効果的な痩身や、通常難しいとされる部分痩せにも対応することができます。<br>
                        <br>
                        科学的な根拠に基づいたアプローチを用いて、特定の部位の脂肪やセルライトに対して、技術や機器を駆使して細胞レベルで効果的な施術が可能です。
                      </p>
                    </div>
                  </li>
                  <li class="p-pageMonitorReason__item">
                    <figure class="p-pageMonitorReason__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_reason_03.png" alt="切らない施術で安心して痩身">
                    </figure>
                    <div class="p-pageMonitorReason__box">
                      <div class="p-pageMonitorReason__boxTitle">
                      切らない施術で<br>
                      安心して痩身
                      </div>
                      <p class="p-pageMonitorReason__boxText">
                        リエートクリニックでは、切らない施術の取り扱いが多くございます。<br>
                        <br>
                        切らない施術は、手術のリスクやダウンタイムを最小限に抑えつつ、日常生活への影響も少ないのが特徴です。
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>

        </div>
      </div>

      <!-- モニター対象の施術一覧 -->
      <section class="p-pageMonitorTreatment">
        <div class="p-pageMonitorTreatment__inner l-inner">
          <div class="p-pageMonitorTreatment__head c-secTitle">
            <div class="c-secTitle__en">LIST OF TREATMENTS</div>
            <h2 class="c-secTitle__ja">モニター対象の施術一覧</h2>
          </div>


          <div class="p-pageMonitorTreatment__body">
            <div class="p-pageMonitorTreatment__content">
              <div class="p-pageMonitorTreatment__contentTitle">
              脂肪細胞を破壊する施術方法
              </div>
              <ul class="p-pageMonitorTreatment__contentList">

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/stimsure/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_01.png" alt="医療電磁場機器">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">医療電磁場機器<br>「StimSure スティムシュアー」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      1回に約24,000回分の筋肉運動の効果を得ることができる筋肉痩身マシンです。深層部の筋肉まで電磁波の刺激を与えられるので、効率的なシェイプアップが可能です。<br>
                      お客様の体質や目的に合わせて、筋肉を鍛えるモードとしなやかに引き締めるモードを使い分けます。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/clatuu-a/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_02.png" alt="医療脂肪冷却機器">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">医療脂肪冷却機器<br>「CLATUU α クラツーアルファ」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                        痩せたい部位に専用の装置を装着し、脂肪細胞を冷却する医療痩身マシンです。<br>
                        凍った脂肪は体外に排除され、脂肪細胞そのものを減らすことができます。<br>
                        部分痩せやリバウンド防止に効果があり、痛みやダウンタイムもほとんどありません。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/hifu/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_03.png" alt="医療HIFU">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">医療HIFU<br>「ULTRAcel [zíː] ウルトラセル ジィー」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                        超音波で脂肪細胞を破壊（溶解）する医療痩身マシンです。<br>
                        溶解した脂肪はリンパや血液を通して排出され、自然なボディラインを長期にわたって維持できます。<br>
                        施術後はたるみ改善やハリ感アップなどの副次的効果も期待できます。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/fat-dissolving-injection/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_04.png" alt="脂肪溶解注射">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">脂肪溶解注射「カベリン」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                        皮下脂肪層に薬剤を注射し、脂肪細胞を破壊します。<br>
                        破壊された脂肪細胞は体外に排出され、徐々にボディラインが変化します。<br>
                        ボディと顔に適応があり、ダウンタイムはほとんどありません。
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class="p-pageMonitorTreatment__content">
              <div class="p-pageMonitorTreatment__contentTitle _second">
              太りにくく、痩せやすいカラダ作りに導く方法
              </div>
              <ul class="p-pageMonitorTreatment__contentList">

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/glp-1/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_05.png" alt="GLP1">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">GLP-1</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      GLP-1を内服、または皮下注射し、痩せやすい体へと体質改善する痩身方法です。食欲抑制ホルモンとも呼ばれるGLP-1を投与することで、少ない食事量で満腹感を得られるようになります。注射器の針は髪の毛ほどの細さであり、痛みは少なく数秒で終了します。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/beauty-drip/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_06.png" alt="ダイエット美容点滴">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">ダイエット美容点滴</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      脂肪燃焼や美容効果のある薬剤を点滴で投与します。薬剤には脂肪をエネルギーに変えるL-カルニチンや、抗酸化作用と美肌効果のあるグルタチオンなどが含まれます。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/original-supplement/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_07.jpg" alt="オリジナルサプリメント「LALOC」">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">オリジナルサプリメント「LALOC」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      痩せ体質の実現をサポートする当院オリジナルのサプリメントです。免疫力向上や整腸作用、血糖コントロールなどの効果があります。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/original-protein/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_08.png" alt="オリジナルプロテイン「Liend」">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">オリジナルプロテイン「Liend」</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      ダイエットに特化した当院オリジナルのプロテインです。食後の満腹感が5〜6時間持続するので、食べ過ぎ防止や置き換えダイエットに最適です。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/diet-supplement/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_09.png" alt="ダイエット薬">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">ダイエット薬</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      ダイエット薬にはいくつか種類があり、お客様の体質や目標に合わせて最適なものを処方します。効果や健康状態を定期的にモニタリングし、必要に応じて薬の種類や処方量を調整します。
                      </div>
                    </div>
                  </a>
                </li>

                <li class="p-pageMonitorTreatment__contentItem">
                  <a href="/menu/guidance/">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/treatment/treatment_10.png" alt="食事・栄養指導">
                    <div class="p-pageMonitorTreatment__contentItemDesc">
                      <div class="p-pageMonitorTreatment__contentItemHead">
                        <h3 class="p-pageMonitorTreatment__contentItemTitle">食事・栄養指導</h3>
                      </div>
                      <div class="p-pageMonitorTreatment__contentItemText">
                      カロリーや栄養バランスを管理しながら、食事指導を行います。知識のある医師が正しい指導を行うため、規則正しい食習慣が身に付きます。
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            </div>

        </div>
      </section>

      <!-- 当院の施術・治療薬について -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">当院の施術・治療薬について</h2>
        <div class="p-singleMenu__box">
          <dl class="p-singleMenu__detail">
            <div class="p-singleMenu__detailRow">
              <dt>未承認医薬品等</dt>
              <dd>当院で処方・使用する医薬品及び医療機器は国内未承認です。</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>入手経路等</dt>
              <dd>これらは医薬品医療機器等法上の承認を得ていないものですが、医師等の個人輸入により適法な輸入許可を得ています。わが国においては、未承認医薬品等を医師の責任のもとで使用することができます。</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>国内の承認医薬品等</dt>
              <dd>国内で承認されている脂肪冷却機器として、クールスカルプティング®があります。</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>諸外国における安全性等に係る情報</dt>
              <dd>
                諸外国で本医薬品及び本機器による重篤な安全性情報の報告はありません。<br>
                スティムシュアーは米国<a href="https://www.fda.gov/" target="_blank">FDA（アメリカ食品医薬品局）</a>認証医療機器です。<br>
                クラツーアルファは米国<a href="https://www.fda.gov/" target="_blank">FDA（アメリカ食品医薬品局）</a>認証医療機器です。ヨーロッパにおける医療機器などの販売認証であるCEマークも取得しています。<br>
                ウルトラセルジィーは<a href="https://www.mfds.go.kr/eng/index.do" target="_blank">MFDS（韓国食品医薬品安全庁）</a>認証医療機器です。<br>
                カベリンは米国<a href="https://www.fda.gov/" target="_blank">FDA（アメリカ食品医薬品局）</a>認証医薬品です。<a href="https://www.mfds.go.kr/eng/index.do" target="_blank">MFDS（韓国食品医薬品安全庁）</a>でも承認を受けています。
              </dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>医薬品副作用被害救済制度について</dt>
              <dd>万が一重篤な副作用が出た場合は、国の医薬品副作用被害救済制度の対象外となります。</dd>
            </div>
          </dl>
        </div>
      </div>

      <!-- アクセス・店舗情報 -->
      <section class="p-pageMonitorAccess p-topAccess">
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

      <!-- CTA -->
      <div class="p-pageMonitorCta">
        <div class="p-pageMonitorCta__inner l-inner">
          <?php get_template_part('template-parts/part','cta'); ?>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
