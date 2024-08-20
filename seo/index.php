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
                            SEO MORE TRAFFIC GREATER
                            <br>
                            OPPORTUNITIES
                        </h1>
                        <ul>
                            <li>
                                Improved Audience Engagement
                            </li>
                            <li>
                                Enhanced Social Media Presence
                            </li>
                            <li>
                                100% Money Back Guarantee
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
                Our SEO Services
            </h2>
        </div>
        <div class="serviceRow">
            <img src="/assets/images/portfolio/seo/slide1.webp" alt="" class="first active">
            <img src="/assets/images/portfolio/seo/slide2.webp" alt="" class="second">
            <img src="/assets/images/portfolio/seo/slide3.webp" alt="" class="third">
            <img src="/assets/images/portfolio/seo/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        Local SEO
                    </h3>
                    <p>
                        Actionable, multichannel marketing plans based on industry research, competitive analysis and
                        user behavior insights
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="second">
                <div class="content">
                    <h3>
                        <span>02</span>
                        Enterprise SEO
                    </h3>
                    <p>
                        Create a strong online reputation across the globe. Perfect for big brands.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="third">
                <div class="content">
                    <h3>
                        <span>03</span>
                        Reputation Management
                    </h3>
                    <p>
                        Actionable, multichannel marketing plans based on industry research, competitive analysis and
                        user behavior insights
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        White Label SEO
                    </h3>
                    <p>
                        Actionable, multichannel marketing plans based on industry research, competitive analysis and
                        user behavior insights
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
                    <img src="/assets/images/portfolio/seo/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port4.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/seo/port4.webp" class="img-fluid" alt="">
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
$secHeading = "Custom SEO Process";
$description = "Our step-by-step approach to optimizing your website for search engines, driving organic traffic, and improving your online visibility.";
$processSteps = [
    [
        'title' => 'SEO Strategy & Research',
        'thumbImage' => '/assets/images/process/seo/seo.webp',
        'fullImage' => '/assets/images/process/seo/web-strategyimg.webp',
        'description' => 'We begin with an in-depth analysis of your industry, competitors, and target audience. This research forms the foundation of our SEO strategy, helping us identify the right keywords, content opportunities, and optimization techniques to boost your rankings.',
        'tasks' => [
            'Conduct keyword research and competitive analysis',
            'Identify content gaps and opportunities',
            'Analyze current website performance and rankings',
            'Develop a comprehensive SEO strategy'
        ]
    ],
    [
        'title' => 'On-Page Optimization',
        'thumbImage' => '/assets/images/process/seo/onpage.webp',
        'fullImage' => '/assets/images/process/seo/planningimg.webp',
        'description' => 'We optimize every element on your website to ensure it aligns with SEO best practices. This includes optimizing meta tags, headers, and images, as well as improving content quality and internal linking to enhance user experience and search engine visibility.',
        'tasks' => [
            'Optimize meta titles, descriptions, and headers',
            'Improve site speed and mobile responsiveness',
            'Enhance content with targeted keywords and LSI terms',
            'Implement internal linking strategies'
        ]
    ],
    [
        'title' => 'Technical SEO',
        'thumbImage' => '/assets/images/process/seo/technical.webp',
        'fullImage' => '/assets/images/process/seo/creativeimg.webp',
        'description' => 'Our team focuses on the technical aspects of SEO, ensuring your website is easy for search engines to crawl and index. We address issues like broken links, duplicate content, XML sitemaps, and site architecture to improve overall search engine performance.',
        'tasks' => [
            'Conduct technical SEO audits and fix issues',
            'Optimize website architecture and URL structure',
            'Create and submit XML sitemaps to search engines',
            'Implement structured data and schema markup'
        ]
    ],
    [
        'title' => 'Content Optimization & Creation',
        'thumbImage' => '/assets/images/process/seo/content.webp',
        'fullImage' => '/assets/images/process/seo/responsiveimg.webp',
        'description' => 'Content is king in the world of SEO. We optimize your existing content and create new, high-quality content that resonates with your audience and ranks well on search engines. Our focus is on delivering value while incorporating strategic keywords.',
        'tasks' => [
            'Revise existing content for SEO and readability',
            'Create new, keyword-rich content for targeted topics',
            'Develop content marketing strategies and editorial calendars',
            'Ensure content is shareable and engaging'
        ]
    ],
    [
        'title' => 'Off-Page SEO & Link Building',
        'thumbImage' => '/assets/images/process/seo/link.webp',
        'fullImage' => '/assets/images/process/seo/qualityimg.webp',
        'description' => 'We build high-quality backlinks and enhance your website’s authority through off-page SEO strategies. This includes outreach to relevant websites, creating shareable content, and leveraging social media to boost your site’s credibility and rankings.',
        'tasks' => [
            'Conduct link-building campaigns for high-authority backlinks',
            'Engage in guest posting and content syndication',
            'Monitor and manage online reputation',
            'Promote content through social media and influencer outreach'
        ]
    ],
    [
        'title' => 'Monitoring & Reporting',
        'thumbImage' => '/assets/images/process/seo/monitor.webp',
        'fullImage' => '/assets/images/process/seo/launchimg.webp',
        'description' => 'SEO is an ongoing process. We continuously monitor your website’s performance, track keyword rankings, and analyze traffic data. Regular reporting keeps you informed of progress and helps us refine strategies to ensure sustained growth.',
        'tasks' => [
            'Monitor website performance with analytics tools',
            'Track keyword rankings and organic traffic',
            'Provide detailed monthly SEO reports',
            'Adjust and refine strategies based on data insights'
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