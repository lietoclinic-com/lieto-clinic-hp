$('.js-accordion').on('click', function(){ 
  $(this).toggleClass('is-active');
  $(this).next().slideToggle();
});
