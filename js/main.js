$(document).ready(function() {
    /*========== Toggle ==========*/
    $(document).on('click', '#book_event', function() {
        $(this).addClass("active");
        $("#book_tour").removeClass("active");

        $("#tour_block").addClass("hide");
        $("#event_block").removeClass("hide");
    });
    $(document).on('click', '#book_tour', function() {
        $(this).addClass("active");
        $("#book_event").removeClass("active");
        $("#event_block").addClass("hide");
        $("#tour_block").removeClass("hide");
    });
    $(document).on('click', '.toggle', function() {
        $(".toggle").toggleClass("active");
        $("html").toggleClass("flow");
        $("[nav]").toggleClass("active");
    });
    // $(document).on('click', '[nav] > ul > li > a', function() {
    //     $(".toggle").removeClass("active");
    //     $("html").removeClass("flow");
    //     $("[nav]").removeClass("active");
    // });
    /*____ FAQ's ____*/
    $(document).on("click", ".faqBlk > h5", function() {
        $(".faqBlk")
            .not($(this).parent().toggleClass("active"))
            .removeClass("active");
        $(".faqBlk > .txt")
            .not($(this).parent().children(".txt").slideToggle())
            .slideUp();
    });
    $(".banner-carousel").owlCarousel({
        autoplay: true,
        nav: false,
        navText: [
            '<i class="fa-solid fa-circle-chevron-left"></i>',
            '<i class="fa-solid fa-circle-chevron-right"></i>',
        ],
        // navText: [ 'prev', 'next' ],
        dots: true,
        loop: true,
        autoWidth: false,
        autoHeight: true,
        smartSpeed: 1000,
        autoplayTimeout: 10000,
        margin: 20,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                autoHeight: true,
                dots: true,
                nav: false,
            },
            600: {
                items: 1,
            },
            991: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });
    // =================owl===========
    $(".testi-carousel").owlCarousel({
        autoplay: true,
        nav: false,
        navText: [
            '<i class="fa-solid fa-circle-chevron-left"></i>',
            '<i class="fa-solid fa-circle-chevron-right"></i>',
        ],
        // navText: [ 'prev', 'next' ],
        dots: true,
        loop: true,
        autoWidth: false,
        autoHeight: true,
        smartSpeed: 1000,
        autoplayTimeout: 10000,
        margin: 20,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                autoHeight: true,
                dots: true,
                nav: false,
            },
            600: {
                items: 1,
            },
            991: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
    // ==============datepicker============
    $('.datepicker').datepicker({
        dateFormat: 'MM dd, yy',
        changeMonth: true,
        changeYear: true,
        yearRange: '1900:2060'
    });

});