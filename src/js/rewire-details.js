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
