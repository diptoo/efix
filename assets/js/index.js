var yourNavigation = $(".hide");
    stickyDiv = "show";
    yourHeader = $('.animation').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > yourHeader ) {
    yourNavigation.addClass(stickyDiv);
  } else {
    yourNavigation.removeClass(stickyDiv);
  }
});