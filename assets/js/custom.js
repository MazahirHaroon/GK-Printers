/* jQuery Preloader
 -----------------------------------------------*/
$(window).load(function () {
  $('.preloader').fadeOut(1000); // set duration in brackets
});
$(document).ready(function () {
  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
  $('.navbar-collapse a').click(function () {
    $(".navbar-collapse").collapse('hide');
  });
  /* jQuery to collapse the navbar on scroll
    -----------------------------------------------*/
  $(window).scroll(function () {
    if ($(".navbar").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
  });
  /* BxSlider
    -----------------------------------------------*/
  (function (window, $) {
    'use strict';
    // Cache document for fast access.
    var document = window.document;
    function mainSlider() {
      $('.bxslider').bxSlider({
        auto: true,
        pagerCustom: '#bx-pager',
        mode: 'fade',
        nextText: '',
        prevText: ''
      });
    }
    mainSlider();
  })(window, jQuery);
  /* Owl Carousel
   -----------------------------------------------*/
  $(document).ready(function () {
    $("#owl-work").owlCarousel({
      autoPlay: 3000,
      items: 4,
      itemsDesktop: [1199, 4],
      itemsDesktopSmall: [979, 2],
    });
  });
  /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    $('#work').parallax("100%", 0.3);
    $('#about').parallax("100%", 0.2);
    $('#team').parallax("100%", 0.3);
    $('#portfolio').parallax("100%", 0.1);
    $('#plan').parallax("100%", 0.3);
    $('#contact').parallax("100%", 0.2);
  }
  initParallax();
  /* wow
  -------------------------------*/
  new WOW({
    mobile: false
  }).init();
});