
//===================== Testmonial Swiper =====================
const swiperAvaliacoes = new Swiper('.avaliador__swiper', {
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: 'auto',
  spaceBetween: 16,
  grapCursor: true,
  speed: 600,
  effect: 'coverflow',
  coverflowEffect: {
    rotate:-5,
    depth: 200,
    modifier: .5,
    slideShadows: false,
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  }
});