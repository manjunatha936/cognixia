// Mobile swiper slider
(function () {
  "use strict";
  var sliders = document.querySelectorAll(".js-slider");

  sliders.forEach(function (slider) {
    var breakpoint = window.matchMedia("(min-width: 31.25em)");
    // var mySwiper;
    var swiperInstance;

    var breakpointChecker = function () {
      if (breakpoint.matches === true) {
        if (swiperInstance !== undefined) swiperInstance.destroy(true, true);
        return;
      } else if (breakpoint.matches === false) {
        return createSwiper();
      }
    };

    var createSwiper = function () {
      var sliderContainer = slider.querySelector(".InsightcardSwiper");
      var techlogiesSwiper = slider.querySelector(".technologiesSwiper");
      // Our-solution slider
      swiperInstance = new Swiper(sliderContainer, {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 25,
        speed: 1000,
        keyboardControl: true,
        pagination: {
          el: ".swiper-pagination",
        },
        navigation: {
          prevEl: ".swiper-button-prev",
          nextEl: ".swiper-button-next",
        },
        // grabCursor: true,
      });

      // Technogies swiperslider
      swiperInstance = new Swiper(techlogiesSwiper, {
        loop: false,
        slidesPerView: 1.1,
        spaceBetween: 15,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next22",
          prevEl: ".swiper-button-prev22",
        },
        // grabCursor: true,
      });
    };

    breakpoint.addListener(breakpointChecker);
    breakpointChecker();
  });
})(); /* IIFE end */
