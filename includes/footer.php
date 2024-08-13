<footer>
    <img src="/assets/images/bgblub.png" alt="" class="bgImg">
    <div class="contentSec">
        <div class="container-md">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 col-md-6">
                    <h4>
                        Brew a cup and grab a seat...
                    </h4>
                    <h2>
                        Fill Out The Form And We’ll Get In Touch
                    </h2>
                </div>
                <div class="col-md-6">
                    <form action="" class="contactForm">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="inputCont">
                                        <input type="text" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="inputCont">
                                        <input type="tel" placeholder="Telephone" name="phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputCont">
                                        <input type="text" placeholder="Email Address" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputCont">
                                        <textarea name="msg" id="" rows="6" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="themeBtn">Submit
                                        <span></span><span></span><span></span><span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    <div class="footerSec">
        <div class="container-md">
            <div class="row">
                <div class="col-md-4">
                    <div class="footerLogo">
                        <img src="/assets/images/white-logo.png" alt="">
                        <p>
                            Koder360 is a creative digital marketing agency which will take your business to newer
                            heights with our result-oriented digital marketing and branding services.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4>
                        Services
                    </h4>
                    <ul>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Website Design
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Web Portal
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                SEO
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Video Animation
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Mobile Apps
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fas fa-caret-right"></i>
                                Social Media
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4>Contact Us</h4>
                    <ul class="contact">
                        <li>
                            <a href="javascript:;">
                                <i class="fas fa-map-pin"></i>
                                <?php echo $ADDRESS ?>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $EMAIL ?>">
                                <i class="fas fa-envelope"></i>
                                <?php echo $EMAIL ?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:$PHONE_NUMBER_TEL">
                                <i class="fas fa-phone"></i>
                                <?php echo $PHONE_NUMBER ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <form action="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h2>
                                    fill out this brief form to get your project started.
                                </h2>
                            </div>
                            <div class="col-12">
                                <div class="inputCont">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputCont">
                                    <input type="text" name="tel" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputCont">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="inputCont">
                                    <textarea name="msg" id="" rows="6" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="themeBtn">Submit
                                    <span></span><span></span><span></span><span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script defer src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js" ></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/smoke.js"></script>
<script src="/assets/js/index.js"></script>
<script src="/assets/js/email.js"></script>
</html>