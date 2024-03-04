import '../scss/common.scss';

import topSlick from "./lib/topSlick";
import accordion from "./lib/accordion";
import faqAccordion from "./lib/faqAccordion";
import modal from "./lib/modal";
import hamburger from "./lib/hamburger";
import formLabel from "./lib/formLabel";
import tocAccordion from "./lib/tocAccordion";
import tocLink from "./lib/tocLink";
import clinicSlider from "./lib/clinicSlider";
import smoothScroll from "./lib/smoothScroll";
import tagbox from "./lib/tagbox";

window.addEventListener("load", function() {
  topSlick();
  accordion();
  faqAccordion();
  modal();
  hamburger();
  formLabel();
  tocAccordion();
  clinicSlider();
  tocLink();
  smoothScroll();
  tagbox();
});


// mapからW/H属性を削除
$('.p-access__map > iframe').removeAttr('width height');

// 郵便番号自動入力
$(document).ready(function() {
  $('#your-code').on('keyup', function() {
    AjaxZip3.zip2addr(this, '', 'addr11', 'addr11');
  });
});
