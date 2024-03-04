<?php
//----------------------------------------------------
// Custom Block - ボタン -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------

$target = block_value('button-target');
if($target) {
  $class = 'target="_blank"';
}

?>
<div class="c-linkButtonWrap">
  <div class="c-linkButton">
    <a href="<?php block_field('button-url'); ?>" class="c-btn" <?php echo $class; ?>><?php block_field('button-text'); ?></a>
  </div>
</div>
