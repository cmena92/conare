$(document).ready(function() {
    $(function() {
        $('.scroll-down').click (function() {
          $('html, body').animate({scrollTop: $('#section-new-deparment').offset().top }, 'slow');
          return false;
        });
    });

    $('#indicadores-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        mouseDrag: false,
        autoplay: true,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1024:{
                items:1
            }
        }
    })

    $('#nuestras-universidades ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('#nuestras-universidades ul.tabs li').removeClass('current');
        $('#nuestras-universidades .tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })
});

