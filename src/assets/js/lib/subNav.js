const subNav = () => {
  $('.l-header__item.has-child').hover(
    function() {
      $(this).children('.l-header__subnav').toggleClass('_active');
    },
  );
}
export default subNav();



