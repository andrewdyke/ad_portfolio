$(document).ready(function(){

  // Smooth Scroll
  $('a[href^="#"]').click(function(e) {
      e.preventDefault();
      $('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
      return false;
  });

  // Hamburger Menu
  var openNavigation = function() {
    $('.nav').slideDown();
    $('.toggle').addClass('open');
  };

  var closeNavigation = function() {
    $('.nav').slideUp();
    $('.toggle').removeClass('open');
  };

  $('.toggle').on('click', function(e) {  
    if ($('.nav').is(':visible')) {
      closeNavigation();
    } else {
      openNavigation();    
    }
  });

  $('.nav a').on('click', function(e){
    closeNavigation();
  });

});