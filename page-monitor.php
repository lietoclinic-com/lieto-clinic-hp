<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageMonitor">
    <div class="p-pageMonitor__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">MONITOR</div>
        <h1 class="c-pageTitle__ja">モニター募集</h2>
      </div>
    </div>

    <div class="p-pageMonitor__body">
      <section class="p-pageMonitorRecruit">
        <div class="p-pageMonitorRecruit__inner l-inner">
          <h2 class="p-pageMonitorRecruit__title">医療痩身プログラム<br class="_sp">モニター募集中！</h2>
          <div class="p-pageMonitorRecruit__content">
            <div class="p-pageMonitorRecruit__figure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_01.png" alt="医療痩身プログラムモニター募集中">
            </div>
            <p class="p-pageMonitorRecruit__text">
              当院では、最新の医療痩身プログラムのモニターを募集しております。<br>
              <br>
              モニターとしてご参加いただくと、<br class="_sp"><span class="_pink">最大<span class="_large">80％OFF</span></span>の<br class="_overPc">特別なモニターキャンペーンを受けることができます。<br class="_overTab">この機会をお見逃しなく、あなたの美と健康に一歩近づきましょう。<br>
              <br>
              <span class="_underline">詳しくはお問い合わせください。</span>
            </p>
          </div>
          <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p" class="p-pageMonitorRecruit__btn c-btn">
            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_mail.png" alt="icon">
            お問い合わせはこちら</a>
        </div>
      </section>

      <section class="p-pageMonitorCampaige">
        <div class="p-pageMonitorCampaige__inner l-inner">
          <div class="p-pageMonitorCampaige__head">
            <h2 class="p-pageMonitorCampaige__title">モニターキャンペーンの特典</h2>
          </div>
          <ul class="p-pageMonitorCampaige__list">
            <li class="p-pageMonitorCampaige__item">
              <figure class="p-pageMonitorCampaige__figure">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_campaign_01.png" alt="料金が最大80％OFF!">
              </figure>
              <p class="p-pageMonitorCampaige__itemTitle">
                <span class="_row">料金が最大<span class="_large">80％</span>OFF!
              </p></span>
            </li>

            <li class="p-pageMonitorCampaige__item">
              <figure class="p-pageMonitorCampaige__figure">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_campaign_02.png" alt="医師監修の医療痩身プログラム">
              </figure>
              <p class="p-pageMonitorCampaige__itemTitle">医師監修の<br>医療痩身プログラム</p>
            </li>

            <li class="p-pageMonitorCampaige__item">
              <figure class="p-pageMonitorCampaige__figure">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/monitor/monitor_campaign_03.png" alt="医師による個別カウンセリング">
              </figure>
              <p class="p-pageMonitorCampaige__itemTitle">医師による<br>個別カウンセリング</p>
            </li>
          </ul>
        </div>
      </section>


      <!-- CTA -->
      <div class="p-pageMonitor__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer();
