<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageReservation">

    <div class="p-pageReservation__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">ENTRY FORM</div>
        <h1 class="c-pageTitle__ja">採用応募フォーム</h2>
      </div>
    </div>

    <div class="p-pageReservation__body l-min-inner">
      <div class="p-pageReservation__form p-form">
        <?php the_content(); ?>
      </div>
    </div>

  </section>
</main>

<script>
  const upload = document.getElementById("file_upload");
  upload.addEventListener("change", function() {
    uploadFile();
  });
  function uploadFile() {
    const file = upload.files[0];
    document.querySelector(".p-form__inputFileTitle").innerHTML = `ファイル名：${file.name}`;
  }
</script>

<?php get_footer();


