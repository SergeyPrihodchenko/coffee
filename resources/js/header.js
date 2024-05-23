

window.addEventListener('DOMContentLoaded', ()=>{
const header = document.querySelector('.header'); // элемент header
const burger = header.querySelector('.burger'); // кнопка меню
const nav = header.querySelector('.coffee__nav'); // блок с навигацией
const clsNav = nav.querySelector('.close__nav'); // кнопка закрытия меню
const containerMessager = document.querySelector('.container_messager');
const buttonMessager = containerMessager.querySelector('.btn-messager'); // кнопка чата
const modalMessager = document.querySelector('.container-modal-messager');

window.onscroll = function() {
  if (window.scrollY > 100) {
    header.classList.add("color");
} else {
    header.classList.remove("color");
}
}
});

clsNav.addEventListener('click', () => {
  // nav.classList.remove('animate__slideInUp');
  // nav.classList.add('animate__slideOutDown');
  nav.classList.remove('open');
});

const aticeAnimate = () => {

  if(containerMessager.classList.contains('animate__slideInUp')) {
    setTimeout(() => {
      containerMessager.classList.remove('animate__slideInUp');
      if(containerMessager.classList.contains('animate__tada')) {
        containerMessager.classList.remove('animate__tada');
      }
      setTimeout(() => {
        containerMessager.classList.add('animate__tada');
      }, 500);
    })
  }
  if(containerMessager.classList.contains('animate__tada')) {
    containerMessager.classList.remove('animate__tada');
  }

  setTimeout(() => {
    containerMessager.classList.add('animate__tada');
  }, 1000);
}

burger.addEventListener('click', () => {
  // nav.classList.remove('animate__slideOutDown');
  // nav.classList.add('animate__animated', 'animate__slideInUp');
  nav.classList.add('open');

});

let intervalAnimate = setInterval(aticeAnimate, 4000);

buttonMessager.addEventListener('mouseover', () => {
  clearInterval(intervalAnimate);
})

buttonMessager.addEventListener('mouseout', () => {
  intervalAnimate = setInterval(aticeAnimate, 4000);
})

buttonMessager.addEventListener('click', (e) => {


  containerMessager.classList.add('animate__tada');
  
    containerMessager.style.display = 'none';
    modalMessager.style.display = 'block';
})

