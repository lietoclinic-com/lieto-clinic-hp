<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- LandingHub Dispatcher -->
  <script data-landinghub="dispatcher-helper-tag">(function(w,d,i,wl){const u=new URL('https://airport.landinghub.cloud/dispatcher/manifest.json');u.searchParams.set('id',i);u.searchParams.set('location',w.location.href);wl.length&&u.searchParams.set('wl',wl.join(','));const l=d.createElement('link');l.rel='preload';l.as='fetch';l.crossOrigin='anonymous';l.href=u.href;d.head.prepend(l)})(window,document,'4e8641f9-b859-4033-aad1-93a7f2771f87',[])</script>
  <script src="https://airport.landinghub.cloud/dispatcher/latest/index.js?id=4e8641f9-b859-4033-aad1-93a7f2771f87" data-landinghub="dispatcher-tag" referrerpolicy="strict-origin"></script>
  <!-- End of LandingHub Dispatcher -->
  
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- OGP -->
  <?php $current_url =  get_pagenum_link(get_query_var('page')); ?>

  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $current_url ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/ogp.jpg">
  <meta property="og:site_name" content="リエートクリニック｜横浜・名古屋での医療痩身・メディカルダイエット">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">

  <!-- Google Tag Manager -->
  <script defer="">
    var isExec = false;

    function gtm(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    };
    document.addEventListener('DOMContentLoaded', function() {
      window.addEventListener("scroll", function() {
        if (!isExec) {
          isExec = true;
          gtm(window, document, 'script', 'dataLayer', 'GTM-M3J28DV');
        }
      });
    }, false);
    setTimeout(() => {
      if (!isExec) {
        gtm(window, document, 'script', 'dataLayer', 'GTM-M3J28DV');
      }
    }, 3500);
  </script>
  <!-- End Google Tag Manager -->

  <!-- 構造化データ -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "website",
      "name": "リエートクリニック",
      "inLanguage": "jp",
      "publisher": {
        "@type": "Organization",
        "name": "スペーム株式会社",
        "logo": {
          "@type": "ImageObject",
          "url": "<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_orange.png"
        }
      },
      "copyrightYear": "2024-02-02T12:00:00+0000",
      "headline": "トップページ",
      "description": "<?php bloginfo('description'); ?>",
      "url": "  <?php echo $current_url; ?>"
    }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3J28DV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php wp_body_open(); ?>

  <!-- PC header -->
  <header class="l-header _top">
    <div class="l-header__inner">
      <div class="l-header__body">
        <div class="l-header__left">
          <h1 class="l-header__logo">
            <a href="/">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_white.png" alt="Lieto Clinic">
            </a>
          </h1>
          <div class="l-header__clinic">
            <?php
            $args = array(
              'post_type' => 'clinic',
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="l-header__clinicName"><a href="<?php the_permalink(); ?>"><?php the_field("clinic_name"); ?>院</a></div>
              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </div>
        </div>

        <nav class="l-header__nav">
          <ul class="l-header__topList">
            <li class="l-header__topItem"><a href="/news/">新着情報</a></li>
            <?php
            $query = new WP_Query(
              array(
                'post_type' => 'post',
                'post_status' => 'publish',
              )
            );
            ?>
            <?php if ($query->have_posts()) : ?>
              <li class="l-header__topItem"><a href="/column/">コラム</a></li>
            <?php endif;
            wp_reset_postdata(); ?>
            <li class="l-header__topItem"><a href="/recruit/">採用情報</a></li>
          </ul>
          <ul class="l-header__bottomList">
            <li class="l-header__bottomItem"><a href="/greeting/">担当医師挨拶</a></li>
            <li class="l-header__bottomItem"><a href="/about/">当院について</a></li>
            <li class="l-header__bottomItem"><a href="/flow/">施術の流れ</a></li>
            <!-- <li class="l-header__bottomItem"><a href="/menu/">施術一覧</a></li> -->
            <li class="l-header__bottomItem has-child">
              <a href="javascript:void(0)">施術一覧&thinsp;▼</a>
              <div class="l-header__subnav">
                <ul class="l-header__sublist">
                  <li class="l-header__subItem"><a href="/menu/stimsure/">医療痩身機器<span>StimSure-スティムシュアー</span></a></li>
                  <li class="l-header__subItem"><a href="/menu/clatuu-a/">医療脂肪冷却機器<span>CLATUU α -クラツーアルファ-</span></a></li>
                  <li class="l-header__subItem"><a href="/menu/hifu/">医療HIFU<span>ULTRAcel [zíː] -ウルトラセル ジィー-</span></a></li>
                  <li class="l-header__subItem"><a href="/menu/exosome/">細胞レベルで美しく<span>エクソソーム点滴</span></a></li>

                  <li class="l-header__subItem"><a href="/menu/fat-dissolving-injection/">脂肪溶解注射</a></li>
                  <li class="l-header__subItem"><a href="/menu/glp-1/">GLP-1</a></li>
                  <li class="l-header__subItem"><a href="/menu/beauty-drip/">ダイエット美容点滴</a></li>
                  <li class="l-header__subItem"><a href="/menu/original-supplement/">オリジナルサプリメント</a></li>
                  <li class="l-header__subItem"><a href="/menu/original-protein/">オリジナルプロテイン</a></li>
                  <li class="l-header__subItem"><a href="/menu/diet-supplement/">ダイエット薬</a></li>
                  <li class="l-header__subItem"><a href="/menu/guidance/">食事・栄養指導</a></li>
                  <li class="l-header__subItem"><a href="/menu/">施術一覧をみる</a></li>
                </ul>
              </div>
            </li>
            <li class="l-header__bottomItem"><a href="/case/">当院の症例</a></li>
            <li class="l-header__bottomItem"><a href="/monitor/">モニター募集</a></li>
            <li class="l-header__bottomItem"><a href="/minor/">未成年者の方へ</a></li>
            <li class="l-header__bottomItem"><a href="/faq/">よくある質問</a></li>
            <li class="l-header__bottomItem"><a href="/clinic/">クリニック一覧</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- SP header -->
  <header class="l-spHeader">
    <div class="l-spHeader__inner">
      <div class="l-spHeader__top">
        <div class="l-spHeader__logo">
          <a href="/">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_sp_orange.png' alt='Lieto Clinic'>
          </a>
        </div>

        <div class="c-hamburger" id="js-hamburger">
          <div class="c-hamburger__text _menu">MENU</div>
          <div class="c-hamburger__text _close">CLOSE</div>
          <div class="c-hamburger__lines">
            <span></span><span></span>
          </div>
        </div>
      </div>

      <nav class="l-spHeader__nav">
        <ul class="l-spHeader__list">
          <li class="l-spHeader__item"><a href="/greeting/">担当医師挨拶</a></li>
          <li class="l-spHeader__item"><a href="/about/">当院について</a></li>
          <li class="l-spHeader__item"><a href="/flow/">施術の流れ</a></li>
          <li class="l-spHeader__item has-child">
            <div href="javascript:void(0)" class="js-accordion">
              施術一覧
              <span class="l-spHeader__itemOpen"></span>
            </div>
            <ul class="l-spHeader__sublist">
              <li class="l-spHeader__subitem"><a href="/menu/stimsure/">医療痩身機器<span>StimSure-スティムシュアー</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/clatuu-a/">医療脂肪冷却機器<span>CLATUU α -クラツーアルファ-</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/hifu/">医療HIFU<span>ULTRAcel [zíː] -ウルトラセル ジィー-</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/fat-dissolving-injection/">脂肪溶解注射</a></li>

              <li class="l-spHeader__subitem"><a href="/menu/glp-1/">GLP-1</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/beauty-drip/">ダイエット美容点滴</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/original-supplement/">オリジナルサプリメント</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/original-protein/">オリジナルプロテイン</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/diet-supplement/">ダイエット薬</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/guidance/">食事・栄養指導</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/exosome/">細胞レベルで美しく<span>エクソソーム点滴</span></a></li>
            </ul>
          </li>
          <li class="l-spHeader__item"><a href="/case/">当院の症例</a></li>
          <li class="l-spHeader__item"><a href="/monitor/">モニター募集</a></li>
          <li class="l-spHeader__item"><a href="/minor/">未成年者の方へ</a></li>
          <li class="l-spHeader__item"><a href="/faq/">よくある質問</a></li>
          <li class="l-spHeader__item"><a href="/clinic/">クリニック一覧</a></li>
        </ul>

        <div class="l-spHeader__btn">
          <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=a5ram6628mb28d3d" class="c-btn _orange"><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png' alt="icon">無料カウンセリング予約</a>
        </div>

        <div class="l-spHeader__tel">
          <ul class="l-spHeader__telList">
            <?php
            $args = array(
              'post_type' => 'clinic',
              'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li class="l-spHeader__telItem">
                  <div class="l-spHeader__itemTitle"><?php the_field("clinic_name") ?>院</div>
                  <a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>" class="l-spHeader__itemTel">
                    <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png' alt="icon">
                    <div class="l-spHeader__itemNum"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></div>
                  </a>
                  <div class="l-spHeader__itemTime">
                    <?php echo get_field('clinic_info')['clinic_info_time']; ?>
                  </div>
                </li>

              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- fixedCta_PC -->
  <div class="c-fixedCta">
    <ul class="c-fixedCta__List">
      <li class="c-fixedCta__Item c-fixedCta__Item--tel">
        <div href="javascript:void(0)" class="js-modal-open">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png" alt="お電話">
          <div class="c-fixedCta__ItemText">お電話からの<br>ご予約はこちら</div>
        </div>
      </li>

      <li class="c-fixedCta__Item c-fixedCta__Item--counseling">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*cn51jo*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png" alt="無料カウンセリング">
          <div class="c-fixedCta__ItemText">無料カウンセリング予約</div>
        </a>
      </li>
    </ul>
  </div>


  <!-- fixedCta_SP -->
  <div class="c-fixedCtaSp" style="bottom: 0;">
    <!--
    <ul class="c-fixedCtaSp__list">
      <li class="c-fixedCtaSp__item">
        <a href="javascript:void(0)" class="c-fixedCtaSp__itemTelLink c-fixedCtaSp__itemTelLink--tel js-modal-open">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_dark.png" alt="icon">
          <span class="c-fixedCtaSp__itemCounseling--large">お電話からの<br>ご予約はこちら</span>
        </a>
      </li>
      <li class="c-fixedCtaSp__item">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*1gvdhfb*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5" class="c-fixedCtaSp__itemTelLink c-fixedCtaSp__itemTelLink--counseling">
          <span class="c-fixedCtaSp__itemCounseling--small">
            <span class="_num">3</span>分でWeb予約!<span class="_num">24</span>時間受付中!
          </span>
          <span class="c-fixedCtaSp__itemCounseling--large">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png" alt="icon">
            無料カウンセリング予約
          </span>
        </a>
      </li>
    </ul>
    -->
    <div class="c-fixedCtaSp__fix-banner">
      <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" class="">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/toLPbtn.png" alt="無料カウンセリングに申し込む">
      </a>
    </div>
  </div>

  <!-- modal -->
  <div id="modal" class="p-modal">
    <div class="p-modal__bg js-modal-close"></div>
    <div class="p-modal__area">
      <ul class="p-modal__list">

        <li class="p-modal__item">
          <div class="p-modal__itemTitle">全院共通</div>
          <a href="tel:<?php echo get_field('toll-free', 94); ?>" class="p-modal__itemTel">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png' alt="icon">
            <div class="p-modal__itemNum"><?php echo get_field('toll-free', 94); ?></div>
          </a>
          <div class="p-modal__itemTime">
            月曜日〜日曜日 : 10:00〜20:00
          </div>
        </li>

      </ul>

      <div class="p-modal__closeBtn js-modal-close">
        <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_closebtn.png' alt="close">
      </div>
    </div>
  </div>
