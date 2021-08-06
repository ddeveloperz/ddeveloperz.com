

$(window).load(function() {

    // Animate loader off screen
    $('.se-pre-con').delay(500).fadeOut('slow',function(){$(this).remove();});
});


    $('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});



 // $(".why-hire-description div").addClass('closeb');
    $('.why-hire-list h4').mouseover(function() {
        $('.why-hire-description').html('').css("opacity","0");
    var wdata = $(this).parent().find('div').html();

     $('.why-hire-description').append(wdata).animate({opacity: 1 }, 1000);


});
 $('.hamburger').click(function(){
        $(this).toggleClass('open');
      $('.menu-overlay').toggleClass('show');
        //   $(this).parents('.main-nav').toggleClass('hamopen');


    });

  $('#toggle-menu').click(function(){

    $(this).toggleClass('toggle-menu-visible').toggleClass('toggle-menu-hidden');
      $('.menu-overlay').toggleClass('show');
    });


;( function( $, window, document, undefined ) {
  'use strict';
  var elSelector  = 'nav',
    $element    = $( elSelector );

  if( !$element.length ) return true;
  var elHeight    = 0,
    elTop     = 0,
    $document   = $( document ),
    dHeight     = 0,
    $window     = $( window ),
    wHeight     = 0,
    wScrollCurrent  = 0,
    wScrollBefore = 0,
    wScrollDiff   = 0;

  $window.on( 'scroll', function() {
    elHeight    = $element.outerHeight();
    dHeight     = $document.height();
    wHeight     = $window.height();
    wScrollCurrent  = $window.scrollTop();
    wScrollDiff   = wScrollBefore - wScrollCurrent;
    elTop     = parseInt( $element.css( 'top' ) ) + wScrollDiff;
    if( wScrollCurrent <= 0 ) // scrolled to the very top; element sticks to the top
      // if(pagename = 'hire-us') {
      //   $element.animate({'top': '0px'}, 400).removeClass('style-nav-alt');
      // } else {
        $element.animate({'top': '0px'}, 400).removeClass('sticky');
      // }
    else if( wScrollDiff > 0 ) // scrolled up; element slides in
      $element.css( 'top', elTop > 0 ? 0 : elTop ).addClass('sticky');
    else if( wScrollDiff < 0 ) // scrolled down
    {
      //if( wScrollCurrent + wHeight >= dHeight - elHeight )  // scrolled to the very bottom; element slides in
        //$element.css( 'top', ( elTop = wScrollCurrent + wHeight - dHeight ) < 0 ? elTop : 0 ).addClass('sticky');

      // scrolled down; element slides out
        $element.css( 'top', Math.abs( elTop ) > elHeight ? -elHeight : elTop ).addClass('sticky');
    }
    wScrollBefore = wScrollCurrent;
  });
})( jQuery, window, document );



