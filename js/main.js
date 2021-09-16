"use strict";

// Main JS file for Custom JS for sixheads theme
(function ($) {
  // ----------------------------------
  // Slick.js initialisation
  $('.slider--testimonials').slick({
    infinite: true,
    dots: true,
    speed: 500,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    cssEase: 'ease',
    lazyLoad: 'ondemand'
  }); // $( '.footer__subscribe button' ).modaal({
  // 	content_source: '#subscribe-popup'
  // });
  // ----------------------------------------
  // Smooth Scroll

  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=".concat(this.hash.slice(1), "]"));

      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  }); // ----------------------------------
  // Accordion Setup

  $('.accordionButton').click(function () {
    $('.accordionButton').removeClass('on').attr('aria-expanded', 'false');
    $('.accordionContent').slideUp('normal').attr('aria-hidden', 'true');

    if (true == $(this).next().is(':hidden')) {
      $(this).addClass('on');
      $(this).attr('aria-expanded', 'true');
      $(this).next().slideDown('normal').attr('aria-hidden', 'false');
    }
  });
  $('.accordionButton').mouseover(function () {
    $(this).addClass('over');
  }).mouseout(function () {
    $(this).removeClass('over');
  });
  $('.accordionContent').hide();
})(jQuery);