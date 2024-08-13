gsap.registerPlugin(ScrollTrigger);
let mm = gsap.matchMedia();
let isMobileScreen = "(max-width: 767px)";
let isDesktop = "(min-width: 768px)";

$(function () {
    const text = new SplitType('.preloader h2')
    text.chars
    preloader()
    lenisSetup()
    aboutAnim()
    scrollLetters()
    allSlider()
    menuTrigger()
    servicesRow()
    portfolio()
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
})

$(window).on("load", () => {
    preloaderRemove()
})

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

function preloader() {
    let tl = gsap.timeline()
    tl
        .to(".preloader h2 .word .char", {
            y: 0,
            duration: 0.7,
            stagger: 0.15
        })
        .to(".preloader img.fill", {
            autoAlpha: 0,
            repeat: -1,
            duration: 0.7,
            yoyo: true,
            ease: "power2.out"
        })
}

function preloaderRemove() {
    let tl = gsap.timeline()
    tl.to(".preloader h2 .word .char", {
        delay: 3,
        yPercent: 100,
        duration: 0.7,
        stagger: 0.15
    }).to(".preloader", {
        autoAlpha: 0,
    })

}

function aboutAnim() {
    let mainSec = document.querySelector(".aboutSec");

    if (mainSec) {
        let sections = gsap.utils.toArray(".aboutSec .panel");

        // Common timeline for animations
        let aboutIntroTl = gsap.timeline({
            scrollTrigger: {
                trigger: isMobileScreen ? '.aboutSec .panel:first-child' : mainSec,
                start: 'top 75%',
                end: 'bottom bottom',
                scrub: true
            }
        });

        mm.add(isMobileScreen, () => {
            // Animation for lines
            aboutIntroTl.to(".linesCont .lineBox", {
                y: 0,
                stagger: 0.1
            });
            sections.forEach((section) => {
                let img = section.querySelector('.content figure');
                let heading = section.querySelector('.content .title');
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: section,
                        start: "top center",
                    }
                });
                // Animation for images and heading
                tl.to(img, {
                    y: 0,
                    autoAlpha: 1,
                    duration: 0.5,
                    ease: 'power3.out'
                }).to(heading, {
                    x: 0,
                    autoAlpha: 1,
                    duration: 0.9,
                    ease: 'power3.out'
                }, '-=0.5');
            });
        })

        mm.add(isDesktop, () => {

            // Set sections width to window width
            sections.forEach(section => section.style.width = `${window.innerWidth}px`);

            // Horizontal scroll animation
            let horizontalScroll = gsap.to(sections, {
                xPercent: -100 * (sections.length - 1),
                ease: "none",
                scrollTrigger: {
                    trigger: mainSec,
                    pin: true,
                    scrub: 1,
                    end: () => "+=" + mainSec.offsetWidth
                },
            });

            // Loop through each section to create individual animations
            sections.forEach((section) => {
                let img = section.querySelector('.content figure');
                let heading = section.querySelector('.content .title');
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: section,
                        containerAnimation: horizontalScroll,
                        start: "left center",
                    }
                });
                // Animation for images and heading
                tl.to(img, {
                    y: 0,
                    autoAlpha: 1,
                    duration: 0.5,
                    ease: 'power3.out'
                }).to(heading, {
                    x: 0,
                    autoAlpha: 1,
                    duration: 0.9,
                    ease: 'power3.out'
                }, '-=0.5');
            });

            // Infinite slider animations
            gsap.to('.infiniteSlider .slide:first-of-type figure', {
                duration: 50,
                ease: "none",
                y: "-=500", //move each box 500px to right
                modifiers: {
                    y: gsap.utils.unitize(y => parseFloat(y) % 500) //force y value to be between 0 and 500 using modulus
                },
                repeat: -1
            });

            gsap.to('.infiniteSlider .slide:last-of-type figure', {
                duration: 50,
                ease: "none",
                y: "+=500", //move each box 500px to right
                modifiers: {
                    y: gsap.utils.unitize(y => parseFloat(y) % 500) //force y value to be between 0 and 500 using modulus
                },
                repeat: -1
            });
        });
    }
}

function scrollLetters() {
    let direction = 1; // 1 = forward, -1 = backward scroll

    const wrapper = horizontalLoop(".headline h2", {duration: 10});
    const letterScroll = ScrollTrigger.create({
        trigger: ".headline",
        onUpdate(self) {
            if (self.direction !== direction) {
                direction *= -1;
                gsap.to([wrapper], {timeScale: direction, overwrite: true});
            }
        },
    });

    // // helper function that clones the targets, places them next to the original, then animates the xPercent in a loop to make it appear to roll across the screen in a seamless loop.
    function horizontalLoop(targets, vars, reverse) {
        vars = vars || {};
        vars.ease || (vars.ease = "none");
        const tl = gsap.timeline({
                repeat: -1,
                onReverseComplete() {
                    this.totalTime(this.rawTime() + this.duration() * 10); // otherwise when the playhead gets back to the beginning, it'd stop. So push the playhead forward 10 iterations (it could be any number)
                },
            }),
            elements = gsap.utils.toArray(targets),
            clones = elements.map((el) => {
                let clone = el.cloneNode(true);
                el.parentNode.appendChild(clone);
                return clone;
            }),
            positionClones = () => elements.forEach((el, i) => gsap.set(clones[i], {
                position: "absolute",
                overwrite: false,
                top: el.offsetTop,
                left: el.offsetLeft + (reverse ? -el.offsetWidth : el.offsetWidth)
            }));
        positionClones();
        elements.forEach((el, i) => tl.to([el, clones[i]], {xPercent: reverse ? 100 : -100, ...vars}, 0));
        window.addEventListener("resize", () => {
            let time = tl.totalTime(); // record the current time
            tl.totalTime(0); // rewind and clear out the timeline
            positionClones(); // reposition
            tl.totalTime(time); // jump back to the proper time
        });
        return tl;
    }
}

