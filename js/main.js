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
  
  
//   Region Cookie
/*!
* js-cookie Plugin v3.0.1
* https://github.com/carhartl/jquery-cookie

/*! js-cookie v3.0.1 | MIT  https://github.com/js-cookie/js-cookie */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,o=e.Cookies=t();o.noConflict=function(){return e.Cookies=n,o}}())}(this,(function(){"use strict";function e(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)e[o]=n[o]}return e}return function t(n,o){function r(t,r,i){if("undefined"!=typeof document){"number"==typeof(i=e({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),t=encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=t+"="+n.write(r,t)+c}}return Object.create({set:r,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var t=document.cookie?document.cookie.split("; "):[],o={},r=0;r<t.length;r++){var i=t[r].split("="),c=i.slice(1).join("=");try{var u=decodeURIComponent(i[0]);if(o[u]=n.read(c,u),e===u)break}catch(e){}}return e?o[e]:o}},remove:function(t,n){r(t,"",e({},n,{expires:-1}))},withAttributes:function(n){return t(this.converter,e({},this.attributes,n))},withConverter:function(n){return t(e({},this.converter,n),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(n)}})}({read:function(e){return'"'===e[0]&&(e=e.slice(1,-1)),e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}},{path:"/"})}));


	if(Cookies.get('domain') == null) {
		$('.pum-overlay').css('top', '-200vh');
	    $('.region-picker').addClass('show');
	} else {
		$('.pum-overlay').css('top', '0');
	}


	$('.region-selector').on('click', 'li.uk a', function(){
		Cookies.set('domain', 'uk', {expires: 30 });
	});

	$('.region-selector').on('click', 'li.us a', function(){
		Cookies.set('domain', 'us', {expires: 30 });
	});
	
	$('.region-selector').on('click', 'li.au a', function(){
		Cookies.set('domain', 'us', {expires: 30 });
	});  

	$('.country-nav').on('click', 'a', function(){
		Cookies.set('country-nav', 'yes', {});
	}); 
	
  
})(jQuery);