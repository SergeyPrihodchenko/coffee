import Swiper from 'swiper/bundle';
import { Pagination, Navigation } from 'swiper/modules';


const swiper = new Swiper('.swiper', {
  // Optional parameters
  modules: [Pagination, Navigation],
  slidesPerView: 1,
  loop: true,
  // autoplay: {
  //   delay: 2500,
  //   disableOnInteraction: false,
  // },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    440: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768:{
      slidesPerView: 3,
      spaceBetween: 15,
    },
    992:{
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024:{
      slidesPerView: 3,
      spaceBetween: 25,
    }
  },

  // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});




