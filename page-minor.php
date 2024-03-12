<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMinor">
    <div class="p-pageMinor__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MINOR</div>
        <h1 class="c-pageTitle__ja">未成年者の方へ</h2>
      </div>
    </div>

    <div class="p-pageMinor__body">
      <p class="p-pageMinor__message l-inner">
        未成年のお客様におかれましては、<br class="_overTab">医療痩身プログラムをお受けいただくにあたり親権者様のご承諾が必要です。
      </p>

      <section class="p-pageMinorAge">
        <div class="p-pageMinorAge__inner l-inner">
          <div class="p-pageMinorAge__head p-pageMinorHead">
            <h2 class="p-pageMinorHead__title">18歳未満のお客様</h2>
          </div>
          <p class="p-pageMinorAge__text">
            カウンセリング・医療痩身プログラムをお受けいただくにあたり、<br>
            初回カウンセリング時に親権者様の同意書のご持参が必要です。<br>
            <br>
            ご自宅で印刷し、親権者様の直筆にて「必要事項・ご署名」をいただき、<br>
            初回カウンセリング時にご持参いただきますとご案内がスムーズです。
          </p>

          <!-- <a href="http://lietoclinic.com/wp-content/uploads/2023/12/親権者同意書.pdf" class="p-pageMinorAge__btn" download="親権者同意書" target="_blank"> -->
          <a href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/minor/親権者同意書.pdf" class="p-pageMinorAge__btn" download="親権者同意書" target="_blank">
            親権者同意書の<br class="_sp">ダウンロードはこちら
          </a>
        </div>
      </section>

      <div class="p-pageMinorDocument">
        <div class="p-pageMinorDocument__inner l-inner">
          <div class="p-pageMinorDocument__head p-pageMinorHead">
            <h2 class="p-pageMinorHead__title">同意書の記入例</h2>
          </div>
          <figure class="p-pageMinorDocument__figure">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/minor/agreement_form.png" alt="親権者同意書">
          </figure>
        </div>
      </div>

      <!-- CTA -->
      <div class="p-pageMinor__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
