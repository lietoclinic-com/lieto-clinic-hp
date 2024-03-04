<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageFaq">

    <div class="p-pageFaq__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">FAQ</div>
        <h1 class="c-pageTitle__ja">よくあるご質問</h1>
      </div>
    </div>

    <div class="p-pageFaq__body" itemscope itemtype="https://schema.org/FAQPage">
      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">当院について</h2>
          </div>

          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'clinic'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">スティムシュアーについて</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'stimsure'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">クラツーアルファについて</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'clatuu-a'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">医療HIFU ULTRAcel [zíː] について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'hifu'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">脂肪溶解注射について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'fat-dissolving-injection'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">GLP-1について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'glp-1'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">ダイエット美容点滴について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'beauty-drip'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">オリジナルサプリメントについて</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'original-supplement'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">オリジナルプロテインについて</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'original-protein'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">ダイエット薬について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'diet-supplement'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">食事・栄養指導について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'guidance'); ?>
          </div>
        </div>
      </div>

      <div class="p-pageFaq__area">
        <div class="p-pageFaq__areaInner">
          <div class="p-pageFaq__areaHead">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/assets/img/icon/icon_faq.png'>
            <h2 class="p-pageFaq__areaTitle">エクソソーム点滴について</h2>
          </div>
          <div class="p-pageFaq__content p-faq">
            <?php get_template_part('template-parts/faq/part', 'exosome'); ?>
          </div>
        </div>
      </div>

    </div>

  </section>

</main>

<?php get_footer();
