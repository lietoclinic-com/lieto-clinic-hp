<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageFlow">
    <div class="p-pageFlow__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">FLOW</div>
        <h1 class="c-pageTitle__ja">施術の流れ</h2>
      </div>
    </div>

    <div class="p-pageFlow__body">

      <!-- ご予約から施術の流れ -->
      <section class="p-pageFlow__main">
        <div class="p-pageFlow__mainInner l-inner">

          <div class="p-pageFlow__mainArea">
            <div class="p-pageFlow__mainHead c-secTitle">
              <h2 class="c-secTitle__ja">ご予約から施術の流れ</h2>
            </div>

            <div class="p-pageFlow__mainBody p-flow">
              <ul class="p-flow__list">
                <h3 class="p-flow__subtitle">ご予約当日</h3>
                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_01.png" alt="ご予約・無料カウンセリング">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">01</div>
                        <div class="p-flow__descTitle">
                          ご予約・<br>無料カウンセリング
                        </div>
                      </div>
                      <p class="p-flow__descText">
                        無料カウンセリングは、Web予約フォームまたは電話で手軽に予約可能です。ご希望の日時を選択できますが、予約状況により日程調整が必要な場合もあるため、複数の候補日を予めご用意ください。無料カウンセリングでは、これまでのダイエット経験や食生活などをお伺いし、お客様の理想の体型や体重を実現する為の医療痩身プログラムを作成します。
                      </p>
                    </div>
                  </div>

                  <div class="p-flow__itemBtns">
                    <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" class="c-btn _orange"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png" alt="counseling">無料カウンセリング予約</a>
                    <a href="tel:<?php echo get_field('toll-free', 94); ?>" class="c-btn"><img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel.png" alt="tel">お電話からのご予約</a>
                  </div>
                </li>

                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_02.png" alt="採血・遺伝子検査">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">02</div>
                        <div class="p-flow__descTitle">採血・遺伝子検査</div>
                      </div>
                      <p class="p-flow__descText">
                        お客様ひとりひとりに合ったプログラムを実施するため、施術前に採血と遺伝子検査を行います。
                      </p>
                    </div>
                  </div>
                </li>

                <h3 class="p-flow__subtitle _second">再度ご来院</h3>
                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_03.png" alt="inbody測定">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">03</div>
                        <div class="p-flow__descTitle">inbody測定</div>
                      </div>
                      <p class="p-flow__descText">
                        さらに、高性能な体成分分析装置のInbodyで、精密な検査を行います。<br>
                        体を構成する基本成分である筋肉量・タンパク質・ミネラル・体脂肪を定量的に分析します。
                      </p>
                    </div>
                  </div>
                </li>

                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_04.png" alt="問診・ダイエット食事指導">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">04</div>
                        <div class="p-flow__descTitle">問診・<br>ダイエット食事指導</div>
                      </div>
                      <p class="p-flow__descText">
                        採血・遺伝子検査・Inbodyの結果をもとに、お客様の理想の体を実現すべく、医師による投薬指導と管理栄養士による食事指導を実施します。
                      </p>
                    </div>
                  </div>
                </li>

                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_05.png" alt="医療機器施術">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">05</div>
                        <div class="p-flow__descTitle">医療機器施術</div>
                      </div>
                      <p class="p-flow__descText">
                        お客様ひとりひとりに合ったプランで、国際的に医療認可を受けた医療痩身機器によるリエートクリニックならではの効果の高い施術を行います。
                      </p>
                    </div>
                  </div>
                </li>

                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_06.png" alt="注射・点滴施術">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">06</div>
                        <div class="p-flow__descTitle">注射・点滴施術</div>
                      </div>
                      <p class="p-flow__descText">
                        ダウンタイムの少ない脂肪溶解注射をお客様のご希望する部位への施術を行います。
                      </p>
                    </div>
                  </div>
                </li>

                <li class="p-flow__item">
                  <div class="p-flow__itemFlex">
                    <figure class="p-flow__figure">
                      <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/flow/flow_07.png" alt="ダイエット薬・サプリメント処方">
                    </figure>

                    <div class="p-flow__desc">
                      <div class="p-flow__descHead">
                        <div class="p-flow__descNum">07</div>
                        <div class="p-flow__descTitle">ダイエット薬・<br>サプリメント処方</div>
                      </div>
                      <p class="p-flow__descText">
                        痩身効果を期待される厳選されたダイエット薬と痩せたいへと導くリエートクリニックのオリジナルサプリメントをお客様に合わせたオーダーメイド処方を実施します。
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </section>

      <!-- CTA -->
      <div class="p-pageFlow__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
