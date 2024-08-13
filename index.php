<?php include "./includes/header.php" ?>
    <div class="preloader">
        <img src="/assets/images/blub-holo.webp" alt="" class="holo">
        <img src="/assets/images/blub-fill.webp" alt="" class="fill">
        <h2><?php echo $SITE_NAME_TEXT ?></h2>
    </div>
    <div class="page-wrapper">
<?php include './includes/sideMenu.php' ?>
    <div class="page-inner">
<?php include './includes/menu.php' ?>
    <section class="mainSec">
        <canvas id="fluidCanvas"></canvas>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="content">
                        <h4 class="subHeading">
                            Digital Agency
                        </h4>
                        <h1>
                            We Create Impactful Apps, Branding, and Websites
                        </h1>
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Get Started
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutSec">
        <div class="panel first">
            <h3 class="bigLine">
                koder360
            </h3>
            <div class="container-fluid">
                <h3 class="secHeading">
                    We Transform Ideas into digital outcomes
                </h3>
                <div class="row">
                    <div class="col-lg-4 col-sm-8">
                        <div class="content">
                            <h2 class="subHeading">About Us</h2>
                            <p>
                                Exceptional digital experiences, engaging impactful logo designs solutions that inspire,
                                affect and delight. We carefully wrap emotionally rich aesthetics around strategic
                                design
                                concepts to deliver bulletproof designs that exceeds expectations.
                            </p>
                            <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Get Started
                                <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                        </div>
                    </div>
                </div>
                <div class="linesCont">
                    <div class="lineBox">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <h4 class="title">12+ <span>years of experience</span></h4>
                    </div>
                    <div class="lineBox">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <h4 class="title">300+ <span>design awards</span></h4>
                    </div>
                    <div class="lineBox">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <h4 class="title">499+ <span>projects completed</span></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <h3 class="serviceHeading">
                Services
            </h3>
            <h3 class="bigLine animate">Services</h3>
        </div>
        <div class="panel">
            <div class="content">
                <figure>
                    <img src="/assets/images/services-02.webp" alt="">
                </figure>
                <div class="title">
                    <h4>Website Design & Development</h4>
                    <a href="" class="detailBtn">
                        <span>More Details</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="content">
                <figure>
                    <img src="/assets/images/services-04.webp" alt="">
                </figure>
                <div class="title">
                    <h4>Mobile Apps Development</h4>
                    <a href="" class="detailBtn">
                        <span>More Details</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="content">
                <figure>
                    <img src="/assets/images/services-03.webp" alt="">
                </figure>
                <div class="title">
                    <h4>Web Portal Development</h4>
                    <a href="" class="detailBtn">
                        <span>More Details</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="content">
                <figure>
                    <img src="/assets/images/services-01.webp" alt="">
                </figure>
                <div class="title">
                    <h4>Social Media Marketing</h4>
                    <a href="" class="detailBtn">
                        <span>More Details</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="infiniteSlider">
                <div class="slide slide1">
                    <figure>
                        <img src="/assets/images/services-01.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-02.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-03.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-04.webp" alt="">
                    </figure>
                </div>
                <div class="slide slide2">
                    <figure>
                        <img src="/assets/images/services-01.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-02.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-03.webp" alt="">
                    </figure>
                    <figure>
                        <img src="/assets/images/services-04.webp" alt="">
                    </figure>
                </div>
            </div>
            <div class="content">
                <div class="title">
                    <h4>See All Projects</h4>
                    <a href="" class="detailBtn">
                        <span>More Details</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="headline">
        <h2>
            We bring brands to life through Identity.
        </h2>
    </div>
<?php include './Components/awardsSec.php' ?>
<?php include './Components/cta.php' ?>
<?php include './Components/featured.php' ?>
<?php include './Components/process.php' ?>
<?php include './Components/cta.php' ?>
<?php include './Components/testimonials.php' ?>
<?php include "./includes/footer.php" ?>