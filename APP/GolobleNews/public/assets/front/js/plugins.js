var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        450:{
            items:2,
            nav:false
        },
        750:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:true,
        }
    }
});
$( function() {
    $( "#tabs" ).tabs();

} );