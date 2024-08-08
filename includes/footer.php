<footer class="main-footer">
    <img src="/assets/images/bgblub.png" alt="" class="bgImg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 contct-text">
                <p>Brew a cup and grab a seat...</p>
                <h3>
                    Fill Out The <br> Form And <br> We’ll Get In <br> Touch
                </h3>
            </div>
            <div class="col-md-6">
                <div class="contact-form" data-form-type="signup_form">
                    <form class="leadForm form_submission footerForm" method="post" enctype="multipart/form-data"
                          action="javascript:void(0)">
                        <input type="hidden" name="header" value="Footer Form">
                        <div class="form-wraper">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="name" name="name"
                                           aria-describedby="name" placeholder="Full Name" required="">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control phone-input" minlength="10" maxlength="12"
                                           id="phoneone" name="phone" placeholder="Telephone" required="">

                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control" id="email" name="email"
                                           aria-describedby="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pt-4 align-items-center">
            <div class="col-md-4 brand-details">
                <img src="/assets/images/white-logo.png">
                <p>
                    <?php echo $SITE_NAME_TEXT ?> is a creative digital marketing agency which will take your business
                    to newer heights with our result-oriented digital marketing and branding services.
                </p>

            </div>
            <div class="col-md-4 services-1">
                <h5>Services</h5>
                <ul class="pages-link">
                    <li><i class="fas fa-caret-right"></i><a href="/">Home</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/about">About Us </a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/contact-us">Contact Us</a></li>
<!--                    <li><i class="fas fa-caret-right"></i><a href="/logo-design">Logo Design</a></li>-->
                    <li><i class="fas fa-caret-right"></i><a href="/website-design">Website Design
                        </a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/web-portal">Web Portal
                        </a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/seo">SEO</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/video-animation">Video Animation</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="/mobile-apps">Mobile Apps</a></li>
                    <!--                    <li><i class="fas fa-caret-right"></i><a href="/branding">Branding</a></li>-->
                    <li><i class="fas fa-caret-right"></i><a href="/social-media">Social Media</a></li>
<!--                    <li><i class="fas fa-caret-right"></i><a href="/ecommerce">E-Commerce Design</a></li>-->
                </ul>
            </div>
            <div class="col-md-4 services-3">
                <h5>Contact Us</h5>
                <ul class="talk-details">
                    <li>
                        <a href="javascript:;"><i class="fas fa-map-marker-alt"></i><?php echo $ADDRESS ?></a>
                    </li>
                    <li><a href="mailto:<?php echo $EMAIL ?>"><i class="fas fa-envelope"></i><?php echo $EMAIL ?></a>
                    </li>
                    <li><a href="<?php echo $PHONE_NUMBER_TEL ?>"><i
                                    class="fas fa-phone"></i><?php echo $PHONE_NUMBER ?></a>
                    </li>
                    <li><img src="/assets/images/star.png" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <ul class="policys">
                <li>
                    <span>&copy; 2024 <?php echo $SITE_NAME_TEXT ?>. All Rights Reserved.</span>
                </li>
                <li><img src="/assets/images/cards.png" alt=""></li>
                <!--                <li><a href="/order/privacy-policy">Privacy Policy</a> | <a href="/order/terms-and-conditions">Terms &-->
                <!--                        Conditions</a></li>-->
            </ul>
        </div>
    </div>
</footer>

<!-- popup form -->
<div id="entry-popup">
    <div class="container">
        <div class="entry-box" data-form-type="signup_form">
            <a href="javascript:;" id="entry-box_close" class="closed">
                <svg width="24" height="24" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewbox="0 0 123.05 123.05" xml:space="preserve">
                            <g>
                                <path d="M121.325,10.925l-8.5-8.399c-2.3-2.3-6.1-2.3-8.5,0l-42.4,42.399L18.726,1.726c-2.301-2.301-6.101-2.301-8.5,0l-8.5,8.5
                        c-2.301,2.3-2.301,6.1,0,8.5l43.1,43.1l-42.3,42.5c-2.3,2.3-2.3,6.1,0,8.5l8.5,8.5c2.3,2.3,6.1,2.3,8.5,0l42.399-42.4l42.4,42.4
                        c2.3,2.3,6.1,2.3,8.5,0l8.5-8.5c2.3-2.3,2.3-6.1,0-8.5l-42.5-42.4l42.4-42.399C123.625,17.125,123.625,13.325,121.325,10.925z">
                                </path>
                            </g>
                        </svg>
            </a>
            <form class="leadForm form_submission popupForm" method="post" enctype="multipart/form-data"
                  action="javascript:void(0)">
                <input type="hidden" name="header" value="Popup Form">
                <div class="col-sm-12 entry-right">
                    <div class="form-text-1">
                        <p>Fill out this brief form to get your PROJECT STARTED.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                               placeholder="Your Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                               placeholder="Email Address" required="">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control phone-input" minlength="10" maxlength="12"
                               id="phoneone" name="phone" placeholder="Phone" required="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" name="msg"></textarea>
                    </div>

                    <div class="form-group form-btn">
                        <button type="submit" class=" btn-default btn-2" name="reserve your discount">
                            Reserve your discount
                        </button>
                        <div id="formResult" class="popFormResult"></div>

                    </div>
                </div>
            </form>
            <span class="layer-1"></span>
            <span class="layer-2"></span>
            <span class="layer-3"></span>
            <span class="layer-4"></span>
        </div>
    </div>
</div>
<!--form Modal Popup-->
<div class="loadercustom" id="loader">
    <div class="wide-container">
        <div class="section-title-wrapper for-loader">
            <div class="section-outlined-heading outlined-white for-loader" id="loadertext">
                <?php echo $SITE_NAME_TEXT ?>
            </div>
            <h2 class="heading-2 absolute white"><?php echo $SITE_NAME_TEXT ?></h2>
        </div>
    </div>
</div>

</div>

<script defer src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="/assets/js/plugin.js" type="text/javascript"></script>
<script src="/assets/js/custom.js" type="text/javascript"></script>
<script src="/assets/js/email.js" type="text/javascript"></script>
<script src="/assets/js/animationcustom.js" type="text/javascript"></script>
<script src="/assets/js/banneranimation.js" type="text/javascript"></script>

</body>

</html>