(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

// Mobile swiper slider
(function () {
  "use strict";

  var sliders = document.querySelectorAll(".js-slider");

  sliders.forEach(function (slider) {
    var breakpoint = window.matchMedia("(min-width: 31.25em)");
    // var mySwiper;
    var swiperInstance;

    var breakpointChecker = function breakpointChecker() {
      if (breakpoint.matches === true) {
        if (swiperInstance !== undefined) swiperInstance.destroy(true, true);
        return;
      } else if (breakpoint.matches === false) {
        return createSwiper();
      }
    };

    var createSwiper = function createSwiper() {
      var sliderContainer = slider.querySelector(".InsightcardSwiper");
      // Our-solution slider
      swiperInstance = new Swiper(sliderContainer, {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 25,
        speed: 1000,
        keyboardControl: true,
        pagination: {
          el: ".swiper-pagination"
        },
        navigation: {
          prevEl: ".swiper-button-prev",
          nextEl: ".swiper-button-next"
        }
        // grabCursor: true,
      });
    };

    breakpoint.addListener(breakpointChecker);
    breakpointChecker();
  });
})(); /* IIFE end */

},{}]},{},[1])//# sourceMappingURL=blog-details.js.map
