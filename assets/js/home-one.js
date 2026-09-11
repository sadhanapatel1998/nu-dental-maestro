(function ($) {
  "use strict";

  //====== Slick Slider

  if ($(".testimonial-slider").length) {
    $(".testimonial-slider").slick({
      dots: false,
      arrows: false,
      infinite: true,
      speed: 800,
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="prev"><i class="far fa-angle-left"></i></div>',
      nextArrow: '<div class="next"><i class="far fa-angle-right"></i></div>',
    });
  }

  if ($(".hero-slider").length) {
    $(".hero-slider").slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 4000,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<div class="prev"><i class="far fa-angle-left"></i></div>',
      nextArrow: '<div class="next"><i class="far fa-angle-right"></i></div>',
    });
  }
})(window.jQuery);
