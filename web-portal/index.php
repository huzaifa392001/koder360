<?php include "../includes/header.php" ?>
    <div class="page-wrapper">
<?php include '../includes/sideMenu.php' ?>
    <div class="page-inner">
<?php include '../includes/menu.php' ?>

    <section class="bannerSec">
        <canvas id="fluidCanvas"></canvas>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <h1>
                            Elevate Your Business with
                            <br>
                            Cutting-Edge Web Portals
                        </h1>
                        <ul>
                            <li>
                                Seamless User Experience
                            </li>
                            <li>
                                Robust Data Management
                            </li>
                            <li>
                                Scalable and Secure Solutions
                            </li>
                        </ul>
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"> Request a Quote
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceSec">
        <div class="headingCont">
            <h2 class="secHeading">
                Our Web Portal Services
            </h2>
        </div>
        <div class="serviceRow">
            <img src="/assets/images/portfolio/web-portal/slide1.webp" alt="" class="first active">
            <img src="/assets/images/portfolio/web-portal/slide2.webp" alt="" class="second">
            <img src="/assets/images/portfolio/web-portal/slide3.webp" alt="" class="third">
            <img src="/assets/images/portfolio/web-portal/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        Custom Web Portals
                    </h3>
                    <p>
                        Crafting custom websites tailored to diverse screen sizes for an optimal user experience, At
                        Koder360s blends functionality with creativity, ensuring a unique and seamless digital presence.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="second">
                <div class="content">
                    <h3>
                        <span>02</span>
                        Enterprise Resource Planning (ERP) Portals
                    </h3>
                    <p>
                        Manage your website content, allowing your content creators and contributors to create, edit,
                        and publish easily.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="third">
                <div class="content">
                    <h3>
                        <span>03</span>
                        Customer Relationship Management (CRM) Portals
                    </h3>
                    <p>
                        If you want to provide your customers with the necessary information, impress them by providing
                        it via a static website flawlessly designed & developed by a team of experts at Koder360
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        B2B and B2C Portals
                    </h3>
                    <p>
                        At Koder360s, we don't just create an eCommerce store; we give you a complete digital solution
                        with the primary objective of enhancing your revenues.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolioSec">
        <h3 class="bigLine">
            koder360
        </h3>
        <div class="headingCont">
            <h2 class="secHeading text-md-start">
                Featured Projects
                <br>
                our work
            </h2>
        </div>
        <ul class="portfoliowrapper">
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/4.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/7.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/web-portal/8.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
    </section>
    <!-- Portfolio Section -->

<?php include '../Components/awardsSec.php' ?>
<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Let’s work together to build something great';
include '../Components/cta.php';
?>
<?php
$secHeading = "Featured Web Portal Redesigns";
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
];
$beforeAfterSliderImages = [
    '/assets/images/cleintFull1.webp',
    '/assets/images/cleintFull3.webp',
    '/assets/images/cleintFull4.webp',
    '/assets/images/cleintFull5.webp',
    '/assets/images/cleintFull6.webp',
    '/assets/images/cleintFull7.webp',
    '/assets/images/cleintFull8.webp',
    '/assets/images/cleintFull9.webp',
    '/assets/images/cleintFull10.webp',
    '/assets/images/cleintFull11.webp',
];
include '../Components/featured.php';
?>
<?php
$secHeading = "Custom Web Portal Process";
$description = "Our process for creating a web portal tailored to your business operations and user engagement.";
$processSteps = [
    [
        'title' => 'Web Portal Strategy',
        'thumbImage' => '/assets/images/process/portal/portal.webp',
        'fullImage' => '/assets/images/process/portal/web-strategyimg.webp',
        'description' => 'We begin by understanding your business requirements, target users, and the core functionalities needed for the web portal. This helps us design a strategy that aligns with your business goals and user needs.',
        'tasks' => [
            'Identify user roles and access levels',
            'Define portal features and modules',
            'Plan integration with existing systems',
            'Set up performance metrics and analytics'
        ]
    ],
    [
        'title' => 'Planning & Information Architecture',
        'thumbImage' => '/assets/images/process/portal/planning.webp',
        'fullImage' => '/assets/images/process/portal/planningimg.webp',
        'description' => 'We map out the web portal’s structure, focusing on creating an intuitive user experience. We define the information architecture, design user flows, and prepare wireframes to visualize the portal’s layout.',
        'tasks' => [
            'Design the portal’s structure and navigation',
            'Plan data organization and user access paths',
            'Create detailed wireframes for key sections',
            'Ensure scalability for future growth'
        ]
    ],
    [
        'title' => 'User Interface Design',
        'thumbImage' => '/assets/images/process/portal/creative.webp',
        'fullImage' => '/assets/images/process/portal/creativeimg.webp',
        'description' => 'Our designers craft a user-centric interface that aligns with your brand and provides a seamless experience for users. We focus on both aesthetics and usability to ensure the portal is both functional and visually appealing.',
        'tasks' => [
            'Design the UI for different user roles',
            'Incorporate branding and design consistency',
            'Create interactive prototypes for user testing'
        ]
    ],
    [
        'title' => 'Web Portal Development',
        'thumbImage' => '/assets/images/process/portal/responsive.webp',
        'fullImage' => '/assets/images/process/portal/responsiveimg.webp',
        'description' => 'Our development team builds the web portal using secure, scalable technologies. We focus on creating a robust backend, smooth front-end interactions, and seamless integration with other systems.',
        'tasks' => [
            'Develop the backend with secure coding practices',
            'Create a responsive and dynamic front-end',
            'Integrate APIs and third-party services',
            'Conduct thorough testing during development'
        ]
    ],
    [
        'title' => 'Quality Assurance',
        'thumbImage' => '/assets/images/process/portal/quality.webp',
        'fullImage' => '/assets/images/process/portal/qualityimg.webp',
        'description' => 'Before going live, our QA team performs extensive testing to ensure the web portal is bug-free, secure, and user-friendly. We test all features, validate performance, and optimize the portal for various devices.',
        'tasks' => [
            'Conduct end-to-end functional testing',
            'Perform security audits and vulnerability assessments',
            'Test for performance and scalability',
            'Gather user feedback for final adjustments'
        ]
    ],
    [
        'title' => 'Launch & Continuous Support',
        'thumbImage' => '/assets/images/process/portal/launch.webp',
        'fullImage' => '/assets/images/process/portal/launchimg.webp',
        'description' => 'Once everything is tested and approved, we launch the web portal and monitor its performance. We provide continuous support, regular updates, and enhancements to keep the portal running smoothly and efficiently.',
        'tasks' => [
            'Deploy the portal to the live environment',
            'Monitor usage and gather analytics',
            'Provide regular maintenance and updates',
            'Offer ongoing user support and training'
        ]
    ],
];
include '../Components/process.php';
?>
<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Let’s work together to build something great';
include '../Components/cta.php';
?>
<?php include '../Components/testimonials.php' ?>
<?php include "../includes/footer.php" ?>