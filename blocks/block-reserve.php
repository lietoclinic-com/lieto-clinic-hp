<?php
//----------------------------------------------------
// Custom Block - カウンセリング予約 -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------

?>
<div class="p-singleColumn__cta">
  <div class="p-cta">
    <div class="p-cta__bg">

      <div class="p-cta__top">
        <img sizes=auto loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_alltime.png'>
        <div class="p-cta__reserve">
          <div class="p-cta__reserveText">
            簡単<span class="_num">3</span>分で<span class="_en">Web予約!</span>
          </div>
          <div class="p-cta__reserveBtn _overTab">
            <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p">
              <img sizes=auto loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling_circle.png'>
              無料カウンセリング予約
            </a>
          </div>
        </div>
      </div>

      <div class="p-cta__reserveBtn _sp">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p">
          <img sizes=auto loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling_circle.png'>
          無料カウンセリング予約
        </a>
      </div>

      <div class="p-cta__bottom">
        <div class="p-cta__clinic">
          <a href="tel:<?php echo get_field('toll-free', 94); ?>">
            <div class="p-cta__clinicName">全院共通</div>
            <div class="p-cta__clinicInfo">
              <div class="p-cta__clinicTel">
                <img sizes=auto loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel.png'>
                <div class="p-cta__clinicTelNum"><?php echo get_field('toll-free', 94); ?></div>
              </div>
              <div class="p-cta__clinicTime">
                月曜日〜日曜日 : 10:00〜20:00
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
