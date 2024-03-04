const hamburger = () => {
  $('#js-hamburger').on('click', function(){ 
    $('.c-hamburger__lines').toggleClass('is-active');
    $('.l-spHeader__nav').fadeToggle(300);
    $(".c-hamburger__text._menu").toggleClass("is-active");
    $(".c-hamburger__text._close").toggleClass("is-active");
    $("body").toggleClass("is-active");
  });

}
export default hamburger();
