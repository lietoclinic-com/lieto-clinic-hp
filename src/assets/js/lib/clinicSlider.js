const clinicSlider = () => {

  // クリニック一覧の複数スライダー
  $('.p-access__mainSlider').each(function(index) {
    index++;
    var mainClassName = '.js-clinic-mainslick_0'+index;
    var subClassName = '.js-clinic-subslick_0'+index;
  
    $(mainClassName).slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 600,
      adaptiveHeight: true,
      
      dots: false,
      arrows: true,
      prevArrow: '<img sizes=auto loading="lazy" src="http://lietoclinic.com/wp-content/themes/lieto-clinic/dist/assets/img/icon/arrow_bottom_white.png" class="slick-slide-arrow _archive slick-prev-arrow">',
      nextArrow: '<img sizes=auto loading="lazy" src="http://lietoclinic.com/wp-content/themes/lieto-clinic/dist/assets/img/icon/arrow_bottom_white.png" class="slick-slide-arrow _archive slick-next-arrow">',
  
      asNavFor: subClassName,
  
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
  
      responsive: [{
        breakpoint: 767, // 767以下でのデザイン
        settings: {
          centerMode: true,
          centerPadding: "11.8%",
          dots: true,
          fade: false,
          asNavFor: '',
        }
      }]
    });
  
    $(subClassName).slick({
      slidesToShow: 4,
      focusOnSelect: true,
      asNavFor: mainClassName,
    });
  });

  // クリニック詳細の単一slider
  $('.p-singleClinicAlbum__list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    fade: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 600,
    adaptiveHeight: true,
    
    dots: true,
    arrows: true,
    prevArrow: '<img sizes=auto loading="lazy" src="http://lietoclinic.com/wp-content/themes/lieto-clinic/dist/assets/img/icon/arrow_bottom_white.png" class="slick-slide-arrow _single slick-prev-arrow">',
    nextArrow: '<img sizes=auto loading="lazy" src="http://lietoclinic.com/wp-content/themes/lieto-clinic/dist/assets/img/icon/arrow_bottom_white.png" class="slick-slide-arrow _single slick-next-arrow">',

    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,

    responsive: [{
      breakpoint: 767, // 767以下でのデザイン
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "10%",
      }
    }]
  });
}
export default clinicSlider();
