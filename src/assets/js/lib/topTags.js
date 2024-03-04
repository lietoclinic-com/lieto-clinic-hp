// 症状をクリックした時の処理
const topTags = () => {
  $('.p-topTreatment__tab').on('click', function() {
    const index = $(this).index();
  
    $('.p-topTreatment__tab').removeClass('_active');
    $(this).addClass('_active');
  
    $('.p-topTreatment__table').removeClass('_active');
    $('.p-topTreatment__table').eq(index).addClass('_active');
  });
}
export default topTags();
