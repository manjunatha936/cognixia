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
  var lastKnownScrollY = 0;
  var currentScrollY = 0;
  var ticking = false;
  var idOfHeader = "header";
  var eleHeader = null;
  const classes = {
    pinned: "header-pin",
    unpinned: "header-unpin",
  };

  function onScroll() {
    currentScrollY = window.pageYOffset;
    requestTick();
  }

  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(update);
    }
    ticking = true;
  }

  function update() {
    if (currentScrollY < lastKnownScrollY) {
      pin();
    } else if (currentScrollY > lastKnownScrollY) {
      unpin();
    }
    lastKnownScrollY = currentScrollY;
    ticking = false;
  }

  function pin() {
    if (eleHeader.classList.contains(classes.unpinned)) {
      eleHeader.classList.remove(classes.unpinned);
      eleHeader.classList.add(classes.pinned);
    }
  }

  function unpin() {
    if (
      eleHeader.classList.contains(classes.pinned) ||
      !eleHeader.classList.contains(classes.unpinned)
    ) {
      eleHeader.classList.remove(classes.pinned);
      eleHeader.classList.add(classes.unpinned);
    }
  }
  window.onload = function () {
    // header
    eleHeader = document.getElementById(idOfHeader);
    document.addEventListener("scroll", onScroll, false);
  };
};

invokeOnLoad();
// parsley
$('#form').parsley().on('field:validated', function() {
  var ok = $('.parsley-error').length === 0;
  
  console.log("validated")
  $('#error').show();  
 })
 .on('form:submit', function() {
     $("#successfull_msg").show()
     $("#modal_cnt").hide()
     return false; 
 })
