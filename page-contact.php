<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageContact">

    <div class="p-pageContact__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">CONTACT</div>
        <h1 class="c-pageTitle__ja">お問い合わせ</h2>
      </div>
    </div>

    <div class="p-pageContact__body l-min-inner">
      <div class="p-pageContact__form p-form">
        <?php the_content(); ?>
      </div>
    </div>



  </section>

</main>

<?php get_footer();
