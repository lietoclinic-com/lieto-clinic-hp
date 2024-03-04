<?php
//----------------------------------------------------
// Custom Block - アテンションボックス -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<div class="c-attentionBox">
  <h4 class="c-attentionBox__title">
    <?php block_field('attention-heading'); ?>
  </h4>
  <div class="c-attentionBox__text">
    <?php block_field('attention-text'); ?>
  </div>
</div>
