
// Smooth Scroll to Element

$(document).ready(function(){
    $('a[href^="#"]').click(function(e) {
        $('html,body').animate({ scrollTop: jQuery(this.hash).offset().top}, 1000);
        return false;
        e.preventDefault();
    });
});

// HAMBURGER MENU
var openNavigation = function() {
  $('.nav').slideDown();
  $('.toggle').addClass('open');
};

var closeNavigation = function() {
  $('.nav').slideUp();
  $('.toggle').removeClass('open');
};

$( '.toggle' ).on( 'click', function( e ) {  
  if ( $('.nav').is(':visible') ) {
    closeNavigation();
  } else {
    openNavigation();    
  }
});

$('.nav a').on('click', function(e){
  closeNavigation();
});

