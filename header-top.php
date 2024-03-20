<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- preload -->
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv.png" />
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg.jpg" />
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_tab.png" />
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_sp.png" />
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_bg_sp.png" />
  <link rel="preload" as="image" href="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/fv_walktime.png" />

  <!-- cssインライン化 -->
  <style>
    @font-face{font-display:swap;font-weight:900;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Black.woff") format("woff")}@font-face{font-display:swap;font-weight:800;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-ExtraBold.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Regular.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Regular.woff") format("woff")}@font-face{font-display:swap;font-weight:900;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Black.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Regular.woff") format("woff")}html,body,div,span,iframe,h1,a,img,ul,li,header,nav{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}header,nav{display:block}body{line-height:1}ul{list-style:none}*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit}@font-face{font-display:swap;font-weight:900;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Black.woff") format("woff")}@font-face{font-display:swap;font-weight:800;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-ExtraBold.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Cinzel";src:url("../../../dist/fonts/Cinzel-Regular.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Lora";src:url("../../../dist/fonts/Lora-Regular.woff") format("woff")}@font-face{font-display:swap;font-weight:900;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Black.woff") format("woff")}@font-face{font-display:swap;font-weight:700;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Bold.woff") format("woff")}@font-face{font-display:swap;font-weight:600;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-SemiBold.woff") format("woff")}@font-face{font-display:swap;font-weight:500;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Medium.woff") format("woff")}@font-face{font-display:swap;font-weight:400;font-style:normal;font-family:"Zen Old Mincho";src:url("../../../dist/fonts/ZenOldMincho-Regular.woff") format("woff")}html{font-size:62.5%;-webkit-box-sizing:border-box;box-sizing:border-box}body{position:relative;font-family:"Zen Old Mincho",serif;line-height:1.5;font-weight:normal;font-size:1.6rem;color:#393327}a{text-decoration:none;color:#393327}img{width:100%;height:auto;vertical-align:bottom}iframe{vertical-align:bottom}.l-header{display:none}@media screen and (min-width:1025px){.l-header{display:block;width:100%;padding:2rem 0;z-index:10;background-color:#fff}.l-header._top{position:absolute;background-color:transparent}}.l-header__body{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.l-header__left{padding-left:1.8rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 2rem;-webkit-box-flex:1;-ms-flex:1;flex:1}.l-header__logo img{width:12.2rem;height:9rem}.l-header__clinic{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;gap:0.5rem}.l-header__clinicName a{width:10rem;height:2.2rem;background-color:#AE8954;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;border-radius:0.1rem;font-family:"Zen Old Mincho",serif;font-weight:500;font-size:1.3rem;color:#fff}.l-header__nav{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.l-header__topList{height:3rem;margin-top:0.2rem;margin-left:auto;background-color:#442906;border-radius:2rem 0 0 2rem;padding-right:1.8rem;padding-left:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 2rem}@media screen and (min-width:1200px){.l-header__topList{padding-right:4.8rem}}.l-header__topItem{font-size:1.4rem}.l-header__topItem a{color:#fff;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 0.4rem;letter-spacing:1.4px}.l-header__topItem a::before{content:"";display:inline-block;width:0.9rem;height:0.9rem;background-color:#B88D50;border-radius:50%}.l-header__bottomList{margin-top:1.6rem;margin-right:1.8rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 1.6rem;font-size:1.5rem}@media screen and (min-width:1025px){.l-header__bottomList{font-size:1.4rem}}@media screen and (min-width:1200px){.l-header__bottomList{margin-right:5rem;gap:0 2.5rem;font-size:1.6rem}}.l-header__bottomItem a{font-weight:700;color:#393327}._top .l-header__bottomItem a{font-weight:400;text-shadow:0px 0px 1rem rgba(0,0,0,.4);color:#fff}.l-spHeader{position:fixed;top:0;left:0;z-index:999;width:100%;margin:auto;background-color:#fff}@media screen and (min-width:1025px){.l-spHeader{display:none}}.l-spHeader__top{height:6.4rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding-left:1rem}.l-spHeader__logo{width:17.2rem}.l-spHeader__nav{display:none;background-color:#fff;height:calc(100vh - 6.4rem);padding-bottom:4rem;overflow:scroll;z-index:10}.l-spHeader__list{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.l-spHeader__item{font-size:18px;font-weight:700;border-bottom:1px solid #FFD7A4}.l-spHeader__item:last-of-type{border-bottom:none}.l-spHeader__item>a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;height:4.2rem;background-color:#FFE9CD;color:#442906;padding:0 3rem 0 2.6rem}.l-spHeader__item>a .l-spHeader__itemOpen{position:relative;width:2.5rem;height:2.5rem;background-color:#442906;border-radius:50%}.l-spHeader__item>a .l-spHeader__itemOpen::before,.l-spHeader__item>a .l-spHeader__itemOpen::after{content:"";position:absolute;right:0;left:0;top:0;bottom:0;margin:auto;width:1.3rem;height:0.2rem;background-color:#fff}.l-spHeader__item>a .l-spHeader__itemOpen::after{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.l-spHeader__sublist{display:none}.l-spHeader__subitem>a{display:block;padding:0.8rem 3rem 0.8rem 2.6rem;border-bottom:1px solid #FFD7A4;background:#fff;font-size:1.6rem;color:#ED8500}.l-spHeader__subitem>a::before{content:"";width:1.5rem;height:0.2rem;display:inline-block;margin-right:1rem;margin-bottom:0.5rem;background-color:#ED8500}.l-spHeader__subitem>a span{display:block;margin-left:2.5rem;line-height:1;font-weight:500;font-size:1.2rem;color:#808080}.l-spHeader__btn{margin-top:3rem}.l-spHeader__btn a{font-size:18px;font-weight:700;line-height:15px;letter-spacing:-1.44px;margin:0 auto}.l-spHeader__btn a::after{display:none}.l-spHeader__btn a img{width:2.8rem;height:2.8rem}.l-spHeader__tel{margin-top:3.4rem}.l-spHeader__telList{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;gap:2.6rem 0;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.l-spHeader__telItem{width:30rem;margin:0 auto;padding-bottom:1.5rem;border:1px solid #8A652F;background-color:#F8F8F8}.l-spHeader__itemTitle{margin:-1.2rem auto 0;width:16rem;height:2.4rem;border-radius:1.2rem;background-color:#8A652F;text-align:center;font-family:"Zen Old Mincho",serif;color:#fff;font-weight:600;font-size:1.4rem}.l-spHeader__itemTel{margin-top:0.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;gap:0.7rem}.l-spHeader__itemTel img{width:2.2rem;height:2.2rem}.l-spHeader__itemNum{color:#ED8500;font-family:"Cinzel",serif;font-size:28px;font-weight:700}.l-spHeader__itemTime{text-align:center;color:#000;font-size:13px;font-weight:700;letter-spacing:0.52px}.l-main{padding-top:6.4rem}@media screen and (min-width:1025px){.l-main{padding-top:0}}.l-main._top{padding-bottom:8rem}@media screen and (min-width:1025px){.l-main._top{padding-bottom:12rem}}@media screen and (min-width:769px){._sp{display:none}}.c-btn{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 1rem;width:30rem;height:5.4rem;border-radius:0.6rem;background-color:#AE8954;color:#fff;letter-spacing:0.32px;font-size:16px;margin:0 auto}@media screen and (min-width:769px){.c-btn{margin:0;margin:initial}}.c-btn._orange{background-color:#ED8500}.c-btn::after{content:"";position:absolute;top:0;bottom:0;right:2rem;margin:auto;width:1.6rem;height:0.8rem;background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/icon/arrow_right.png");background-size:contain}.c-hamburger{width:6.4rem;height:6.4rem;background-color:#ED8500;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0.5rem}.c-hamburger__text{color:#fff;font-size:12px;font-weight:900;letter-spacing:1.8px}.c-hamburger__text._menu{display:block}.c-hamburger__text._close{display:none}.c-hamburger__lines{width:3.8rem;height:1.3rem;position:relative}.c-hamburger__lines span{position:absolute;display:block;width:100%;height:0.3rem;background-color:#fff}.c-hamburger__lines span:first-child{top:0}.c-hamburger__lines span:last-child{bottom:0}.c-fixedCta{position:fixed;right:0;height:100%;top:17.4rem;z-index:99;display:none}@media screen and (min-width:1025px){.c-fixedCta{display:block}}.c-fixedCta__List{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;gap:1rem 0;height:100%}.c-fixedCta__Item{-webkit-filter:drop-shadow(-4px 4px 20px rgba(0,0,0,.3));filter:drop-shadow(-4px 4px 20px rgba(0,0,0,.3));letter-spacing:-0.45em}.c-fixedCta__Item>a{width:6.3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 0.7rem;-webkit-writing-mode:vertical-rl;-ms-writing-mode:tb-rl;writing-mode:vertical-rl;font-weight:700;font-size:1.5rem;line-height:1.2}.c-fixedCta__Item--tel{background-color:#fff;border:1px solid #ED8500;border-right:none}.c-fixedCta__Item--tel>a{height:17rem;color:#ED8500}.c-fixedCta__Item--tel>a img{width:2.6rem}.c-fixedCta__Item--counseling{background-color:#ED8500;border:1px solid #fff;border-right:none}.c-fixedCta__Item--counseling a{height:22.8rem;color:#fff}.c-fixedCta__Item--counseling a img{width:2.5rem}.c-fixedCtaSp{position:fixed;right:0;left:0;bottom:0.6rem;margin:auto;width:100%;z-index:99}@media screen and (min-width:769px){.c-fixedCtaSp{display:none}}.c-fixedCtaSp__list{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 0.6rem}.c-fixedCtaSp__item{width:47.33333%;max-width:35rem}.c-fixedCtaSp__itemTelLink{width:100%;height:5.4rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 1rem;border-radius:0.4rem}.c-fixedCtaSp__itemTelLink--tel{border:3px solid #442906;background-color:#fff}.c-fixedCtaSp__itemTelLink--tel img{width:2.6rem;height:2.6rem}.c-fixedCtaSp__itemTelLink--counseling{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;border:3px solid #BE6B00;background:#ED8500}.c-fixedCtaSp__itemTelLink--counseling img{width:1.6rem;height:1.6rem}.c-fixedCtaSp__itemCounseling--large{color:#442906;font-size:14px;font-weight:700;line-height:1.3}.c-fixedCtaSp__itemTelLink--counseling .c-fixedCtaSp__itemCounseling--large{color:#fff;letter-spacing:-1.12px}.c-fixedCtaSp__itemCounseling--small{color:#FFF;font-size:10px;letter-spacing:0.28px}.c-fixedCtaSp__itemCounseling--small ._num{font-weight:700;font-size:14px}.p-topFv{background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv_bg_sp.png");background-repeat:no-repeat;background-size:cover;background-position:center;position:relative;width:100%;height:47rem}@media screen and (min-width:769px){.p-topFv{height:53rem;background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv_bg.jpg")}}@media screen and (min-width:1025px){.p-topFv{min-height:76rem;height:52.778vw}}.p-topFv__img{background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv_sp.png");background-repeat:no-repeat;background-size:cover;background-position:center;position:absolute;top:1rem;left:1rem;bottom:1rem;right:1rem;width:calc(100% - 2rem);height:calc(100% - 2rem)}@media screen and (min-width:600px){.p-topFv__img{background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv_tab.png")}}@media screen and (min-width:1025px){.p-topFv__img{background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv.png");background-position:center;top:0;left:0;right:auto;right:initial;bottom:auto;bottom:initial;margin-left:28rem;padding:0;width:calc(100% - 28rem);min-height:70rem;height:48.611vw}}.p-topFv__body{position:inherit;z-index:2;padding-top:7rem}@media screen and (min-width:1025px){.p-topFv__body{padding-top:18.3rem;margin-left:8rem}}.p-topFv__message{color:#fff;text-align:center}@media screen and (min-width:1025px){.p-topFv__message{text-align:left}}.p-topFv__messageTop{font-size:22px;font-weight:600;letter-spacing:1.98px;text-shadow:0px 0px 20px rgba(255,255,255,.4)}@media screen and (min-width:1025px){.p-topFv__messageTop{font-size:4.4rem;letter-spacing:0.07em}}.p-topFv__messageMiddle{font-weight:600;line-height:1.3}.p-topFv__messageMiddle span._small{font-size:24px;letter-spacing:-1.92px}.p-topFv__messageMiddle span._large{font-size:52px}.p-topFv__messageMiddle span._large:nth-of-type(1){letter-spacing:-2.6px}.p-topFv__messageMiddle span._large:nth-of-type(2){letter-spacing:-12.48px}.p-topFv__messageMiddle span._large:nth-of-type(3){letter-spacing:-10.4px}.p-topFv__messageMiddle span._large:nth-of-type(5){letter-spacing:0.52px}@media screen and (min-width:1025px){.p-topFv__messageMiddle span._small{font-size:4.4rem;letter-spacing:10px}.p-topFv__messageMiddle span._large{font-size:9rem}.p-topFv__messageMiddle span._large:nth-of-type(1){letter-spacing:5px}.p-topFv__messageMiddle span._large:nth-of-type(2){letter-spacing:-11px}.p-topFv__messageMiddle span._large:nth-of-type(3){letter-spacing:-8.6px}.p-topFv__messageMiddle span._large:nth-of-type(5){letter-spacing:9.6px}}.p-topFv__messageBottom{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 1.1rem;font-family:"Lora",serif;font-size:16px;letter-spacing:3.52px}.p-topFv__messageBottom::before,.p-topFv__messageBottom::after{content:"";display:inline-block;width:3rem;height:0.1rem;background-color:#fff}@media screen and (min-width:1025px){.p-topFv__messageBottom{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;font-family:"Lora",serif;font-size:3rem;line-height:2.1;letter-spacing:0.26em}.p-topFv__messageBottom::before{width:13.7rem;height:0.1rem;background-color:#fff}.p-topFv__messageBottom::after{display:none}}.p-topFv__clinics{margin-top:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;gap:1rem}@media screen and (min-width:769px){.p-topFv__clinics{gap:2rem}}@media screen and (min-width:1025px){.p-topFv__clinics{margin-top:4rem;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}}.p-topFv__clinic{background-image:url("http://stg.lietoclinic.com/wp-content/themes/lieto-clinic/dist/img/top/fv_walktime.png");background-position:center;background-repeat:no-repeat;background-size:contain;width:11rem;height:11rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;color:#fff;text-align:center;line-height:1}@media screen and (min-width:1025px){.p-topFv__clinic{width:16.5rem;height:16.5rem}}.p-topFv__clinicName{display:block;margin-top:2.3rem;font-weight:700;font-size:1.3rem}@media screen and (min-width:1025px){.p-topFv__clinicName{margin-top:3.4rem;font-size:2rem}}.p-topFv__clinicWalk{display:block;margin-bottom:1.3rem;font-weight:400;line-height:1.1;font-size:1.2rem}@media screen and (min-width:1025px){.p-topFv__clinicWalk{margin-bottom:2.5rem;line-height:1.5;font-size:1.8rem}}.p-topFv__clinicWalk ._num{margin:0 0.2rem;font-family:"Cinzel",serif;font-size:2.4rem}@media screen and (min-width:1025px){.p-topFv__clinicWalk ._num{line-height:1;font-size:3.6rem}}.p-topFv__scroll{position:absolute;right:0;left:0;margin:0 auto;bottom:3rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0.6rem 0;z-index:3}@media screen and (min-width:1025px){.p-topFv__scroll{right:16.3rem;left:auto;left:initial;margin:0;margin:initial;bottom:2.2rem;gap:1rem 0}}.p-topFv__scrollLine{width:0.1rem;height:5.5rem;background-color:#fff;-webkit-animation:scrollDown 2s ease infinite;animation:scrollDown 2s ease infinite}@media screen and (min-width:1025px){.p-topFv__scrollLine{height:8.5rem}}.p-topFv__scrollText{text-transform:uppercase;font-family:"Lora",serif;letter-spacing:3.6px;font-size:1.2rem;color:#fff}@media screen and (min-width:1025px){.p-topFv__scrollText{-webkit-writing-mode:vertical-rl;-ms-writing-mode:tb-rl;writing-mode:vertical-rl;letter-spacing:0.6em;font-size:1.3rem}}@-webkit-keyframes scrollDown{0%{-webkit-transform-origin:top;transform-origin:top;-webkit-transform:scaleY(0);transform:scaleY(0)}45%{-webkit-transform-origin:top;transform-origin:top;-webkit-transform:scaleY(1);transform:scaleY(1)}55%{-webkit-transform-origin:bottom;transform-origin:bottom;-webkit-transform:scaleY(1);transform:scaleY(1)}100%{-webkit-transform-origin:bottom;transform-origin:bottom;-webkit-transform:scaleY(0);transform:scaleY(0)}}@keyframes scrollDown{0%{-webkit-transform-origin:top;transform-origin:top;-webkit-transform:scaleY(0);transform:scaleY(0)}45%{-webkit-transform-origin:top;transform-origin:top;-webkit-transform:scaleY(1);transform:scaleY(1)}55%{-webkit-transform-origin:bottom;transform-origin:bottom;-webkit-transform:scaleY(1);transform:scaleY(1)}100%{-webkit-transform-origin:bottom;transform-origin:bottom;-webkit-transform:scaleY(0);transform:scaleY(0)}}.p-topBanner{margin-top:3.4rem}@media screen and (min-width:769px){.p-topBanner{margin-top:8rem}}.p-topSlider{overflow:hidden}.p-topSlider__inner{max-width:134rem;margin:0 auto}@media screen and (min-width:769px){.p-topSlider__inner{padding:0 4rem}}.p-topSliderList{margin:0 -0.7rem}@media screen and (min-width:769px){.p-topSliderList{margin:0 -1.5rem}}.p-topSliderItem{margin:0 0.7rem}@media screen and (min-width:769px){.p-topSliderItem{margin:0 1.5rem}}.p-topTreatment__banner a img{filter:url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feGaussianBlur in="SourceAlpha" stdDeviation="20" /><feOffset dx="1" dy="1" result="offsetblur" /><feFlood flood-color="rgba(0,0,0,0.25)" /><feComposite in2="offsetblur" operator="in" /><feMerge><feMergeNode /><feMergeNode in="SourceGraphic" /></feMerge></filter></svg>#filter');-webkit-filter:drop-shadow(0px 0px 20px rgba(0,0,0,.25));filter:drop-shadow(0px 0px 20px rgba(0,0,0,.25))}.p-cta__reserveBtn{margin-top:0.6rem}.p-cta__reserveBtn a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 1.2rem;margin:2rem auto 0;width:28rem;height:5.4rem;border-radius:2px;background:#ED8500;-webkit-box-shadow:0px 0px 20px 0px rgba(0,0,0,.1);box-shadow:0px 0px 20px 0px rgba(0,0,0,.1);color:#fff;font-family:"Zen Old Mincho",serif;font-weight:700;font-size:18px;font-weight:700;line-height:15px;letter-spacing:-1.44px}.p-cta__reserveBtn a img{width:3.6rem;height:3.6rem}@media screen and (min-width:769px){.p-cta__reserveBtn a{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;margin:0;margin:initial;padding-left:3rem;border:1px solid #fff;width:33rem;height:6rem;font-size:19px;letter-spacing:normal;line-height:normal}}.p-modal{display:none;height:100vh;position:fixed;top:0;left:0;width:100%;z-index:100}.p-modal__bg{background:rgba(0,0,0,.5);height:100vh;position:absolute;width:100%}.p-modal__area{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);padding:3.7rem 0 2.8rem;width:30rem;max-width:75rem;background-color:#000;border-radius:0.6rem}@media screen and (min-width:769px){.p-modal__area{width:90%;padding:4.6rem 6rem 4.2rem}}.p-modal__list{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:3rem}@media screen and (min-width:769px){.p-modal__list{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}}.p-modal__item{width:26rem;height:9.2rem;background-color:#fff;border:1px solid #8A652F}@media screen and (min-width:769px){.p-modal__item{width:29.9rem}}.p-modal__itemTitle{margin:-1.2rem auto 0;width:16rem;height:2.4rem;background-color:#8A652F;border-radius:2rem;text-align:center;color:#fff;font-family:"Zen Old Mincho",serif;font-size:14px;font-weight:600}.p-modal__itemTel{margin-top:0.7rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;gap:0 0.7rem}.p-modal__itemTel img{width:2.2rem;height:2.2rem}.p-modal__itemTel .p-modal__itemNum{color:#ED8500;font-family:"Cinzel",serif;font-size:28px;font-weight:700}.p-modal__itemTime{color:#000;text-align:center;font-size:13px;font-weight:700;letter-spacing:0.52px}.p-modal__closeBtn{position:absolute;top:-1.6rem;right:-1.6rem;width:3.2rem;height:3.2rem}@media screen and (min-width:769px){.p-modal__closeBtn{top:-2rem;right:-2rem;width:4rem;height:4rem}}.p-faq__answer{display:none}.p-faq__answerDesc{padding:0.8rem 2rem 2rem 0.8rem;background-color:#FFF4E3;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;gap:0 0.8rem}@media screen and (min-width:769px){.p-faq__answerDesc{padding:2rem 2rem 2rem 1rem;gap:0 2rem}}.p-faq__answerMark{width:3.2rem;height:3.2rem;background-color:#AE8954;border-radius:0.8rem;text-align:center;line-height:3.2rem;color:#fff;font-family:"Zen Old Mincho",serif;text-align:center;font-size:18.5px;font-weight:700}@media screen and (min-width:769px){.p-faq__answerMark{width:4.5rem;height:4.5rem;border-radius:1.2rem;line-height:4.5rem;font-size:26px}}.p-faq__answerText{padding-top:0.6rem;-webkit-box-flex:1;-ms-flex:1;flex:1;line-height:1.5}@media screen and (min-width:769px){.p-faq__answerText{line-height:30px;padding-top:0.8rem}}
  </style>

  <!-- OGP -->
  <?php $current_url =  get_pagenum_link(get_query_var('page')); ?>

  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $current_url ?>">
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/ogp.jpg">
  <meta property="og:site_name" content="リエートクリニック｜横浜・名古屋での医療痩身・メディカルダイエット">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary">

  <!-- Google Tag Manager -->
  <script defer="">
    var isExec = false;

    function gtm(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    };
    document.addEventListener('DOMContentLoaded', function() {
      window.addEventListener("scroll", function() {
        if (!isExec) {
          isExec = true;
          gtm(window, document, 'script', 'dataLayer', 'GTM-M3J28DV');
        }
      });
    }, false);
    setTimeout(() => {
      if (!isExec) {
        gtm(window, document, 'script', 'dataLayer', 'GTM-M3J28DV');
      }
    }, 3500);
  </script>
  <!-- End Google Tag Manager -->

  <!-- 構造化データ -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "website",
      "name": "リエートクリニック",
      "inLanguage": "jp",
      "publisher": {
        "@type": "Organization",
        "name": "スペーム株式会社",
        "logo": {
          "@type": "ImageObject",
          "url": "<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_orange.png"
        }
      },
      "copyrightYear": "2024-02-02T12:00:00+0000",
      "headline": "トップページ",
      "description": "<?php bloginfo('description'); ?>",
      "url": "  <?php echo $current_url; ?>"
    }
  </script>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3J28DV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php wp_body_open(); ?>

  <!-- PC header -->
  <header class="l-header _top">
    <div class="l-header__inner">
      <div class="l-header__body">
        <div class="l-header__left">
          <h1 class="l-header__logo">
            <a href="/">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_white.png" alt="Lieto Clinic">
            </a>
          </h1>
          <div class="l-header__clinic">
            <?php
            $args = array(
              'post_type' => 'clinic',
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="l-header__clinicName"><a href="<?php the_permalink(); ?>"><?php the_field("clinic_name"); ?>院</a></div>
              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </div>
        </div>

        <nav class="l-header__nav">
          <ul class="l-header__topList">
            <li class="l-header__topItem"><a href="/news/">新着情報</a></li>
            <?php
            $query = new WP_Query(
              array(
                'post_type' => 'post',
                'post_status' => 'publish',
              )
            );
            ?>
            <?php if ($query->have_posts()) : ?>
              <li class="l-header__topItem"><a href="/column/">コラム</a></li>
            <?php endif;
            wp_reset_postdata(); ?>
            <li class="l-header__topItem"><a href="/recruit/">採用情報</a></li>
          </ul>
          <ul class="l-header__bottomList">
            <li class="l-header__bottomItem"><a href="/greeting/">担当医師挨拶</a></li>
            <li class="l-header__bottomItem"><a href="/about/">当院について</a></li>
            <li class="l-header__bottomItem"><a href="/flow/">施術の流れ</a></li>
            <li class="l-header__bottomItem"><a href="/menu/">施術一覧</a></li>
            <!-- <li class="l-header__bottomItem"><a href="/case/">当院の症例</a></li> -->
            <li class="l-header__bottomItem"><a href="/minor/">未成年者の方へ</a></li>
            <li class="l-header__bottomItem"><a href="/faq/">よくある質問</a></li>
            <li class="l-header__bottomItem"><a href="/clinic/">クリニック一覧</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- SP header -->
  <header class="l-spHeader">
    <div class="l-spHeader__inner">
      <div class="l-spHeader__top">
        <div class="l-spHeader__logo">
          <a href="/">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/logo_sp_orange.png' alt='Lieto Clinic'>
          </a>
        </div>

        <div class="c-hamburger" id="js-hamburger">
          <div class="c-hamburger__text _menu">MENU</div>
          <div class="c-hamburger__text _close">CLOSE</div>
          <div class="c-hamburger__lines">
            <span></span><span></span>
          </div>
        </div>
      </div>

      <nav class="l-spHeader__nav">
        <ul class="l-spHeader__list">
          <li class="l-spHeader__item"><a href="/greeting/">担当医師挨拶</a></li>
          <li class="l-spHeader__item"><a href="/about/">当院について</a></li>
          <li class="l-spHeader__item"><a href="/flow/">施術の流れ</a></li>
          <li class="l-spHeader__item has-child">
            <div href="javascript:void(0)" class="js-accordion">
              施術一覧
              <span class="l-spHeader__itemOpen"></span>
            </div>
            <ul class="l-spHeader__sublist">
              <li class="l-spHeader__subitem"><a href="/menu/stimsure/">医療痩身機器<span>StimSure-スティムシュアー</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/clatuu-a/">医療脂肪冷却機器<span>CLATUU α -クラツーアルファ-</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/hifu/">医療HIFU<span>ULTRAcel [zíː] -ウルトラセル ジィー-</span></a></li>
              <li class="l-spHeader__subitem"><a href="/menu/fat-dissolving-injection/">脂肪溶解注射</a></li>

              <li class="l-spHeader__subitem"><a href="/menu/glp-1/">GLP-1</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/beauty-drip/">ダイエット美容点滴</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/original-supplement/">オリジナルサプリメント</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/original-protein/">オリジナルプロテイン</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/diet-supplement/">ダイエット薬</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/guidance/">食事・栄養指導</a></li>
              <li class="l-spHeader__subitem"><a href="/menu/exosome/">細胞レベルで美しく<span>エクソソーム点滴</span></a></li>
            </ul>
          </li>
          <!-- <li class="l-spHeader__item"><a href="/case/">当院の症例</a></li> -->
          <li class="l-spHeader__item"><a href="/minor/">未成年者の方へ</a></li>
          <li class="l-spHeader__item"><a href="/faq/">よくある質問</a></li>
          <li class="l-spHeader__item"><a href="/clinic/">クリニック一覧</a></li>
        </ul>

        <div class="l-spHeader__btn">
          <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*cn51jo*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5" class="c-btn _orange"><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png' alt="icon">無料カウンセリング予約</a>
        </div>

        <div class="l-spHeader__tel">
          <ul class="l-spHeader__telList">
            <?php
            $args = array(
              'post_type' => 'clinic',
              'posts_per_page' => -1,
            );
            $query = new WP_Query($args);
            ?>

            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li class="l-spHeader__telItem">
                  <div class="l-spHeader__itemTitle"><?php the_field("clinic_name") ?>院</div>
                  <a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>" class="l-spHeader__itemTel">
                    <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png' alt="icon">
                    <div class="l-spHeader__itemNum"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></div>
                  </a>
                  <div class="l-spHeader__itemTime">
                    <?php echo get_field('clinic_info')['clinic_info_time']; ?>
                  </div>
                </li>

              <?php endwhile;
              wp_reset_postdata() ?>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- fixedCta_PC -->
  <div class="c-fixedCta">
    <ul class="c-fixedCta__List">
      <li class="c-fixedCta__Item c-fixedCta__Item--tel">
        <div href="javascript:void(0)" class="js-modal-open">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png" alt="お電話">
          <div class="c-fixedCta__ItemText">お電話からの<br>ご予約はこちら</div>
        </div>
      </li>

      <li class="c-fixedCta__Item c-fixedCta__Item--counseling">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*cn51jo*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png" alt="無料カウンセリング">
          <div class="c-fixedCta__ItemText">無料カウンセリング予約</div>
        </a>
      </li>
    </ul>
  </div>


  <!-- fixedCta_SP -->
  <div class="c-fixedCtaSp">
    <ul class="c-fixedCtaSp__list">
      <li class="c-fixedCtaSp__item">
        <div href="javascript:void(0)" class="c-fixedCtaSp__itemTelLink c-fixedCtaSp__itemTelLink--tel js-modal-open">
          <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_dark.png' alt="icon">
          <span class="c-fixedCtaSp__itemCounseling--large">お電話からの<br>ご予約はこちら</span>
        </div>
      </li>
      <li class="c-fixedCtaSp__item">
        <a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*cn51jo*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5" class="c-fixedCtaSp__itemTelLink c-fixedCtaSp__itemTelLink--counseling">
          <span class="c-fixedCtaSp__itemCounseling--small">
            <span class="_num">3</span>分でWeb予約!<span class="_num">24</span>時間受付中!
          </span>
          <span class="c-fixedCtaSp__itemCounseling--large">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling.png' alt="icon">
            無料カウンセリング予約
          </span>
        </a>
      </li>
    </ul>
  </div>

  <!-- modal -->
  <div id="modal" class="p-modal">
    <div class="p-modal__bg js-modal-close"></div>
    <div class="p-modal__area">
      <ul class="p-modal__list">

        <li class="p-modal__item">
          <div class="p-modal__itemTitle">全院共通</div>
          <a href="tel:<?php echo get_field('toll-free', 94); ?>" class="p-modal__itemTel">
            <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_orange.png' alt="icon">
            <div class="p-modal__itemNum"><?php echo get_field('toll-free', 94); ?></div>
          </a>
          <div class="p-modal__itemTime">
            月曜日〜日曜日 : 10:00〜20:00
          </div>
        </li>

      </ul>

      <div class="p-modal__closeBtn js-modal-close">
        <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_closebtn.png' alt="close">
      </div>
    </div>
  </div>
