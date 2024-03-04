<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageThanks">

    <div class="p-pageThanks__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <?php
          $page_id = get_the_ID(); // 現在のページのIDを取得
          $ancestors = get_post_ancestors($page_id); // 25:問合わせ 21:予約 213:採用について
        ?>
        <div class="c-pageTitle__en">THANKS</div>
        <?php if (in_array(25, $ancestors)): ?>
          <h1 class="c-pageTitle__ja">お問い合わせ完了</h2>
        <?php elseif (in_array(21, $ancestors)): ?>
          <h1 class="c-pageTitle__ja">予約はまだ完了しておりません</h2>
        <?php elseif (in_array(213, $ancestors)): ?>
          <h1 class="c-pageTitle__ja">採用応募完了</h2>
        <?php endif; ?>
      </div>
    </div>

    <div class="p-pageThanks__body l-min-inner">
    <?php if (in_array(25, $ancestors)): ?>
      <div class="p-pageThanks__message">お問い合せありがとうございます</div>
    <?php elseif (in_array(21, $ancestors)): ?>
      <div class="p-pageThanks__message">日程確定をもって、<br class="_sp">ご予約完了となります。</div>
    <?php elseif (in_array(213, $ancestors)): ?>
      <div class="p-pageThanks__message">採用へのご応募<br class="_sp">ありがとうございます！</div>
    <?php endif; ?>
      
      <div class="p-pageThanks__box">
        <p class="p-pageThanks__boxText">
          後日担当者より、ご連絡を差し上げます。今しばらくお待ちください。
          <?php if (in_array(21, $ancestors)): ?>
          <br>メールにてカウンセリングの日程をご提示しますので、日時の確定をもって、ご予約完了となります。
          <?php endif; ?>
        </p>
        <p class="p-pageThanks__boxText">
            <?php if (in_array(213, $ancestors)): // 採用であれば ?>
              採用関係のご連絡はご指定のメールアドレスまたはお電話にてご連絡を差し上げます。<br>
            <?php else: // その他であれば ?>
              ご予約確定のご連絡はご指定のメールアドレスにご連絡を差し上げます。<br>
            <?php endif; ?>
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
