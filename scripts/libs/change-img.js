const child = document.querySelector('.child');
const logo = document.querySelector('.logo');
const logoPc = document.querySelector('.logo-pc');
const navPc = document.querySelector('.pc-nav');
const mBtn = document.querySelector('.mobile-menu__btn');
const callback = function (entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      logo.classList.add('inview');
      logoPc.classList.add('inview');
      navPc.classList.add('inview');
      mBtn.classList.add('inview');
    } else {
      logo.classList.remove('inview');
      logoPc.classList.remove('inview');
      navPc.classList.remove('inview');
      mBtn.classList.remove('inview');
    }
  });
}
const io2 = new IntersectionObserver(callback, {
  rootMargin: '-100px 0px',
});
io2.observe(child);