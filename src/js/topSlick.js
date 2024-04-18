$(function(){
  $('#p-topSlider__slick').slick({
      infinite: true,          // スライドをループさせるか
      slidesToShow: 3,   // スライドを画面に何枚見せるか
      slidesToScroll: 1,   // 1回のスクロールで何枚見せるか
      autoplay: true,      // 自動的に動き出すか。初期値false。
      autoplaySpeed: 5000, // 次のスライドに切り替わる待ち時間
      speed: 1000,          // 切り替え時のスピード(1000=1秒)
      arrows: true,         // 左右の移動ボタン
      dots: false, // ドット（ページ送り）を表示する(デフォルトfalse)
      adaptiveHeight: true,
      prevArrow: '<button class="slide-arrow prev-arrow" aria-label="arrow" aria-label="arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow" aria-label="arrow" aria-label="arrow"></button>',

      responsive: [
        {
        breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,  // trueで、両端見切れ状態を作る
            centerPadding: "22.5%", // 左右の見切れで表示される幅
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
  });
}); 
