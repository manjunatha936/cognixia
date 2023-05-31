// LOAD MENU AFTER MENU ITEM IS FIXED
const invokeOnLoad = () => {
  const nav = document.querySelector(".navbar");
  nav.classList.add("loaded");

  window.addEventListener("scroll", () => {
    const wScroller = window.scrollY;
    const navbarHeight = document.querySelector(".navbar").offsetHeight;

    if (wScroller > navbarHeight) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  });

  // Smoth scrol Header hide and show
  // var lastKnownScrollY = 0;
  // var currentScrollY = 0;
  // var ticking = false;
  // var idOfHeader = "header";
  // var eleHeader = null;
  // const classes = {
  //   pinned: "header-pin",
  //   unpinned: "header-unpin",
  // };

  // function onScroll() {
  //   currentScrollY = window.pageYOffset;
  //   requestTick();
  // }

  // function requestTick() {
  //   if (!ticking) {
  //     requestAnimationFrame(update);
  //   }
  //   ticking = true;
  // }

  // function update() {
  //   if (currentScrollY < lastKnownScrollY) {
  //     pin();
  //   } else if (currentScrollY > lastKnownScrollY) {
  //     unpin();
  //   }
  //   lastKnownScrollY = currentScrollY;
  //   ticking = false;
  // }

  // function pin() {
  //   if (eleHeader.classList.contains(classes.unpinned)) {
  //     eleHeader.classList.remove(classes.unpinned);
  //     eleHeader.classList.add(classes.pinned);
  //   }
  // }

  // function unpin() {
  //   if (
  //     eleHeader.classList.contains(classes.pinned) ||
  //     !eleHeader.classList.contains(classes.unpinned)
  //   ) {
  //     eleHeader.classList.remove(classes.pinned);
  //     eleHeader.classList.add(classes.unpinned);
  //   }
  // }
  // window.onload = function () {
  //   // header
  //   eleHeader = document.getElementById(idOfHeader);
  //   document.addEventListener("scroll", onScroll, false);
  // };
};

invokeOnLoad();

// Megamenu

window.addEventListener("resize", function () {
  "use strict";
  window.location.reload();
});

document.addEventListener("DOMContentLoaded", function () {
  /////// Prevent closing from click inside dropdown
  document.querySelectorAll(".dropdown-menu").forEach(function (element) {
    element.addEventListener("click", function (e) {
      e.stopPropagation();
    });
  });
  // make it as accordion for smaller screens
  if (window.innerWidth < 992) {
    // close all inner dropdowns when parent is closed
    document
      .querySelectorAll(".navbar .dropdown")
      .forEach(function (everydropdown) {
        everydropdown.addEventListener("hidden.bs.dropdown", function () {
          // after dropdown is hidden, then find all submenus
          this.querySelectorAll(".submenu").forEach(function (everysubmenu) {
            // hide every submenu as well
            everysubmenu.style.display = "none";
          });
        });
      });
    // document.querySelectorAll(".dropdown-menu a").forEach(function (element) {
    //   element.addEventListener("click", function (e) {
    //     let nextEl = this.nextElementSibling;
    //     if (nextEl && nextEl.classList.contains("submenu")) {
    //       // prevent opening link if link needs to open dropdown
    //       e.preventDefault();
    //       console.log(nextEl);
    //       if (nextEl.style.display == "block") {
    //         nextEl.style.display = "none";
    //       } else {
    //         nextEl.style.display = "block";
    //       }
    //     }
    //   });
    // });
  }
  // end if innerWidth
});
