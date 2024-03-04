<?php
//----------------------------------------------------
// Custom Block - リストボックス -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<div class="c-listBox">
  <h4 class="c-listBox__title">
    <?php block_field('list-heading'); ?>
  </h4>
  <div class="c-listBox__text">
    <?php block_field('list-text'); ?>
  </div>
</div>
