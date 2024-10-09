<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageFlow">
    <div class="p-pageFlow__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">FLOW</div>
        <h1 class="c-pageTitle__ja">施術の流れ</h2>
      </div>
    </div>

    <div class="p-pageFlow__body">

      <!-- ご予約から施術の流れ -->
      <section class="p-pageFlow__main">
        <div class="p-pageFlow__mainInner l-inner">

          <div class="p-pageFlow__mainArea">
            <div class="p-pageFlow__mainHead c-secTitle">
              <h2 class="c-secTitle__ja">ご予約から施術の流れ</h2>
            </div>

            <?php get_template_part('template-parts/part-flow'); ?>
          </div>

        </div>
      </section>

      <!-- CTA -->
      <div class="p-pageFlow__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
