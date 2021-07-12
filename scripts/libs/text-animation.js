class TextAnimation {
  constructor(el) {
    this.DOM = {};
    this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
  }
  animate() {
    this.DOM.el.classList.toggle('reveal');
  }
}
class BgAnimation {
  constructor(el) {
    this.DOM = {};
    this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
  }
  animate() {
    this.DOM.el.classList.toggle('reveal');
  }
}
//ページロード時のテキストアニメーション
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(() => {
    const loadAnimation = document.querySelector('.clip-js1');
    loadAnimation.classList.toggle('reveal');
  }, 2000);

  // const loadAnimation2 = document.querySelectorAll('.clip-js2');
  // loadAnimation2.forEach(function (element) {
  //   setTimeout(() => {
  //     element.classList.add("reveal");
  //   }, 1000)
  // });
});