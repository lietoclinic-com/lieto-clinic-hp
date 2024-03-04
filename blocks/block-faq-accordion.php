<?php
//----------------------------------------------------
// Custom Block - FAQアコーディオン -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<?php 
  // if($_SESSION['faq'] == 0):
?>
  <!-- <div class="p-faq__boxWrap" itemscope itemtype="https://schema.org/FAQPage"> -->
<?php 
  // endif;
  // $_SESSION['faq']++;
?>

<div class="p-faq__box c-faq-accordion js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

  <div class="p-faq__question">
    <div class="p-faq__questionDesc">
      <div class="p-faq__questionMark">Q</div>
      <span class="p-faq__questionText" itemprop="name">
        <?php block_field('faq-question'); ?>
      </span>
    </div>
    <span class="p-faq__questionOpen"></span>
  </div>

  <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="p-faq__answerDesc">
      <div class="p-faq__answerMark">A</div>
      <span class="p-faq__answerText" itemprop="text">
        <?php block_field('faq-answer'); ?>
      </span>
    </div>
  </div>
</div>
