// var filter_fix = ".cover";
//         var mixer = mixitup(filter_fix,{
//             load: {
//                 filter: '.smarter-item22'
//             }
//         });
 
// AOS.init();

(function($){
$(document).ready(function(){
    // Mobile Menu
    $('.menu-icon').click(function(){
        $('.menu').slideToggle( 1000);
    });

    // Question99
    $('.Question99').click(function(){
        $(this).parent().find('.arrow').toggleClass('arrow-animate');
        $(this).parent().find('.up').slideToggle(200);
    });
    // owlCarousel
    $(".trusted_text").owlCarousel({
            loop:true,
            items:1,
            nav:true,
            dots:false,
            autoplay:true,
            autoplayTimeout:3000,
            navText:['<i class="fa-solid fa-angle-left"></i>','<i class="fa-solid fa-angle-right"></i>']
             
        });
    // magnificPopup
        // $('#popupVideo').magnificPopup({
        //     // type:'iframe',
        //     disableOn: 700,
        //     type: 'iframe',
        //     mainClass: 'mfp-fade',
        //     removalDelay: 160,
        //     preloader: false,
        //     fixedContentPos: false

        // });

      $('#popupVideo').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            // mainClass: 'mfp-fade',
            // removalDelay: 160,
            // preloader: false,
            // fixedContentPos: false
        });
         
    });
     
    // $(document).ready(function(){
        $('.counter1').countMe(40,65);
        $('.counter2').countMe(40,65);
        $('.counter3').countMe(40,65);
        $('.counter4').countMe(40,65);
    // });

})(jQuery);