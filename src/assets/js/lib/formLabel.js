const formLabel = () => {
  $('p-form__inputRadio input').change(function() {
    $(this).addClass('is-active');
    let $btn = $(this);
    if ($btn.prop('checked')) {
      $(this).parents('label').addClass('is-active');
    } else {
      $(this).parents('label').removeClass('is-active');
        // $('#target').text('チェックが外れました。')
    }
  });
}
export default formLabel();
