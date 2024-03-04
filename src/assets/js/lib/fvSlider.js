const fvSlider = () => {
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
}
export default fvSlider();
