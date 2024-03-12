$('.js-faqAccordion').on('click', function(){ 
  $(this).children('.p-faq__question').children('.p-faq__questionOpen').toggleClass('is-active');
  $(this).children('.p-faq__answer').slideToggle();
});
