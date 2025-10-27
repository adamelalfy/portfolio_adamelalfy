import Swiper from 'swiper/bundle';

export default class Carousel {
  constructor(element) {
    this.element = element;
    this.options = {
      spaceBetween: 20,
    };
    this.setOptions();
    this.init();
  }

  setOptions() {
    if ('fonctionnalites' in this.element.dataset) {
      this.options.slidesPerView = 1;
      this.options.scrollbar = {
        el: '.swiper-scrollbar',
        draggable: true,
      };

      // Navigation arrows
      this.options.navigation = {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      };
    }
  }

  init() {
    const swiper = new Swiper(this.element, this.options);
  }
}

// if ('activites' in this.element.dataset) {
//   // this.options.slidesPerView = 1;
//   this.options.scrollbar = {
//     el: '.swiper-scrollbar',
//     draggable: true,
//   };
// }

// if ('hero' in this.element.dataset) {
//   this.options.autoplay = true;
//   this.options.loop = true;
//   this.options.autoplay = {
//     delay: 2000,
//     disableOnInteraction: false,
//   };
//   this.options.effect = 'coverflow';
// }
