<?php /* Template Name: 食事・栄養指導 */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">

    <div class="p-singleMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">NUTRITION</div>
        <h1 class="c-pageTitle__ja">食事・栄養指導</h2>
      </div>
    </div>

    <div class="p-singleMenu__body">
      <figure class="p-singleMenu__mainimg">
        <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_main.png" alt="指導">
      </figure>

      <!-- とは -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">食事・栄養指導とは</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_01.png" alt="食事・栄養指導とは">
            </figure>
            <div class="p-singleMenu__flexText">
              昨今のインターネットでは誤った情報が多く、その結果努力しても効果が出なかったり、結果が出づらく継続できなかった方が多くいらっしゃいます。<br>
              <br>
              当院では、知識のある医師が正しい方法での食事・栄養管理を指導し、より効果的なダイエットを手助けいたします。
            </div>
          </div>
        </div>
      </div>

      <!-- こんなお悩みに -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">こんなお悩みに</h2>
        <div class="p-singleMenu__box">
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_02.png" alt="こんなお悩みに">
            </figure>
            <ul class="p-singleMenu__flexList">
              <li class="p-singleMenu__flexItem">衝動的なドカ食いをしてしまう</li>
              <li class="p-singleMenu__flexItem">しっかり食べながら健康的に痩せたい</li>
              <li class="p-singleMenu__flexItem">正しい食事習慣を身に付けたい</li>
              <li class="p-singleMenu__flexItem">ダイエットが原因で体調を崩したくない</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- なぜ食事と栄養指導が重要なのか？ -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">なぜ食事と栄養指導が重要なのか？</h2>
        <div class="p-singleMenu__box">

          <p class="p-singleMenu__text _nutrition">
            食事は体重、健康、エネルギー、代謝に密接に関連しており、ダイエットの成功において重要な要素になります。
          </p>
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_03.png" alt="ひとりひとりに合わせたオーダーメイドな食事プラン">
            </figure>
            <div class="p-singleMenu__flexText">
              <div class="p-singleMenu__subtitle">ひとりひとりに合わせた<br>オーダーメイドな食事プラン</div>
              <p class="p-singleMenu__subText">
                一般的な食事アドバイスでは個人のニーズに合わせたプランを提供できません。<br>
                <br>
                当院の食事指導では、綿密な検査で体質や生活習慣を把握したうえでオーダーメイドのプランをご提案させていただきます。
              </p>
            </div>
          </div>
        </div>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_04.png" alt="栄養不足の解消">
            </figure>
            <div class="p-singleMenu__flexText">
              <div class="p-singleMenu__subtitle">栄養不足の解消</div>
              <p class="p-singleMenu__subText">
                適切な栄養摂取は栄養不足を解消し、健康的な体重減少をサポートします。<br>
                <br>
                また、食事内容に応じてプロテインやサプリメントでの補給を推奨する場合もございます。
              </p>
            </div>
          </div>
        </div>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__flex">
            <figure class="p-singleMenu__flexFigure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/nutrition_05.png" alt="血糖管理と糖尿病予防">
            </figure>

            <div class="p-singleMenu__flexText">
              <div class="p-singleMenu__subtitle">血糖管理と糖尿病予防</div>
              <p class="p-singleMenu__subText">
                食事は血糖値の管理に大きな影響を与えます。<br>
                <br>
                適切な食事管理をすることは血糖値のコントロールに繋がり、糖尿病予防や管理に役立ちます。
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 当院の食事・栄養指導について -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">当院の食事・栄養指導について</h2>
        <div class="p-singleMenu__box">
          <p class="p-singleMenu__text _nutrition">
            食事・栄養指導の内容はお客様により異なりますが、こちらでは指導内容の一例をご紹介いたします。
          </p>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              カロリー管理
            </div>
            <p class="p-singleMenu__subBoxText">
              日々のカロリー摂取を調整し、<span>体重目標に合わせたカロリー制限を提供</span>します。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              栄養バランスの管理・食事プランの提案
            </div>
            <p class="p-singleMenu__subBoxText">
              タンパク質、炭水化物、脂質などの<span>栄養素のバランスを考慮した食事プラン</span>が提供されます。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              食事タイミング指導
            </div>
            <p class="p-singleMenu__subBoxText">
              <span>運動と調和した食事のタイミングや、日中の食事の分割など</span>がアドバイスされます。
            </p>
          </div>

          <div class="p-singleMenu__subBox">
            <div class="p-singleMenu__subBoxTitle">
              食事記録
            </div>
            <p class="p-singleMenu__subBoxText">
              お客様は食事摂取の記録をつけ、担当の栄養士と共有することで<span>進捗をモニタリングし、適切な調整を行う</span>ことができます。
            </p>
          </div>
        </div>
      </div>

      <!-- 食事・栄養指導のよくある質問 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title _nols">食事・栄養指導のよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'guidance'); ?>
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
