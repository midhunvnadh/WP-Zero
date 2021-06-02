$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 0) {
      $("#site-header").addClass("shadow-sm");
    } else {
      $("#site-header").removeClass("shadow-sm");
    }
  });
  $(".sm-nav .close").on("click", () => {
    $(".sm-nav").fadeOut();
    $("body").removeClass("overflow-hidden");
  });
  $(".sm-header-holder .navigation-toggle").on("click", () => {
    $(".sm-nav").fadeIn();
    $("body").addClass("overflow-hidden");
  });
});
