<?php include '../includes/header.php' ?>
<?php include '../includes/menu.php' ?>


    <section class="innerbanner">
        <canvas id="fluidCanvas" width="1920" height="597"></canvas>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-banenrhdg text-align-center">
                        <h2 class="mb-2"> CONTACT US
                        </h2>
                        <p>Looking to partner with the right people who value your business?<br> Get in touch with
                            us today and earn your first free consultation now!</p>
                        <a class="defult-btn popup-open" href="javascript:;"> Request A Qoute
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contcatus">
        <h1 class="section-outlined-heading outlined">
            CONTACT US
        </h1>
        <div class="container">
            <h3>LET'S WORK <br>
                TOGETHER!</h3>
            <div class="row">
                <div class="col-md-7 bdrclass">
                    <ul class="contactul">
                        <li>
                            <img src="/assets/images/call.jpg">
                            <a href="<?php echo $PHONE_NUMBER ?>"><?php echo $PHONE_NUMBER ?></a>
                        </li>
                        <li>
                            <img src="/assets/images/email.jpg">
                            <a href="mailto:<?php echo $EMAIL ?>"><?php echo $EMAIL ?></a>
                        </li>
                        <li>
                            <img src="/assets/images/adress.jpg">
                            <a href="javascript:;"><?php echo $ADDRESS ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 pr-0">
                    <div class="contact-pag-form" data-form-type="signup_form">
                        <form class="leadForm form_submission contactForm" method="post" enctype="multipart/form-data"
                              action="javascript:void(0)">
                            <input type="hidden" name="header" value="Contact Page Form">
                            <div class="form-wraper">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name"
                                           aria-describedby="name" placeholder="Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="number" name="phone"
                                           aria-describedby="number" placeholder="Number" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                           aria-describedby="email" placeholder="Email" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"
                                              name="msg"></textarea>
                                </div>
                            </div>

                            <div class="">
                                <button type="submit" class="btn defult-btn" name="reserve your discount">
                                    Submit <span></span><span></span><span></span><span></span>
                                </button>
                                <div id="formResult" class="popFormResult"></div>

                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </div>

    <section class="testimonials-sec">
        <div class="container-fluid">
            <div class="section-heading text-center" data-aos="fade-down" data-aos-duration="1200">
                <h3>Never Convinced? <br>
                    Hear From Our Clients.</h3>
            </div>
            <div class="col-md-5 m-auto" data-aos="zoom-out-up" data-aos-duration="1200">
                <ul class="plateformimg">
                    <li>
                        <img src="/assets/images/gooleimg.png">
                    </li>
                    <li>
                        <img src="/assets/images/upcity.png">
                    </li>
                    <li>
                        <img src="/assets/images/cluch.png">
                    </li>
                </ul>
            </div>
            <div class="pt-5 testimonials-slider owl-carousel owl-theme">
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5><?php echo $SITE_NAME_TEXT ?> exceeded expectations</h5>
                        <p><?php echo $SITE_NAME_TEXT ?> exceeded expectations in developing our user-friendly website.
                            Their
                            technical
                            prowess and commitment to deadlines made them invaluable partners in our digital journey. A
                            reliable and innovative choice for digital solutions.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg1.png">
                            <h6>Brad Maddison <br> <span>Marketing Director</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5><?php echo $SITE_NAME_TEXT ?> revolutionized</h5>
                        <p><?php echo $SITE_NAME_TEXT ?> revolutionized our online presence with effective digital
                            marketing
                            strategies.
                            Their collaborative and tailored approach aligned perfectly with our goals. A pleasure to
                            work
                            with, and we anticipate continued success.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg2.png">
                            <h6>Julia Dunkin<br> <span>Entrepreneur</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5>I wholeheartedly endorse</h5>
                        <p>I wholeheartedly endorse <?php echo $SITE_NAME_TEXT ?> for their exceptional web development
                            services. Our
                            organization was in need of a modern, user-friendly website,
                            and <?php echo $SITE_NAME_TEXT ?> delivered
                            beyond
                            our expectations. Their team's technical proficiency, creativity, and commitment to
                            deadlines
                            set them apart.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg3.png">
                            <h6>Javier Davis <br> <span>Businessman</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5>Loved the working with <?php echo $SITE_NAME_TEXT ?> <br>
                            on our web design project!</h5>
                        <p>Thanks to the expertise of the <?php echo $SITE_NAME_TEXT ?> team in web design and their
                            diligent
                            assistance, we were able to successfully complete the project to our utmost satisfaction. We
                            were particularly impressed by the team's swift and transparent approach throughout the
                            project. </p>
                        <div class="name-details">
                            <img src="/assets/images/testimg4.png">
                            <h6>Herbert Carson<br> <span>Digital Marketing Manager</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5><?php echo $SITE_NAME_TEXT ?> exceeded expectations</h5>
                        <p><?php echo $SITE_NAME_TEXT ?> exceeded expectations in developing our user-friendly website.
                            Their
                            technical
                            prowess and commitment to deadlines made them invaluable partners in our digital journey. A
                            reliable and innovative choice for digital solutions.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg1.png">
                            <h6>Brad Maddison <br> <span>Marketing Director</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5><?php echo $SITE_NAME_TEXT ?> revolutionized</h5>
                        <p><?php echo $SITE_NAME_TEXT ?> revolutionized our online presence with effective digital
                            marketing
                            strategies.
                            Their collaborative and tailored approach aligned perfectly with our goals. A pleasure to
                            work
                            with, and we anticipate continued success.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg2.png">
                            <h6>Julia Dunkin<br> <span>Entrepreneur</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5>I wholeheartedly endorse</h5>
                        <p>I wholeheartedly endorse <?php echo $SITE_NAME_TEXT ?> for their exceptional web development
                            services. Our
                            organization was in need of a modern, user-friendly website,
                            and <?php echo $SITE_NAME_TEXT ?> delivered
                            beyond
                            our expectations. Their team's technical proficiency, creativity, and commitment to
                            deadlines
                            set them apart.</p>
                        <div class="name-details">
                            <img src="/assets/images/testimg3.png">
                            <h6>Javier Davis <br> <span>Businessman</span></h6>
                        </div>
                    </div>
                </div>
                <div class="items" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="testimonials-box">
                        <h5>Loved the working with <?php echo $SITE_NAME_TEXT ?> <br>
                            on our web design project!</h5>
                        <p>Thanks to the expertise of the <?php echo $SITE_NAME_TEXT ?> team in web design and their
                            diligent
                            assistance, we were able to successfully complete the project to our utmost satisfaction. We
                            were particularly impressed by the team's swift and transparent approach throughout the
                            project. </p>
                        <div class="name-details">
                            <img src="/assets/images/testimg4.png">
                            <h6>Herbert Carson<br> <span>Digital Marketing Manager</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php' ?>