(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

var swiper = new Swiper(".Myswiper-rewire", {
  grabCursor: true,
  //   slidesPerView: 3.7,
  spaceBetween: 15,
  speed: 1000,

  pagination: {
    el: ".swiper-pagination"
  },

  // If we need pagination
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  breakpoints: {
    500: {
      slidesPerView: 1
    },
    700: {
      slidesPerView: 2.3
    },
    1024: {
      slidesPerView: 2.8,
      spaceBetween: 20
    },
    1200: {
      slidesPerView: 3.7
    }
  }
});

},{}]},{},[1])//# sourceMappingURL=rewire.js.map
