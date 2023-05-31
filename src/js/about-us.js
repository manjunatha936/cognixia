const swiper = new Swiper(".MyswiperVerticalslide", {
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 15,
  speed: 750,
  direction: "vertical",
  autoplay: true,
  loop: true,

  pagination: {
    el: ".swiper-pagination",
  },
});
