<?php /* Template Name: ダイエット薬 */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">

    <div class="p-singleMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">DIET PILL</div>
        <h1 class="c-pageTitle__ja">ダイエット薬</h2>
      </div>
    </div>

    <div class="p-singleMenu__body">
      <figure class="p-singleMenu__mainimg">
        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/diet-supplement_main.png" alt="薬">
      </figure>

      <!-- 個別に合わせたダイエット薬をご用意 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">個別に合わせたダイエット薬をご用意</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/diet-supplement_01.png" alt="医療HIFUとは">
            </figure>
            <div class="p-singleMenu__flexText">
              当院では、お客様一人ひとりの状態や目標に合わせて、適切なダイエット薬をご提供いたします。<br>
              <br>
              ダイエット薬の種類や使用方法は個人の体質や健康状態によって異なります。<br>
              そのため、初めてご来院いただいた際には、医師が詳細な問診を行い、体調や健康情報を確認します。<br>
              <br>
              これにより、最適なダイエット薬を選定し、安全に利用できるように調整いたします。
            </div>
          </div>
        </div>
      </div>

      <!-- 適切な使用法のアドバイス -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">適切な使用法のアドバイス</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__text">
            ダイエット薬の正しい使用法は、その効果を最大限に引き出し、健康リスクを最小限に抑えるために非常に重要です。<br>
            <br>
            医師とカウンセラー、栄養士が連携し、処方したダイエット薬の使用法について詳細なアドバイスを行います。<br>
            これには、適切な服用タイミング、用量、副作用の監視などが含まれます。
          </div>
        </div>
      </div>

      <!-- 効果の経過観察と調整 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">効果の経過観察と調整</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__text">
            ダイエット薬の効果や体調の変化を定期的にモニタリングし、必要に応じて調整を行います。<br>
            <br>
            お客様の健康状態やダイエットの進捗に合わせて、ダイエット薬の種類や使用量を調整することがあります。
          </div>
        </div>
      </div>

      <!-- よくある質問 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">ダイエット薬のよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'diet-supplement'); ?>
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
