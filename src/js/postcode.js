// 郵便番号自動入力
$(document).ready(function() {
  $('#your-code').on('keyup', function() {
    AjaxZip3.zip2addr(this, '', 'addr11', 'addr11');
  });
});
