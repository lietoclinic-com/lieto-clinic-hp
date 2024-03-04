<?php
//----------------------------------------------------
// Custom Block - 引用ボックス -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<div class="c-quoteBox">

  <div class="c-quoteBox__text">
    <?php block_field('quote-text'); ?>
  </div>
  <dl class="c-quoteBox__siteList">
    <dt class="c-quoteBox__siteTitle">引用元：</dt>
    <dd class="c-quoteBox__siteDate">
      <a class="c-quoteBox__siteLink" href="<?php esc_url( block_field('quote-url') ); ?>" target="_blank" rel="noopener noreferrer"><?php block_field('quote-site'); ?></a>
    </dd>
  </dl>
  
</div>
