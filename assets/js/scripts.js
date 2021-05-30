$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $("#site-header").addClass("shadow-sm");
    } else {
      $("#site-header").removeClass("shadow-sm");
    }
  });
});
