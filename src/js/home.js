const swiper = new Swiper(".Myswiper", {
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

// Video

// $(document).ready(function () {
//   $("#custom-video").magnificPopup({
//     type: "iframe",
//     callbacks: {
//       markupParse: function (template, value, item) {
//         var videoSrc = $(item.el).data("video");
//         var videoElement = template.find("video");
//         videoElement.attr("src", videoSrc);
//         videoElement.addClass("your-class-name");
//       },
//     },
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const exampleModal = document.getElementById("video-modal");
//   if (exampleModal) {
//     exampleModal.addEventListener("show.bs.modal", (event) => {
//       // Button that triggered the modal
//       const button = event.relatedTarget;
//       // Extract info from data-bs-* attributes
//       const recipient = button.getAttribute("data-bs-whatever");
//       // If necessary, you could initiate an Ajax request here
//       // and then do the updating in a callback.

//       // Update the modal's content.
//       const modalTitle = exampleModal.querySelector(".modal-title");

//       modalTitle.textContent = `New message to ${recipient}`;
//     });
//   }
// });

$(document).ready(function () {
  // Initialize the modal
  $("#video-modal").on("shown.bs.modal", function () {
    // Get the video element
    var video = document.getElementById("cog-video-model");
    // Play the video
    video.play();
  });

  // Pause the video when the modal is closed
  $("#video-modal").on("hidden.bs.modal", function () {
    // Get the video element
    var video = document.getElementById("cog-video-model");
    // Pause the video
    video.pause();
  });
});
