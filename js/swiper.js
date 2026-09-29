document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new Swiper('.swiper-container', {
      direction: 'horizontal', // or 'vertical'
      loop: true,
      centeredSlides: true,

      // Autoplay
      autoplay: {
          delay: 5000,
          disableOnInteraction: false,
      },

      // Use slide or fade transition effect
      speed: 2000,
      effect: 'fade',
      fadeEffect: {
          crossFade: true,
      },
  });
});
