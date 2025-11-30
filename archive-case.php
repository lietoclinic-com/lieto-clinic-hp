<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageCase">

    <div class="p-pageCase__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">CASE</div>
        <h1 class="c-pageTitle__ja">当院の症例</h2>
      </div>
    </div>

    <div class="p-pageCase__body">
      <div class="l-inner">
        <?php get_template_part('template-parts/all-case'); ?>
      </div>
    </div>

    <!-- CTA -->
    <div class="p-pageCase__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
