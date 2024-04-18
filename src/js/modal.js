// modalの実装
$(function() {
  // ボタンをクリックしたときにモーダルを表示する
  $(".js-modal-open").click(function() {
    $(".p-modal").fadeIn();
  });

  // オーバーレイまたは閉じるボタンをクリックしたときにモーダルを非表示にする
  $(".js-modal-close").click(function() {
    $(".p-modal").fadeOut();
  });
});



