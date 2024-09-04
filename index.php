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
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Get Started
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
                            <a class="themeBtn" href="javascript:;" data-bs-toggle="modal"
                               data-bs-target="#exampleModal"> Get Started
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
                    <a href="/web-development/" class="detailBtn">
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
                    <a href="/mobile-apps/" class="detailBtn">
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
                    <a href="/web-portal/" class="detailBtn">
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
                    <a href="/social-media/" class="detailBtn">
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
                    <a href="/portfolio/" class="detailBtn">
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
<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Let’s work together to build something great';
include './Components/cta.php';
?>
<?php
$secHeading = "Featured Website Redesigns";
$description = "We reimagine digital experiences for brands of all sizes and across industries. Explore our redesign portfolio.";
$thumbSliderImages = [
    '/assets/images/client1.webp',
    '/assets/images/client3.webp',
    '/assets/images/client4.webp',
    '/assets/images/client5.webp',
    '/assets/images/client6.webp',
    '/assets/images/client7.webp',
    '/assets/images/client8.webp',
    '/assets/images/client9.webp',
    '/assets/images/client10.webp',
    '/assets/images/client11.webp',
    '/assets/images/client12.webp',
    '/assets/images/client13.webp',
];
$beforeAfterSliderImages = [
    '/assets/images/cleintfull1.webp',
    '/assets/images/cleintfull3.webp',
    '/assets/images/cleintfull4.webp',
    '/assets/images/cleintfull5.webp',
    '/assets/images/cleintfull6.webp',
    '/assets/images/cleintfull7.webp',
    '/assets/images/cleintfull8.webp',
    '/assets/images/cleintfull9.webp',
    '/assets/images/cleintfull10.webp',
    '/assets/images/cleintfull11.webp',
    '/assets/images/cleintfull12.webp',
    '/assets/images/cleintfull13.webp',
];
include './Components/featured.php';
?>
<?php
$secHeading = "Custom Design Process";
$description = "Our process for creating a website tailored to your unique goals.";
$processSteps = [
    [
        'title' => 'Web Strategy',
        'thumbImage' => '/assets/images/process/web/web.webp',
        'fullImage' => '/assets/images/process/web/web-strategyimg.webp',
        'description' => 'Before we put pen to paper (or start on your digital design, rather), we conduct thorough research into your industry, competitors and target market to gather insights that will inform your custom digital strategy.',
        'tasks' => [
            'Identify the ideal positioning for your brand',
            'Collect target audience data and create user personas',
            'Define valuable content and marketing channels',
            'Define KPIs to measure performance'
        ]
    ],
    [
        'title' => 'Planning & Information',
        'thumbImage' => '/assets/images/process/web/planning.webp',
        'fullImage' => '/assets/images/process/web/planningimg.webp',
        'description' => 'Next, we map out your unique landing pages and define your site map and navigation. We create a plan for your URL structure, along with redirects and a search engine optimization strategy, careful to maintain any existing SEO value from your current site, if applicable.',
        'tasks' => [
            'Design your site structure, navigation and page hierarchy',
            'Map out the conversion funnel for each unique landing page',
            'Create black and white wireframes to show you the bones of your new site'
        ]
    ],
    [
        'title' => 'Creative Design',
        'thumbImage' => '/assets/images/process/web/creative.webp',
        'fullImage' => '/assets/images/process/web/creativeimg.webp',
        'description' => 'Here’s where your website begins to come to life, as our award-winning designers step in. Your design is filled with color and custom elements as we incorporate your brand’s personality and tailor the user journey to your target market.',
        'tasks' => [
            'Design your custom website',
            'Incorporate your unique branding elements',
            'Present you with full-scale designs in Figma'
        ]
    ],
    [
        'title' => 'Responsive Development',
        'thumbImage' => '/assets/images/process/web/responsive.webp',
        'fullImage' => '/assets/images/process/web/responsiveimg.webp',
        'description' => 'In the development phase, our expert development team works behind the scenes to build a custom, secure and scalable solution for your brand, on your chosen platform. From B2B to eCommerce, we ensure clean code and a website that’s fully optimized.',
        'tasks' => [
            'Write and finalize coding for your website',
            'Bring your custom solution to life in a secure staging site',
            'Ensure a responsive solution for both desktop and mobile'
        ]
    ],
    [
        'title' => 'Quality Assurance',
        'thumbImage' => '/assets/images/process/web/quality.webp',
        'fullImage' => '/assets/images/process/web/qualityimg.webp',
        'description' => 'Before we push your custom solution live for the world to see, we follow a stringent quality assurance process, leaving no stone unturned. We continuously test your site’s speed, functionality and other key elements to make sure it’s ready for launch.',
        'tasks' => [
            'Perform meticulously testing across the frontend and backend',
            'Ensure all features and functionalities are working as intended',
            'Make changes as needed to ensure a superior user experience'
        ]
    ],
    [
        'title' => 'Launch & Optimization',
        'thumbImage' => '/assets/images/process/web/launch.webp',
        'fullImage' => '/assets/images/process/web/launchimg.webp',
        'description' => 'When our QA is complete, it’s time for launch! Our team will set up your server, carry out the DNS configuration and make sure all updates are finalized. We’ll provide Cloudflare security protection, along with both internal and external monitoring.',
        'tasks' => [
            'Perform final QA testing',
            'Devise a marketing plan for launch',
            'Push your new digital solution live'
        ]
    ],
];
include './Components/process.php';
?>
    <section class="blogsSec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="secHeading">
                        Blogs
                    </h2>
                </div>
                <?php

                $servername = "localhost"; // Change to your database server
                $username = "koder360_koder360"; // Change to your database username
                $password = "o=Q-~m_A^r;y"; // Change to your database password
                $dbname = "koder360_koder360"; // Change to your database name

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch blog posts
                $sql = "SELECT id, title, heading, slug, image, content FROM blogs order by id desc limit 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '    <div class="blogCard">';
                        echo '        <a href="/blogs/blogDetail.php?id=' . htmlspecialchars($row['id']) . '">';
                        echo '            <figure>';
                        echo '                <img src="../admin/uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['heading']) . '">';
                        echo '            </figure>';
                        echo '        </a>';
                        echo '        <div class="content">';
                        echo '            <h2>' . htmlspecialchars($row['heading']) . '</h2>';
                        echo '            <p>' . substr($row['content'], 0, 200);
                        '...</p>'; // Show a snippet of the content
                        echo '            <a href="/blogs/blogDetail.php?id=' . htmlspecialchars($row['id']) . '" class="lineBtn">Read More</a>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-12"><p>No blog posts found.</p></div>';
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>
    </section>
<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Let’s work together to build something great';
include './Components/cta.php';
?>
<?php include './Components/testimonials.php' ?>
<?php include "./includes/footer.php" ?>