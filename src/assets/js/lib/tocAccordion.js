const tocAccordion = () => {
  $('.lwptoc_toggle > a').on('click', function(){ 
    $(this).toggleClass('is-active');
    // $(this).next().slideToggle();
  });
}
export default tocAccordion();
