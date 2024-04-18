// 目次の表示・閉じるをクリックした時リンク削除
const tocLink = document.querySelector('.lwptoc_toggle_label');
// href属性を変更
if (tocLink) {
  tocLink.href = 'javascript:void(0)'; // リンク無効化
}
