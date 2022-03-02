import Swiper from 'swiper/bundle';

function swiper($selector, $options) {
  return new Swiper($selector, $options);
}

$(function() {
  const bannerSlider = new Swiper('.slider-banner-container', {
    direction: 'horizontal',
    slidesPerView: 1,
    speed: 1000,
    loop: true,
    centeredSlides: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 6000,
      disableOnInteraction: true,
    },
  });
});