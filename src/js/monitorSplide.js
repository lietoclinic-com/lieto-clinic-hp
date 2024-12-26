var monitorSplide = document.getElementById('monitorSplide');
if(monitorSplide) {
  const splide = new Splide("#monitorSplide", {
    autoplay: true, // 自動再生
    type: "loop", // ループ
    rewind: true,
    pauseOnHover: false, // カーソルが乗ってもスクロールを停止させない
    pauseOnFocus: false, // 矢印をクリックしてもスクロールを停止させない
    pagination: false, // ページネーション非表示
    interval: 5000, // 自動再生の間隔
    speed: 1000, // スライダーの移動時間
    gap: 16,
  }).mount();

  // 次のスライドが表示されるタイミングで発生
  splide.on("active", function () {
    slideIndex();
  });
  function slideIndex() {
    // 現在のスライドが何枚目かを取得
    document.getElementById("slide-current").textContent = splide.index + 1;
    // スライドの総数を取得
    document.getElementById("slide-length").textContent = splide.length;
  }
  slideIndex();
}
