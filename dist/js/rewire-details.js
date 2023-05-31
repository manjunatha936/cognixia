(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);throw new Error("Cannot find module '"+o+"'")}var f=n[o]={exports:{}};t[o][0].call(f.exports,function(e){var n=t[o][1][e];return s(n?n:e)},f,f.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";

$(document).ready(function () {
  var content = $(".content");
  var readMoreLink = $(".read-more");

  var fullHeight = content.height();
  var partialHeight = 400; // The height to show initially

  if (fullHeight > partialHeight) {
    content.css("height", partialHeight + "px");
    readMoreLink.show();
  }

  readMoreLink.on("click", function (e) {
    e.preventDefault();
    if (content.height() === partialHeight) {
      content.animate({ height: fullHeight }, 200);
      readMoreLink.text("Read More");
    } else {
      content.animate({ height: partialHeight }, 200);
      readMoreLink.text("Read Less");
    }
  });
});

},{}]},{},[1])//# sourceMappingURL=rewire-details.js.map
