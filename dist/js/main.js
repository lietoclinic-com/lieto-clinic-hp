$('.js-accordion').on('click', function(){ 
  $(this).toggleClass('is-active');
  $(this).next().slideToggle();
});

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
    prevArrow: '<buton sizes=auto class="slick-slide-arrow _archive slick-prev-arrow">',
    nextArrow: '<buton sizes=auto class="slick-slide-arrow _archive slick-next-arrow">',

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
  prevArrow: '<buton sizes=auto class="slick-slide-arrow _archive slick-prev-arrow">',
  nextArrow: '<buton sizes=auto class="slick-slide-arrow _archive slick-next-arrow">',

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

$('.js-faqAccordion').on('click', function(){ 
  $(this).children('.p-faq__question').children('.p-faq__questionOpen').toggleClass('is-active');
  $(this).children('.p-faq__answer').slideToggle();
});

$('p-form__inputRadio input').change(function() {
  $(this).addClass('is-active');
  let $btn = $(this);
  if ($btn.prop('checked')) {
    $(this).parents('label').addClass('is-active');
  } else {
    $(this).parents('label').removeClass('is-active');
      // $('#target').text('チェックが外れました。')
  }
});

$('#fv-slick').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3000,
  speed: 1000,
  dots: false,
  arrows: true,
});

$('#js-hamburger').on('click', function(){ 
  $('.c-hamburger__lines').toggleClass('is-active');
  $('.l-spHeader__nav').fadeToggle(300);
  $(".c-hamburger__text._menu").toggleClass("is-active");
  $(".c-hamburger__text._close").toggleClass("is-active");
  $("body").toggleClass("is-active");
});

//関数定義
const myFunc = function(src){

  //Promiseオブジェクトを生成して返す
  return new Promise(function(resolve, reject){
      //Imageオブジェクトを生成
      const image = new Image();

      //読み込む画像を設定（関数の引数で取得した画像パスを代入）
      image.src = src;

      //onloadで画像読み込み完了後に処理
      image.onload = function(){
          //成功時にthenの処理へ
          resolve(image);
      }

      //onerrorで画像読み込みエラー時に処理
      image.onerror = function(error){
          //失敗時にcatchの処理へ
          reject(error);
      }
  });
}

//ページ内のimg要素を取得
const imgs = document.getElementsByTagName('img');

//img要素の数だけ繰り返し処理
for (const img of imgs) {

  //img要素のsrc属性の値を取得
  const src = img.getAttribute('src');

  //関数実行
  myFunc(src)

  //読み込みが完了した（画像が設定された）Imageオブジェクトを受け取って処理
  .then(function(res){

      //img要素のwidth属性に値を設定
      img.setAttribute('width', res.width);

      //img要素のheight属性に値を設定
      img.setAttribute('height', res.height);
  })

  //画像読み込みエラー時の処理
  .catch(function(error){
      console.log(error);
  });
}

// mapからW/H属性を削除
$('.p-access__map > iframe').removeAttr('width height');

// 郵便番号自動入力
$(document).ready(function() {
  $('#your-code').on('keyup', function() {
    AjaxZip3.zip2addr(this, '', 'addr11', 'addr11');
  });
});

// modalの実装
$(function() {
  // ボタンをクリックしたときにモーダルを表示する
  $(".js-modal-open").click(function() {
    $(".p-modal").fadeIn();
  });

  // オーバーレイまたは閉じるボタンをクリックしたときにモーダルを非表示にする
  $(".js-modal-close").click(function() {
    $(".p-modal").fadeOut();
  });
});




// 郵便番号自動入力
$(document).ready(function() {
  $('#your-code').on('keyup', function() {
    AjaxZip3.zip2addr(this, '', 'addr11', 'addr11');
  });
});

$('a[href^="#"]').on('click', function(){
  let speed = 500;
  let href= $(this).attr("href");
  let target = $(href == "#" || href == "" ? 'html' : href);
  let position = target.offset().top;
  $("html, body").animate({scrollTop:position}, speed, "swing");
  return false;
});

$('.l-header__item.has-child').hover(
  function() {
    $(this).children('.l-header__subnav').toggleClass('_active');
  },
);

// アクセス方法の表示をtagboxで切り替える
// 最初の要素を表示
$(".p-singleClinichow__table:first").addClass("is-active");
$(".p-singleClinichow__tab:first").addClass("is-active");

$('.p-singleClinichow__tab').on('click', function() {
  const index = $(this).index();

  $('.p-singleClinichow__tab').removeClass('is-active');
  $(this).addClass('is-active');

  $('.p-singleClinichow__table').removeClass('is-active');
  $('.p-singleClinichow__table').eq(index).addClass('is-active');
});

$('.lwptoc_toggle > a').on('click', function(){ 
  $(this).toggleClass('is-active');
  // $(this).next().slideToggle();
});

// 目次の表示・閉じるをクリックした時リンク削除
const tocLink = document.querySelector('.lwptoc_toggle_label');
// href属性を変更
if (tocLink) {
  tocLink.href = 'javascript:void(0)'; // リンク無効化
}

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
      prevArrow: '<button class="slide-arrow prev-arrow"></button>',
      nextArrow: '<button class="slide-arrow next-arrow"></button>',

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

// 症状をクリックした時の処理
$('.p-topTreatment__tab').on('click', function() {
  const index = $(this).index();

  $('.p-topTreatment__tab').removeClass('_active');
  $(this).addClass('_active');

  $('.p-topTreatment__table').removeClass('_active');
  $('.p-topTreatment__table').eq(index).addClass('_active');
});
