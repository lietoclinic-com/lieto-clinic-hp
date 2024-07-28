$('.l-header__bottomItem.has-child').hover(
  function() {
    $(this).children('.l-header__subnav').toggleClass('_active');
  },
);
