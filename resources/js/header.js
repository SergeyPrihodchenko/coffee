const header = document.querySelector('.header');

const burger = header.querySelector('.burger');
const nav = header.querySelector('.coffee__nav');
const clsNav = nav.querySelector('.close__nav');

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