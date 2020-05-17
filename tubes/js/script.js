$(document).ready(function () {

  // banner owl carousel
  $("#banner-area .owl-carousel").owlCarousel({
    dots: true,
    items: 1,
    loop: true,
    autoplay: true
  });

  // top sale product carousel
  $("#new-product .owl-carousel").owlCarousel({
    loop: true,
    dots: false,
    margin: 10,
    nav: true,
    responsive: {
      300: {
        items: 1
      },
      500: {
        items: 2
      },
      700: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })

});