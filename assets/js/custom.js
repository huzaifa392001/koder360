if ($(window).width() > 824) {
    AOS.init();
}
$(window).on("scroll", function () {
    AOS.init();
});


$(function () {
    // $("#loader").fadeOut(2000, function() {
    //     $(".mmbody").fadeIn(1000);        
    // });
    gsap.to("#loader", 0.3, {duration: 2500, autoAlpha: 0, display: 'none'});
    gsap.to("#loadertext", {duration: 500, xPercent: -50});
    lenisSetup()
});


// AOS.init();

if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
} else {
    window.onbeforeunload = function () {
        window.scrollTo(0, 0);
    }
}


$("#entry-box_close").click(function () {
    $("#entry-popup").fadeOut();
}),
    $(".popup-open").click(function () {
        $("#entry-popup").css("display", "flex").fadeIn();
    }),
    function popupFunc() {
        setTimeout(function () {
            $("#entry-popup").css("display", "flex").fadeIn();
        }, 3e4);
    };

$('.popup-open').click(function () {
    var priceText = $(this).parents('.package-box').find('.packg-price').text();
    var titleText = $(this).parents('.package-box').find('.packg-hd').text();

    $('#entry-popup input[name="price"]').val(priceText);
    $('#entry-popup input[name="title"]').val(titleText);
    // $('#entry-popup').css('display', 'block');
})

$(".main-header .nav-item").click(function () {
    $(".main-header .nav-item").removeClass("active"); // This will remove active classes from all <li> tags
    $(this).addClass("active"); // This will add active class in clicked <li>   
});

$('[data-targetit]').on('click', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).fadeIn();
    $('.packages_slider').slick('setPosition');

    $('.portfoliomm .row').slick('setPosition');

});


$('.awards-slider').owlCarousel({
    loop: true,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    margin: 15,
    autoplayHoverPause: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 400,
    nav: true,
    responsive: {
        0: {
            items: 6,
        },
        600: {
            items: 2,
        },
        992: {
            items: 3,
        },
        360: {
            items: 1,
        },
        1600: {
            items: 6,
        }
    }
});

$('.aft-befr-slider').owlCarousel({
    loop: false,
    dots: true,
    nav: true,
    margin: 30,
    responsiveClass: true,
    autoplay: false,
    autoplayHoverPause: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 400,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,

        },
        1000: {
            items: 1,
        },
        768: {
            items: 1,
        }
        ,
        320: {
            items: 1,
        }
    }
});

$('.testimonials-slider').owlCarousel({
    loop: true,
    dots: false,
    margin: 30,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 400,
    nav: true,
    responsive: {
        0: {
            items: 4,
        },
        600: {
            items: 2,
        },
        992: {
            items: 2,
        },
        360: {
            items: 1,
        },
        1600: {
            items: 4,
        }
    }
});

$('.cta-slider').owlCarousel({
    loop: true,
    dots: false,
    margin: 30,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 400,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        992: {
            items: 1,
        },
        360: {
            items: 1,
        },
        1600: {
            items: 1,
        }
    }
});

$('.portfolio-slider').owlCarousel({
    loop: true,
    dots: false,
    margin: 20,
    responsiveClass: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    nav: true,
    responsive: {
        0: {
            items: 4,
        },
        360: {
            items: 2,
        },
        600: {
            items: 2,
        },
        992: {
            items: 3,
        },
        1600: {
            items: 4,
        }
    }
});
$('.portfolio-slider1').owlCarousel({
    loop: true,
    dots: false,
    margin: 20,
    responsiveClass: true,
    rtl: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,
    nav: true,
    responsive: {
        0: {
            items: 4,
        },
        360: {
            items: 2,
        },
        600: {
            items: 2,
        },
        992: {
            items: 3,
        },
        1600: {
            items: 4,
        }
    }
});


$('.sliderbann').slick({
    slidesToShow: 1,
    slidesToScroll: 3,
    arrows: false,
    dots: false,
    asNavFor: '.slides_carousel',
    autoplay: true,
}).slickAnimation();


