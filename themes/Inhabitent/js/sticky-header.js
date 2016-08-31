
/**
 * sticky-header.js
 */


// Sticky Header
jQuery(document).ready(function($){

   $window = $(window);
   $window.scroll(function() {

       if ($window.scrollTop() > 750) {
         $('header').addClass('site-header-fixed');
         $('header').removeClass('site-header');
         $('h1').addClass('site-title-fixed');
         $('h1').removeClass('site-title');

       } else if ($window.scrollTop() < 750) {
         $('header').removeClass('site-header-fixed');
         $('header').addClass('site-header');
         $('h1').removeClass('site-title-fixed');
         $('h1').addClass('site-title');
       }
    });

 });
