 $(window).load(function () {
        var $container = $('#portfolio-div');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.caegories a').click(function () {
            $('.caegories .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });


$('.portfolio-link').magnificPopup({
  type: 'image',
   midClick: true,

          removalDelay: 100,
          mainClass: 'my-mfp-slide-bottom',
         preloader: true,
         titleSrc: 'title'
    // other options
});
