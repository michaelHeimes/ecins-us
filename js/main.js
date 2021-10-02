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
    arrows: true,
    cssEase: 'ease',
    lazyLoad: 'ondemand',
    prevArrow: '<button type="button" class="slick-btn slick-prev pull-left"><svg width="22px" height="42px" viewBox="0 0 22 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Homepage-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="bevel"><g id="ECINS-Homepage" transform="translate(-276.000000, -5157.000000)" stroke="#1A6A89" stroke-width="3"><polyline id="Path" points="296.090064 5158.69259 277.090064 5177.69259 296.090064 5196.69259"></polyline></g></g></svg></button>',
    nextArrow: '<button type="button" class="slick-btn slick-next pull-right"><svg width="23px" height="42px" viewBox="0 0 23 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Homepage-Dev" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="bevel"><g id="ECINS-Homepage" transform="translate(-1141.000000, -5157.000000)" stroke="#1A6A89" stroke-width="3"><polyline id="Path" transform="translate(1152.590064, 5177.692586) rotate(180.000000) translate(-1152.590064, -5177.692586) " points="1162.09006 5158.69259 1143.09006 5177.69259 1162.09006 5196.69259"></polyline></g></g></svg></button>'
  }); // $( '.footer__subscribe button' ).modaal({
  // 	content_source: '#subscribe-popup'
  // });
    
    $('.hb-slider').slick({
		infinite: true,
	    dots: true,
	    speed: 500,
	    fade: false,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    arrows: false,
	    cssEase: 'ease',
	    rows: 0
	});
  
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