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

// custom_dropdown
$(document).ready(function() {
  $('.dropdown').each(function() {
    var dropdownWrapper = $(this);
    var dropdownBtn = dropdownWrapper.find('.dropdown__button');
    var dropdownList = dropdownWrapper.find('.dropdown__list');
    var dropdownItems = dropdownList.find('.dropdown__list-item');
    var dropdownInput = dropdownWrapper.find('.dropdown__input');

    dropdownBtn.click(function() {
      dropdownList.toggleClass('dropdown__list_visible');
      $(this).toggleClass('dropdown__button_active');
    });

    dropdownItems.click(function(e) {
      dropdownItems.removeClass('dropdown__list-item_active');
      $(this).addClass('dropdown__list-item_active');
      dropdownBtn.text($(this).text());
      dropdownInput.val($(this).data('value'));
      dropdownList.removeClass('dropdown__list_visible');
    });

    $(document).click(function(e) {
      if (!$(e.target).is(dropdownBtn)) {
        dropdownBtn.removeClass('dropdown__button_active');
        dropdownList.removeClass('dropdown__list_visible');
      }
    });

    $(document).keydown(function(e) {
      if (e.key === 'Tab' || e.key === 'Escape') {
        dropdownBtn.removeClass('dropdown__button_active');
        dropdownList.removeClass('dropdown__list_visible');
      }
    });
  });
});
  // form-success
$('#contact-form').parsley().on('field:validated', function() {
  var ok = $('.parsley-error').length === 0;
  
  console.log("validated")
  $('#error').show();  
 })
 .on('form:submit', function() {
     $("#contact-success").show()
     $(".contact-row").hide()
     return false; 
 })
// search

var content = [
  { title: 'Microsoft' },
  { title: 'java' },
  { title: 'javascript' },
  { title: 'Machine Learning & Artificial Intelligence' },
  { title: 'Robotic Process Automation' },
  { title: 'Business Trainings ' },
  { title: 'Application Development & Design' },
  { title: 'Cyber Security' },
  { title: 'Internet of Things' },
  { title: 'Robotic Process Automation' },
  { title: 'Cloud Computing' },
  // etc
];
$('.ui.search')
.search({
  source: content
})
;