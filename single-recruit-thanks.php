<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageThanks">

    <div class="p-pageThanks__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">COMPLETED</div>
        <h1 class="c-pageTitle__ja">採用応募完了</h2>
      </div>
    </div>

    <div class="p-pageThanks__body l-min-inner">
      <div class="p-pageThanks__message">採用へのご応募ありがとうございます！</div>

      <div class="p-pageThanks__box">
        <p class="p-pageThanks__boxText">
          後日担当者より、ご連絡を差し上げます。今しばらくお待ちください。
        </p>
        <p class="p-pageThanks__boxText">
          採用関係のご連絡はご指定のメールアドレスまたはお電話にてご連絡を差し上げます。<br>
          受信エラーでご連絡が不可能な場合、お電話にてご連絡を差し上げる場合がございますので、予めご了承ください。
        </p>
        <p class="p-pageThanks__boxText">
          迷惑メール対策などでドメイン指定をされている場合、メールが届かないことがありますので、
          誠にお手数ですが、<a href="/privacy-policy/">info@lietoclinic.com</a>を必ず受信するように設定をお願い致します。
        </p>
      </div>

      <a href="/" class="p-pageThanks__btn c-btn c-btnReturn">トップにもどる</a>
    </div>

  </section>

</main>

<?php get_footer();
