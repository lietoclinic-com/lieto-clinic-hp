// アクセス方法の表示をtagboxで切り替える
const tagbox = () => {
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
}
export default tagbox();
