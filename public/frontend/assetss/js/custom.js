
$('#popular-silder').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    autoplay:true,
    autoplayTimeout:5000,
     navText : ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
})
    // ===== Scroll to Top ==== 
     $(window).scroll(function () {
        $(this).scrollTop() >= 50 ? $("#back-to-top").fadeIn(30) : $("#back-to-top").fadeOut(30)
    }), $("#back-to-top").click(function () {
        $("body,html").animate({
            scrollTop: 0
        }, 500)
    })
