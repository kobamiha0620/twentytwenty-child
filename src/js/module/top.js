
export function addStickyScrollListener(toFixPoint) {
  function calculatePositions() {

    const toFixPointElement = document.getElementById(toFixPoint); //フッター
    const fixLettersElement = document.getElementById('snsBlock'); //固定するテキスト
    const footerHeight = toFixPointElement.offsetHeight; // フッターの高さを取得
    const docHeight = document.documentElement.scrollHeight; // ドキュメントの高さ
    const dispHeight = window.innerHeight; // 表示領域の高さ

    const footerBottom = docHeight - dispHeight - footerHeight; // フッターの底部の位置を計算

    console.log(footerBottom + 'footerBottom');
    console.log(window.scrollY + 'window.scrollY');

    if (window.scrollY >= footerBottom) {
      fixLettersElement.classList.remove('fadeIn');
      fixLettersElement.classList.add('fadeOut');
    } else {
      fixLettersElement.classList.add('fadeIn');
      fixLettersElement.classList.remove('fadeOut');
    }
  }

  window.addEventListener('scroll', calculatePositions);
  window.addEventListener('resize', calculatePositions);
  window.addEventListener('orientationchange', calculatePositions);

}

