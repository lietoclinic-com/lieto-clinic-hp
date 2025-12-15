<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/data.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Allura&family=Jost:ital,wght@0,100..900;1,100..900&family=Ms+Madi&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">

<main class="l-main">

  <section class="p-pagedata">

    <div class="p-pageMessage__body">

      <!-- 担当医師挨拶 -->
      <section class="p-pageMessageGreeting">
        <div class="p-pageMessageGreeting__inner l-inner">
          <h1 class="p-pageMessageGreeting__head">
            <p class="p-pageMessageGreeting__title is-data">データで見るリエートクリニック</p>
          </h1>
        </div>
      </section>

      <div class="data__mv">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-mv.webp" alt="データで見るリエートクリニック" decoding="async">
      </div>

      <div class="data__what">
        <div class="data-what__title">
          <div class="data-read">What kind of person?</div>
          <h2 class="data-title">どんな人が通っているの？</h2>
        </div>
        <div class="data-what__wrap">
          <div class="data-what__img">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what01.webp" alt="患者様の体型データ" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what01-sp.webp" alt="患者様の体型データ" decoding="async" loading="lazy">
          </div>
          <div class="data-what__img">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what02.webp" alt="来院者の性別割合" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what02-sp.webp" alt="来院者の性別割合" decoding="async" loading="lazy">
          </div>
          <div class="data-what__img">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what03.webp" alt="通院されている年齢層" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-what03-sp.webp" alt="通院されている年齢層" decoding="async" loading="lazy">
          </div>
        </div>
      </div>

      <div class="data__performance">
        <div class="data-performance__title">
          <div class="data-read">Average Performance</div>
          <h2 class="data-title">平均減量実績</h2>
        </div>
        <div class="data-performance__wrap">
          <div class="data-performance__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-performance01.webp" alt="平均減量実績" decoding="async" loading="lazy">
          </div>
        </div>
        <div class="data-performance__title2">
          <div class="data-read">Greatest Performance</div>
          <h2 class="data-title">最大減量実績</h2>
        </div>
        <div class="data-performance__wrap2">
          <div class="data-performance__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-performance02.webp" alt="最大減量実績" decoding="async" loading="lazy">
          </div>
        </div>
      </div>

      <div class="data__case">
        <div class="data-case__wrap">
                                


          
          <div class="data-case__con">
            <!--<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-case01.webp" alt="O.Y様/23歳/155cm" decoding="async" loading="lazy">-->
            <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case01-before-sp.webp" alt="Before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case01-after-sp.webp" alt="After">
            </div>
            <div class="p-case__box">
              <div class="p-case__boxTitle js-accordion">
                O.Y様/23歳/155cm
                <div class="p-case__boxTitleMark"></div>
              </div>
              <div class="p-case__boxDescWrap">
                <div class="p-case__boxDesc">
                  <dl class="p-case__boxContent">
                    <dt>治療内容</dt>
                    <dd>医療脂肪冷却機器、医療電磁場機器、医療用HIFU、脂肪溶解注射、エクソソーム注射、ダイエット美容点滴、ダイエット薬セット、医師による投薬指導、オリジナルプロテイン、医師監修サプリメント、管理栄養士によるパーソナル食事指導</dd>
                  </dl>
                  <dl class="p-case__boxDetail">
                    <dt>金額</dt>
                    <dd>400,000円〜1,500,000円</dd>
                    <dt>期間・回数</dt>
                    <dd>6ヶ月</dd>
                    <dt>リスク・副作用</dt>
                    <dd>便秘、下痢、筋肉痛、赤み、腫れ、内出血、しこり、低血糖、吐気、嘔吐</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          
          <div class="data-case__con">
            <!--<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-case02.webp" alt="I.C様/30歳/152cm" decoding="async" loading="lazy">-->
            <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case02-before-sp.webp" alt="Before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case02-after-sp.webp" alt="After">
            </div>
            <div class="p-case__box">
              <div class="p-case__boxTitle js-accordion">
                I.C様/30歳/152cm
                <div class="p-case__boxTitleMark"></div>
              </div>
              <div class="p-case__boxDescWrap">
                <div class="p-case__boxDesc">
                  <dl class="p-case__boxContent">
                    <dt>治療内容</dt>
                    <dd>医療脂肪冷却機器、医療電磁場機器、医療用HIFU、脂肪溶解注射、エクソソーム注射、ダイエット美容点滴、ダイエット薬セット、医師による投薬指導、オリジナルプロテイン、医師監修サプリメント、管理栄養士によるパーソナル食事指導</dd>
                  </dl>
                  <dl class="p-case__boxDetail">
                    <dt>金額</dt>
                    <dd>400,000円〜1,500,000円</dd>
                    <dt>期間・回数</dt>
                    <dd>4ヶ月</dd>
                    <dt>リスク・副作用</dt>
                    <dd>便秘、下痢、筋肉痛、赤み、腫れ、内出血、しこり、低血糖、吐気、嘔吐</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          
          <div class="data-case__con">
            <!--<img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-case03.webp" alt="Y.A様" decoding="async" loading="lazy">-->
            <div class="image-compare-viewer" data-label-before="Before" data-label-after="After">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case03-before-sp.webp" alt="Before">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case03-after-sp.webp" alt="After">
            </div>
            <div class="p-case__box">
              <div class="p-case__boxTitle js-accordion">
                Y.A様
                <div class="p-case__boxTitleMark"></div>
              </div>
              <div class="p-case__boxDescWrap">
                <div class="p-case__boxDesc">
                  <dl class="p-case__boxContent">
                    <dt>治療内容</dt>
                    <dd>医療脂肪冷却機器、医療電磁場機器、医療用HIFU、脂肪溶解注射、エクソソーム注射、ダイエット美容点滴、ダイエット薬セット、医師による投薬指導、オリジナルプロテイン、医師監修サプリメント、管理栄養士によるパーソナル食事指導</dd>
                  </dl>
                  <dl class="p-case__boxDetail">
                    <dt>金額</dt>
                    <dd>400,000円〜1,500,000円</dd>
                    <dt>期間・回数</dt>
                    <dd>4ヶ月/14回</dd>
                    <dt>リスク・副作用</dt>
                    <dd>便秘、下痢、筋肉痛、赤み、腫れ、内出血、しこり、低血糖、吐気、嘔吐</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="data__rank">
        <div class="data-reason__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-reason.webp" alt="みなさんの来院理由TOP5" decoding="async" loading="lazy">
        </div>
        <div class="data-rank__title2">
          <div class="data-read">Popularity Ranking</div>
          <h2 class="data-title">人気治療ランキング</h2>
        </div>
        <div class="data-rank__wrap">
          <div class="data-rank__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-rank01.webp" alt="人気治療ランキング" decoding="async" loading="lazy">
          </div>
          <div class="data-rank__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-rank02.webp" alt="人気治療ランキング" decoding="async" loading="lazy">
          </div>
        </div>
      </div>

      <div class="data__support">
        <div class="data-support__title">
          <div class="data-read">Support for Peace of mind</div>
          <h2 class="data-title">充実の設備<br>安心のサポート体制</h2>
        </div>
        <h3 class="data-support__h3">施術メニュー・医療機器の数</h3>
        <div class="data-support__wrap">
          <div class="data-support__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-support.webp" alt="施術メニュー・医療機器の数" decoding="async" loading="lazy">
          </div>
        </div>
        <a href="<?php echo home_url('/menu/'); ?>" class="data-btn">施術メニューの詳細を見る</a>

        <h3 class="data-support__h3 is-02">フロア面積・個室数</h3>
        <div class="data-shops">
          <a href="<?php echo home_url('/clinic/yokohama/'); ?>" class="data-shop">
            <h4 class="data-shop__title">池袋院</h4>
            <div class="data-shop__wrap">
              <div class="data-shop__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-clinic01.webp" alt="池袋院" decoding="async" loading="lazy"></div>
              <div class="data-shop__desc">フロア面積：約130坪<br>部屋数：20部屋</div>
            </div>
          </a>
          <a href="<?php echo home_url('/clinic/nagoya/'); ?>" class="data-shop">
            <h4 class="data-shop__title">横浜院</h4>
            <div class="data-shop__wrap">
              <div class="data-shop__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-clinic02.webp" alt="横浜院" decoding="async" loading="lazy"></div>
              <div class="data-shop__desc">フロア面積：約90坪<br>部屋数：13部屋</div>
            </div>
          </a>
          <a href="<?php echo home_url('/clinic/ikebukuro/'); ?>" class="data-shop">
            <h4 class="data-shop__title">名古屋院</h4>
            <div class="data-shop__wrap">
              <div class="data-shop__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-clinic03.webp" alt="名古屋院" decoding="async" loading="lazy"></div>
              <div class="data-shop__desc">フロア面積：約115坪<br>部屋数：20部屋</div>              
            </div>
          </a>
        </div>
        <div class="data-voice__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-voice01.webp" alt="一般的なクリニックの約3〜5倍のフロア面積と部屋数により丁寧な施術はもちろん、プライバシーへの配慮も万全です。" decoding="async" loading="lazy">
        </div>
        
        <h3 class="data-support__h3 is-02">医師・スタッフ数（3院合計）</h3>
        <div class="data-voice__img">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-staff.webp" alt="初回カウンセリングの平均時間平均90分" decoding="async" loading="lazy">
        </div>

      </div>

      <div class="data__en">
        <div class="data__en-title">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en-title.webp" alt="患者様の満足度" decoding="async" loading="lazy">
        </div>
        <div class="data-en__wrap">
          <div class="data-en__con">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en01.webp" alt="総合満足度" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en01-sp.webp" alt="総合満足度" decoding="async" loading="lazy">
          </div>
          <div class="data-en__con">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en02.webp" alt="効果実感度" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en02-sp.webp" alt="効果実感度" decoding="async" loading="lazy">
          </div>
          <div class="data-en__con">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en03.webp" alt="スタッフ対応" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en03-sp.webp" alt="スタッフ対応" decoding="async" loading="lazy">
          </div>
          <div class="data-en__con">
            <img class="sp-hide" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en04.webp" alt="コース完走率" decoding="async" loading="lazy">
            <img class="sp-block" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-en04-sp.webp" alt="コース完走率" decoding="async" loading="lazy">
          </div>
        </div>
        <div class="data-en-caution">
          調査期間：2023年1月〜2025年8月
          <br>調査対象：コース卒業者様1,000人
        </div>
        
      </div>

      <div class="data-map">
        <h2 class="data-map-title">Googleマップの口コミ平均</h2>
        <div class="data-map__desc">
          2023年の開院から口コミ件数510件突破！
          <br>ありがたいことに、2025年9月末時点で
          <br>全店舗平均★4.43の評価をいただいています。
        </div>
        <div class="data-map__voice">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/data/data-map.webp" alt="患者様の満足度" decoding="async" loading="lazy">
        </div>
        <a href="<?php echo home_url('/clinic/yokohama/'); ?>" class="data-btn">横浜院の口コミを見る</a>
        <a href="<?php echo home_url('/clinic/nagoya/'); ?>" class="data-btn">池袋院の口コミを見る</a>
        <a href="<?php echo home_url('/clinic/ikebukuro/'); ?>" class="data-btn">名古屋院の口コミを見る</a>
        
      </div>

    </div>

  </section>

</main>

<?php get_footer();