$('.slides_carousel').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.sliderbann',
    dots: true,
    arrows: false,
    focusOnSelect: true,
    autoplay: true,
    responsive: [

        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        }
    ]
    // variableWidth: true
});

$('.tab-menu li a').on('click', function () {
    var target = $(this).attr('data-rel');
    $('.tab-menu li a').removeClass('active');
    $(this).addClass('active');
    $("#" + target).fadeIn('slow').siblings(".tab-box").hide();
    return false;
});

$(window).width() <= 991 &&
0 != ".our-procesul-silder".length &&
($(".our-procesul-silder").addClass("owl-carousel owl-theme"),
    $(".our-procesul-silder").owlCarousel
    ({
        loop: !0,
        margin: 0,
        nav: !1,
        dots: !0,
        autoplay: 0,
        autoplayHoverPause: !0,
        mouseDrag: !0,
        responsive: {0: {items: 1}, 320: {items: 1}, 482: {items: 2}, 577: {items: 3}, 769: {items: 4}}
    }));

const hoverableDivs = document.querySelectorAll('.slidehvr');

hoverableDivs.forEach((div) => {
    div.addEventListener('mouseenter', () => {
        hoverableDivs.forEach((otherDiv) => {
            if (otherDiv !== div) {
                otherDiv.classList.remove('active');
            }
        });
        div.classList.add('active');
    });
});
$(".portfolio-page #myTab").addClass("portflex"),
    $(".portfolio-page #tab-1,.logo-page #tab-1,.web-page #tab-2,.video-page #tab-3,.mobile-page #tab-6,.branding-page #tab-4,.smm-page #tab-5,.ecormmerce-page #tab-8").addClass("packblock"),
    $(".portfolio-page #Logotabs,.logo-page #Logotabs,.web-page #Websitetabs,.video-page #Videotabs,.mobile-page #Mobiletabs,.branding-page #Brandingtabs,.smm-page #Socialtabs,.ecormmerce-page #ecommercetabs").addClass("active");

if ($('section').hasClass('bg-color')) {
    $('header').css('position', 'relative')
    $('header').css('background-color', '#EF2436')
    $('header').css('padding', '10px 0')
}

$(window).width() <= 991 &&
0 != ".guranteed-slider".length &&
($(".guranteed-slider").addClass("owl-carousel owl-theme"),
    $(".guranteed-slider").owlCarousel
    ({
        loop: !0,
        margin: 0,
        nav: !1,
        dots: !0,
        autoplay: 0,
        autoplayHoverPause: !0,
        mouseDrag: !0,
        responsive: {0: {items: 1}, 320: {items: 1}, 482: {items: 1}, 575: {items: 2}, 769: {items: 3}}
    }));

$(window).width() <= 991 &&
0 != ".factSlider".length &&
($(".factSlider").addClass("owl-carousel owl-theme"),
    $(".factSlider").owlCarousel
    ({
        loop: !0,
        margin: 0,
        nav: !1,
        dots: !0,
        autoplay: 0,
        autoplayHoverPause: !0,
        mouseDrag: !0,
        responsive: {0: {items: 1}, 320: {items: 1}, 482: {items: 1}, 575: {items: 2}, 769: {items: 3}}
    }));

$('.counting').each(function () {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({countNum: $this.text()}).animate({
            countNum: countTo
        },

        {

            duration: 3000,
            easing: 'linear',
            step: function () {
                $this.text(Math.floor(this.countNum) + '+');
            },
            complete: function () {
                $this.text(this.countNum + '+');
                //alert('finished');
            }

        });
});

document.getElementById("menuopen").addEventListener("click", function () {
    var targetElement = document.getElementById("menumain");
    targetElement.classList.toggle("open");
});

function lenisSetup() {
    const lenis = new Lenis({
        duration: 1.5,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smooth: true,
        mouseMultiplier: 1,
    })
    lenis.scrollTo(document.querySelector('#home'))

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf);
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenis.scrollTo(this.getAttribute("href"));
        });
    });
}
