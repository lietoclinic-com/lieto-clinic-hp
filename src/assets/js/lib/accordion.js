const accordion = () => {
  $('.js-accordion').on('click', function(){ 
    $(this).toggleClass('is-active');
    $(this).next().slideToggle();
  });
}
export default accordion();
