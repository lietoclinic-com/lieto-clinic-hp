// 性別の全ボタンを取得
const buttons = document.querySelectorAll('.p-pageVoice__searchBtn');

// 性別のボタンにクリックイベントを追加(radio)
buttons.forEach(button => {
  button.addEventListener('click', () => {
    buttons.forEach(btn => btn.classList.remove('selected'));
    button.classList.add('selected');
  });
});

//年齢の全ボタンを取得
const checkboxLabels = document.querySelectorAll('.checkbox__label');
//年齢のボタンにクリックイベントを追加(checkbox)
checkboxLabels.forEach(ages => {
  ages.addEventListener('click', () => {
    ages.classList.toggle('selected');
  });
});

// 検索ボタンが押された時の遷移先URL
const ageCheckboxes = document.querySelectorAll('.ageCheckbox');
const buildUrl = () => { // URLを変更する
  let url = '/voice/'; // 通常は/voice/に遷移
  const categoryButtons = document.querySelectorAll('.p-pageVoice__searchBtn');
  categoryButtons.forEach((button) => {
    if (button.classList.contains('selected')) { // 年齢にselectedがあれば、タクソノミー遷移
      url = '/voice/' + button.getAttribute('data-slug') + '/';
    }
  });

  let i = 0;
  let isFirst = true;
  ageCheckboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      url += `${isFirst ? '?' : '&'}age%5B%5D=${checkbox.value}`;
      isFirst = false;
    }
  });
  return url;
}

// 検索ボタンが押されたとき
const filterForm = document.getElementById('voice-filter');
if (filterForm) {
  filterForm.onsubmit = function(e) {
    e.preventDefault();
    window.location.href = buildUrl();
  };
}
