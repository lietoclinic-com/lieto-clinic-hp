<?php /* Template Name: オリジナルサプリメント */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">

    <div class="p-singleMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">SUPPLEMENTS</div>
        <h1 class="c-pageTitle__ja">オリジナルサプリメント</h2>
      </div>
    </div>

    <div class="p-singleMenu__body">
      <figure class="p-singleMenu__mainimg">
        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/supplements_main.png" alt="サプリメント">
      </figure>

      <!-- とは -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">オリジナルサプリメント 「LALOC」とは</h2>
        <div class="p-singleMenu__box">
          <figure class="p-singleMenu__figure _supplements">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/supplements_01.png" alt="オリジナルサプリメント 「LALOC」とは">
          </figure>
          <div class="p-singleMenu__text _supplements">
            「厳選された次世代サプリメント」をテーマに、当院オリジナルのサプリメントを開発しました。<br>
            適切な運動と食事管理を組み合わせることで、脂肪燃焼＆痩せ体質を実現いたします。<br>
            <br>
            市販のサプリメントとは異なり、ダイエットに特化した様々な効果が期待できます。<br>
            詳しくはクリニックにてお尋ねいただくか、フォームよりお問い合わせください。
          </div>
        </div>
      </div>

      <!-- 特徴 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">「LALOC」の成分と期待できる効果</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              乳酸菌2000億・ビフィズス菌500億配合
            </div>
            <p class="p-singleMenu__subBoxText">
              LALOCには乳酸菌とビフィズス菌が豊富に含まれております。<br>
              ダイエットに密接に関わりのある腸内環境を整え、<span>健康的な痩せ体質へのサポート</span>をいたします。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              免疫力向上
            </div>
            <p class="p-singleMenu__subBoxText">
              サプリメントに含まれる栄養素が、免疫システムを強化し、ウイルスや細菌に対する抵抗力を高めます。<br>
              無理なダイエットで落ちた免疫力を取り戻し<span>健康的なダイエットをサポート</span>いたします。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              便通改善、整腸作用
            </div>
            <p class="p-singleMenu__subBoxText">
              サプリに含まれる食物繊維と腸内の善玉菌が、<span>腸内環境を整え、便通を改善</span>します。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              食後中性脂肪・食後血糖の上昇抑制作用
            </div>
            <p class="p-singleMenu__subBoxText">
              普段の食事と一緒に服用することで、中性脂肪や血糖の上昇を抑制し、<span>血糖コントロールを支援</span>します。
            </p>
          </div>
        </div>

      </div>

      <!-- オリジナルサプリメントのよくある質問 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title _nols">オリジナルサプリメントのよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'original-supplement'); ?>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="p-singleMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
