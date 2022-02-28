import Swiper from 'swiper/bundle';

function swiper($selector, $options) {
  return new Swiper($selector, $options);
}

$(function() {
  const bannerSlider = new Swiper('.slider-banner-container', {
    direction: 'horizontal',
    slidesPerView: 1,
    speed: 2000,
    centeredSlides: true,
    effect: 'fade',
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
  });
  const blockSlider = new Swiper('.swiper-container-block-slider', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    speed: 600,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  const wideSlider = new Swiper('.swiper-container-wide-slider', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    speed: 600,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
});