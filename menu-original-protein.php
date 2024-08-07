<?php /* Template Name: オリジナルプロテイン */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">

    <div class="p-singleMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">PROTEIN</div>
        <h1 class="c-pageTitle__ja">オリジナルプロテイン</h2>
      </div>
    </div>

    <div class="p-singleMenu__body">
      <figure class="p-singleMenu__mainimg">
        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/protein_main.png" alt="プロテイン">
      </figure>

      <!-- とは -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">オリジナルプロテイン 「Liend」とは</h2>
        <div class="p-singleMenu__box">
          <figure class="p-singleMenu__figure _protein">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/protein_01.png" alt="オリジナルプロテイン 「Liend」とは">
          </figure>
          <div class="p-singleMenu__text _protein">
            「理想の身体を実現」「無理なく継続できるダイエットをサポート」をテーマに、当院オリジナルのプロテインを開発しました。<br>
            <br>
            通常の筋トレ用プロテインとは異なり、ダイエットに特化した様々な効果が期待できます。<br>
            詳しくはクリニックにてお尋ねいただくか、フォームよりお問い合わせください。
          </div>
        </div>
      </div>

      <!-- 特徴 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title _nols _nop">「Liend」の成分と期待できる効果</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              酵素により腹持ち持続で置き換えダイエットに
            </div>
            <p class="p-singleMenu__subBoxText">
              Liendは酵母を含んでおり、食後の満腹感が持続します。<br>
              約5〜6時間腹持ちが持続するこのプロテインは<span>置き換えダイエットに最適</span>であり、<span>無理なく継続してカロリー制限が可能</span>です。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              コラーゲンで肌のツヤUP
            </div>
            <p class="p-singleMenu__subBoxText">
              Liendに含まれるコラーゲンは、肌のハリや弾力性をサポートして<span>肌ツヤを向上</span>を期待できます。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              11種類のビタミン・ミネラル
            </div>
            <p class="p-singleMenu__subBoxText">
              11種類のビタミンとミネラルをバランスよく配合しています。<br>これにより、<span>食事から得るべき栄養素を補完し、健康的な食生活をサポート</span>します。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              低カロリー＆低糖質
            </div>
            <p class="p-singleMenu__subBoxText">
              Liendは低カロリーで低糖質なため、ダイエットや体重管理に適しています。<br>
              <span>無理なくカロリーコントロールをしながら、栄養を摂る</span>ことができます。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              良質なタンパク質で筋肉量UPに貢献
            </div>
            <p class="p-singleMenu__subBoxText">
              上記の効能を含みつつ、一般的なプロテインのように<span>筋肉の成長と修復に不可欠なたんぱく質を十分に配合</span>しています。
            </p>
          </div>
        </div>

      </div>

      <!-- オリジナルプロテインのよくある質問 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title _nols">オリジナルプロテインのよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'original-protein'); ?>
          </div>
        </div>
      </div>

      <!-- 関連コラム -->
      <?php get_template_part('template-parts/part', 'menu-related-column'); ?>

      <!-- CTA -->
      <div class="p-singleMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
