const swiper = new Swiper(".Myswiper-rewire", {
  grabCursor: true,
  //   slidesPerView: 3.7,
  spaceBetween: 15,
  speed: 1000,

  pagination: {
    el: ".swiper-pagination",
  },

  // If we need pagination
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    500: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2.3,
    },
    1024: {
      slidesPerView: 2.8,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 3.7,
    },
  },
});
