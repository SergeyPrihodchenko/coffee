

window.addEventListener('DOMContentLoaded', ()=>{
  const header = document.querySelector('.header'); // элемент header
const burger = header.querySelector('.burger'); // кнопка меню
const nav = header.querySelector('.coffee__nav'); // блок с навигацией
const clsNav = nav.querySelector('.close__nav'); // кнопка закрытия меню

burger.addEventListener('click', () => {
  // nav.classList.remove('animate__slideOutDown');
  // nav.classList.add('animate__animated', 'animate__slideInUp');
  nav.classList.add('open');

});

clsNav.addEventListener('click', () => {
  // nav.classList.remove('animate__slideInUp');
  // nav.classList.add('animate__slideOutDown');
  nav.classList.remove('open');
});

window.onscroll = function() {
  if (window.scrollY > 100) {
    header.classList.add("color");
} else {
    header.classList.remove("color");
}
}
});