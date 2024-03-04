<?php
//----------------------------------------------------
// Custom Block - クエッションボックス -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<div class="c-questionBox">
  <h4 class="c-questionBox__title">
    <?php block_field('question-heading'); ?>
  </h4>
  <div class="c-questionBox__text">
    <?php block_field('question-text'); ?>
  </div>
</div>