function allSlider() {
    const awardsSlider = new Swiper(".awardsSlider .swiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2500
        },
        navigation: {
            nextEl: ".awardsSlider .swiper-button-next",
            prevEl: ".awardsSlider .swiper-button-prev",
        },
        breakpoints: {
            575: {
                slidesPerView: 4,
            },
            991: {
                slidesPerView: 6,
            },
        },
    });
    const testimonialSlider = new Swiper(".testimonialSlider", {
        slidesPerView: 1,
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: ".testimonialSlider .swiper-button-next",
            prevEl: ".testimonialSlider .swiper-button-prev",
        },
        breakpoints: {
            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
        },
    });
    const beforeAfterSliderThumb = new Swiper(".featuredSec .thumbSlider", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            575: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 5,
            },
        },
    });
    const beforeAfterSlider = new Swiper(".featuredSec .beforeAfterSlider", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".beforeAfterSlider .swiper-button-next",
            prevEl: ".beforeAfterSlider .swiper-button-prev",
        },
        thumbs: {
            swiper: beforeAfterSliderThumb,
        },
    });

    let processThumb = document.querySelectorAll('.processThumbBox')
    let processSlider = document.querySelectorAll('.processBox')

    processThumb.forEach((thumb, i) => {
        thumb.addEventListener("click", () => {
            processThumb.forEach((thumb) => {
                thumb.classList.remove('active')
            })
            processSlider.forEach((slider) => {
                slider.classList.remove("active")
            })
            processThumb[i].classList.add('active')
            processSlider[i].classList.add('active')
        })
    })

}

function menuTrigger() {
    let btn = document.querySelector(".menuBtn");
    let tl = gsap.timeline({paused: true, reversed: true});

    tl.to(".fullMenu", {
        x: 0,
        y: 0,
        autoAlpha: 1,
        duration: 0.8
    }).to(".fullMenu ul li", {
        autoAlpha: 1,
        stagger: 0.2
    }).to(".fullMenu .icon", {
        autoAlpha: 1,
    });

    btn.addEventListener("click", () => {
        if (tl.reversed()) {
            tl.play();
        } else {
            tl.reverse();
        }
    });

    let icons = document.querySelectorAll('.fullMenu .icon a');

    icons.forEach((ico) => {
        let imgClass = ico.getAttribute('data-img'); // Use getAttribute to retrieve the data-img attributes

        let tl = gsap.timeline({paused: true, reversed: true});

        tl.to(`.fullMenu .bgImg.${imgClass}`, {
            autoAlpha: 1,
            rotate: 5,
            scale: 1.5
        });

        ico.addEventListener("mouseenter", function () {
            tl.play();
        });

        ico.addEventListener("mouseleave", function () {
            tl.reverse();
        });
    });
}

function servicesRow() {
    let boxes = document.querySelectorAll('.serviceRow .serviceBox')
    let images = document.querySelectorAll('.serviceRow img')

    boxes.forEach((box) => {
        let img = box.getAttribute("data-img")
        box.addEventListener("mouseenter", () => {
            images.forEach((img) => {
                img.classList.remove('active')
            })
            boxes.forEach((innerBox) => {
                innerBox.classList.remove('active')
            })
            document.querySelector(`.serviceRow .${img}`).classList.add('active')
            box.classList.add('active')
        })
    })
}

function portfolio() {

    let portfolioSection = document.querySelector('.portfolioSec');
    let portfoliowrapper = document.querySelector('.portfoliowrapper');
    let portfoliowrapper1 = document.querySelector('.portfoliowrapper1');

    if (portfolioSection) {
        let horizontalTl = gsap.timeline({
            scrollTrigger: {
                trigger: portfolioSection,
                scrub: 1,
                end: () => "+=" + portfoliowrapper.offsetWidth + "px",
            }
        });
        ScrollTrigger.matchMedia({
            "(min-width: 992px)": function () {
                horizontalTl
                    .to(portfoliowrapper, {
                        xPercent: 0,
                        x: () => -(portfoliowrapper.offsetWidth - document.documentElement.clientWidth) + "px",
                        ease: "none",
                        duration: 1
                    }, "<")
                    .to(portfoliowrapper1, {
                        xPercent: 0,
                        x: () => (portfoliowrapper.offsetWidth - document.documentElement.clientWidth) + "px",
                        ease: "none",
                        duration: 1
                    }, "<")
            },
            "(max-width:991px)": function () {
                horizontalTl
                    .to(portfoliowrapper, {
                        xPercent: 0,
                        x: () => -20 + "%",
                        ease: "none",
                        duration: 1
                    }, "<")
                    .to(portfoliowrapper1, {
                        xPercent: 0,
                        x: () => "20%",
                        ease: "none",
                        duration: 1
                    }, "<")
            }

        })
    }
}