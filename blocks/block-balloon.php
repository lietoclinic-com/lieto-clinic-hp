
<?php
//----------------------------------------------------
// Custom Block - 吹き出し -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------

$type = block_value('image-type');
$img_src = '';

switch ($type) {
  case 'type1':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  case 'type2':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  case 'type3':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  case 'type4':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  case 'type5':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  case 'type6':
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
    break;
  default:
    $img_src = esc_url(get_theme_file_uri()) . '/dist/assets/img/common/balloon_01.png';
}
?>

<div class="c-balloon c-balloon--<?php echo block_value('image-position'); ?>">
  <figure class="c-balloon__image">
    <?php echo wp_get_attachment_image(block_value('image')); ?>
  </figure>
  <div class="c-balloon__textWrapper c-balloon__textWrapper--<?php echo block_value('image-position'); ?>">
    <div class="c-balloon__text">
      <?php block_field('balloon-text'); ?>
    </div>
  </div>
</div>
