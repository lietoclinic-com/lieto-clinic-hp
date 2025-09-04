  <!-- footer -->
  <footer class="l-footer">
    <div class="l-footer__inner l-inner">
      <div class="l-footer__body">

        <div class="l-footer__menu">
          <div class="l-footer__logo">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_orange.png' alt='lieto Clinic'>
          </div>

          <nav class="l-footer__nav">
            <div class="l-footer__box">
              <div class="l-footer__boxTitle">当院について</div>
              <ul class="l-footer__list">
                <li class="l-footer__item"><a href="/">TOP</a></li>
                <li class="l-footer__item"><a href="/greeting/">担当医師挨拶</a></li>
                <li class="l-footer__item"><a href="/about/">当院について</a></li>
                <li class="l-footer__item"><a href="/flow/">施術の流れ</a></li>
                <li class="l-footer__item"><a href="/minor/">未成年者の方へ</a></li>
                <li class="l-footer__item has-child">
                  <a href="/clinic/">クリニック一覧</a>
                  <ul class="l-footer__subList">
                    <?php
                    $args = array(
                      'post_type' => 'clinic',
                      'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                      <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <li class="l-footer__subItem">
                          <a href="<?php the_permalink(); ?>"><?php echo get_field("clinic_name"); ?>院</a>
                        </li>
                      <?php endwhile;
                      wp_reset_postdata() ?>
                    <?php endif; ?>
                  </ul>
                </li>
                <li class="l-footer__item"><a href="/news/">新着情報</a></li>
                <li class="l-footer__item"><a href="/recruit/">採用情報</a></li>
                <li class="l-footer__item"><a href="/price/">料金一覧</a></li>
                <li class="l-footer__item"><a href="/monitor/">モニター募集</a></li>
                <li class="l-footer__item"><a href="/case/">当院の症例</a></li>
              </ul>
            </div>

            <div class="l-footer__box">
              <div class="l-footer__boxTitle">施術について</div>
              <ul class="l-footer__list">
                <li class="l-footer__item has-child">
                  <a href="/menu/">診療メニュー</a>
                  <ul class="l-footer__subList">
                    <li class="l-footer__subItem"><a href="/menu/stimsure/">医療痩身機器<span>StimSure-スティムシュアー</span></a></li>
                    <li class="l-footer__subItem"><a href="/menu/clatuu-a/">医療脂肪冷却機器<span>CLATUU α -クラツーアルファ-</span></a></li>
                    <li class="l-footer__subItem"><a href="/menu/hifu/">医療HIFU<span>ULTRAcel [zíː] -ウルトラセル ジィー-</span></a></li>
                    <li class="l-footer__subItem"><a href="/menu/fat-dissolving-injection/">脂肪溶解注射</a></li>

                    <li class="l-footer__subItem"><a href="/menu/glp-1/">GLP-1</a></li>
                    <li class="l-footer__subItem"><a href="/menu/beauty-drip/">ダイエット美容点滴</a></li>
                    <li class="l-footer__subItem"><a href="/menu/original-supplement/">オリジナルサプリメント</a></li>
                    <li class="l-footer__subItem"><a href="/menu/original-protein/">オリジナルプロテイン</a></li>
                    <li class="l-footer__subItem"><a href="/menu/diet-supplement/">ダイエット薬</a></li>
                    <li class="l-footer__subItem"><a href="/menu/guidance/">食事・栄養指導</a></li>
                    <li class="l-footer__subItem"><a href="/menu/exosome/">細胞レベルで美しく<span>エクソソーム点滴</span></a></li>
                    <!-- 部位別メニュー -->
                    <li class="l-footer__subItem is-parts_parent">部位別メニュー</li>
                    <li class="l-footer__subItem is-parts"><a href="/menu/upper-arm/">二の腕痩せ</a></li>
                    <li class="l-footer__subItem is-parts"><a href="/menu/face-slimming/">顔痩せ</a></li>
                    <li class="l-footer__subItem is-parts"><a href="/menu/lose-weight/">お腹痩せ</a></li>
                    <li class="l-footer__subItem is-parts"><a href="/menu/slim-thighs/">太もも痩せ</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="l-footer__box">
              <div class="l-footer__boxTitle">その他</div>
              <ul class="l-footer__list">
                <li class="l-footer__item"><a href="/contact/">お問い合わせ</a></li>
                <li class="l-footer__item"><a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*1gvdhfb*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5">無料カウンセリング予約</a></li>
                <li class="l-footer__item"><a href="/faq/">よくあるご質問</a></li>
                <?php
                $query = new WP_Query(
                  array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                  )
                );
                ?>
                <?php if ($query->have_posts()) : ?>
                  <li class="l-footer__item has-child">
                    <a href="/column/">コラム</a>
                    <ul class="l-footer__subList">
                      <?php
                      $terms = get_terms('category');
                      foreach ($terms as $term) :
                        $slug = $term->slug;
                      ?>
                        <li class="l-footer__subItem"><a href="<?php echo esc_url(home_url($slug)); ?>/"><?php echo $term->name; ?></a></li>
                      <?php
                      endforeach;
                      ?>
                    </ul>
                  </li>
                <?php endif;
                wp_reset_postdata(); ?>




                <li class="l-footer__item"><a href="/sitemap/">サイトマップ</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="l-footer__info">
          <dl class="l-footer__infolList">
            <div class="l-footer__infoRow">
              <dt>■ 医療広告ガイドラインの遵守について</dt>
              <dd>
                当院は2018年6月に施行された改正医療法を遵守し、医療機関としての適切な情報を元に当Webサイトを運営しております。<br>
                <br>
                詳細は下記のページをご覧ください。<br>
                <a href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kenkou_iryou/iryou/kokokukisei/index.html" target="_blank">医療法における病院等の広告規制について</a><br>
                <a href="https://www.mhlw.go.jp/file/06-Seisakujouhou-10800000-Iseikyoku/0000209841.pdf" target="_blank">医業若しくは歯科医業又は病院若しくは診療所に関する広告塔に関する指針（医療広告ガイドライン）等について</a>
              </dd>
            </div>

            <div class="l-footer__infoRow">
              <dt>■ 治療内容について</dt>
              <dd>
                日本皮膚科学会が定めるガイドラインに基づく手法や医学的エビデンスレベルが高い手法をベースに、お客様にあったオーダーメイドの治療を行っております。<br>
                ご不明な点や不安な点がございましたら、お気軽にご相談ください。
              </dd>
            </div>

            <div class="l-footer__sns-wrap">
              <ul class="l-footer__sns">
                <li><a href="https://www.youtube.com/@lietoclinic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/top/icon-youtube.svg" alt="youtube"></a></li>
                <li><a href="https://www.tiktok.com/@lietoclinic_official" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/top/icon-tiktok.svg" alt="tiktok"></a></li>
                <li><a href="https://www.instagram.com/lietoclinic/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/top/icon-instagram.svg" alt="Instagram"></a></li>
                <li><a href="https://twitter.com/lietoclinic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/top/icon-x.svg" alt="X"></a></li>
              </ul>
            </div>

          </dl>
        </div>
      </div>
    </div>

    <div class="l-footer__copy">
      <div class="l-footer__copyInner l-inner">
        <div class="l-footer__right">
          <div class="l-footer__privacy"><a href="/privacy-policy/">個人情報保護方針</a></div>
          <div class="l-footer__privacy"><a href="/privacy-policy_koseikai/">医療法人の個人情報保護方針</a></div>
          <div class="l-footer__privacy"><a href="/company/">運営会社情報</a></div>
        </div>
        <div class="l-footer__coryright">Copyright 2023 Lieto Clinic All Rights Reserved.</div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
  </body>

  </html>
