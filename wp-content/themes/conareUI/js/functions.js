
var $ = jQuery.noConflict();
$(document).ready(function() {

    // Global Menssage
    $(function() {
        $('.global-messages').css('display', 'block'); // Fades in the CTA div after the page has loaded
        $('.global-messages .close').click(function(){ // Class for the close button
            $(this).parent().fadeOut(500); // Hide the CTA div
            $.cookie('cookie', 'monster', { expires: null, path: '/' }); // Set Cookie( 'name', 'value' { expires: null, path '/'})
        });

        if (typeof $.cookie('cookie') === 'undefined'){ // Checks to see if the cookie exists
            $('.global-messages').removeClass('cookie'); // IF No Cookie
        } else {
            $('.global-messages').addClass('cookie') // IF Cookie
        }
    });
    // Scroll Top
    $(function() {
        $('.scroll-down').click (function() {
          $('html, body').animate({scrollTop: $('#section-new-deparment').offset().top }, 'slow');
          return false;
        });
    });


    // Carousel de Indicadores
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

    // Nuestras Universidades
    $('#nuestras-universidades ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('#nuestras-universidades ul.tabs li').removeClass('current');
        $('#nuestras-universidades .tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })


    // Panel Header Mobile
    $(function() {
        var list = $('.dropdown-list');
        var link = $('.active-drop-down');
        link.click(function(e) {
            e.preventDefault();
            list.slideToggle(50);
        });
        list.find('li').click(function() {
            var text = $(this).html();
            var icon = '<i class="fas fa-chevron-down"></i>';
            link.html(text+icon);
            list.slideToggle(50);
        });
    });

    // Hamburger Icon 
    $(".toggle-menu").click(function() {
        $(this).toggleClass("active");
        $('.menu-drawer').toggleClass("open");
    });
   
});

