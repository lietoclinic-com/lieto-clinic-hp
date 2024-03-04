<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageReservation">

    <div class="p-pageReservation__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">RESERVATION</div>
        <h1 class="c-pageTitle__ja">無料カウンセリング予約</h2>
      </div>
    </div>

    <div class="p-pageReservation__body l-min-inner">
      <div class="p-pageReservation__form p-form">
        <?php the_content(); ?>
      </div>
    </div>

  </section>

</main>

<?php get_footer();


