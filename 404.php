<?php get_header(); ?>

<main class="l-main">

  <section class="p-404">

    <div class="p-404__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">404 NOT FOUND</div>
        <h1 class="c-pageTitle__ja">お探しのページが見つかりません</h2>
      </div>
    </div>

    <div class="p-404__body l-min-inner">
      <div class="p-404__title">お探しのページが<br class="_sp">見つかりませんでした</div>
      <div class="p-404__box">
        <p class="p-404__text">
          申し訳ございませんが、お探しのページは見つかりませんでした。<br class="_overTab">
          ページが移動または削除されたか、URLの入力間違いの可能性がございます。
        </p>
        <p class="p-404__message">このページは5秒後に<br class="_sp">TOPページに遷移します。</p>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
