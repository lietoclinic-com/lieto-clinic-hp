$('.p-faq__question').on('click', function(){ 
  $(this).children('.p-faq__questionOpen').toggleClass('is-active');
  $(this).next('.p-faq__answer').slideToggle();
});
