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
                            Social Media Marketing Attract, Engage, & Convert
                        </h1>
                        <ul>
                            <li>
                                Optimize Targeted Audiences
                            </li>
                            <li>
                                Generate Qualified Leads
                            </li>
                            <li>
                                Boost Brand Authority
                            </li>
                        </ul>
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Request a Quote
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="serviceSec">
        <div class="headingCont">
            <h2 class="secHeading">
                Our Social Media Marketing Services
            </h2>
        </div>
        <div class="serviceRow">
            <img loading="lazy" src="/assets/images/portfolio/smm/slide1.webp" alt="" class="first active">
            <img loading="lazy" src="/assets/images/portfolio/smm/slide2.webp" alt="" class="second">
            <img loading="lazy" src="/assets/images/portfolio/smm/slide3.webp" alt="" class="third">
            <img loading="lazy" src="/assets/images/portfolio/smm/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        Social Marketing Strategy
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
                        Social Media Monitoring
                    </h3>
                    <p>
                        We scrutinize the social networks and make sure that you know who’s talking about you, what
                        they’re saying, and whether it’s positive. This ensures that you are always ahead of the talk,
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="third">
                <div class="content">
                    <h3>
                        <span>03</span>
                        Paid Media Management
                    </h3>
                    <p>
                        paid social media management with continuous, data-driven optimization for engagement and ad
                        spend
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        Copywriting & Content Marketing
                    </h3>
                    <p>
                        In-house copywriting and content marketing support to create valuable website messaging, enhance
                        the user experience
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
                    <img loading="lazy" src="/assets/images/portfolio/smm/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port4.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port7.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/smm/port8.webp" class="img-fluid" alt="">
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
$secHeading = "Custom Social Media Marketing Process";
$description = "Our comprehensive approach to building your brand’s presence on social media, engaging with your audience, and driving meaningful results.";
$processSteps = [
    [
        'title' => 'Social Media Strategy & Planning',
        'thumbImage' => '/assets/images/process/smm/smm.webp',
        'fullImage' => '/assets/images/process/smm/web-strategyimg.webp',
        'description' => 'We start by understanding your brand, audience, and goals. This allows us to create a tailored social media strategy that aligns with your business objectives and resonates with your target audience across various platforms.',
        'tasks' => [
            'Define social media goals and KPIs',
            'Identify target audience and key platforms',
            'Develop content themes and posting schedules',
            'Establish a brand voice and visual style'
        ]
    ],
    [
        'title' => 'Content Creation & Curation',
        'thumbImage' => '/assets/images/process/smm/content.webp',
        'fullImage' => '/assets/images/process/smm/planningimg.webp',
        'description' => 'Our team creates engaging and shareable content that captures your brand’s essence. We focus on a mix of original content, curated posts, and user-generated content to keep your audience engaged and your social channels active.',
        'tasks' => [
            'Create visually appealing graphics and videos',
            'Write compelling captions and copy',
            'Curate relevant content from trusted sources',
            'Leverage user-generated content and testimonials'
        ]
    ],
    [
        'title' => 'Social Media Management',
        'thumbImage' => '/assets/images/process/smm/manage.webp',
        'fullImage' => '/assets/images/process/smm/creativeimg.webp',
        'description' => 'We manage your social media accounts on a day-to-day basis, ensuring consistent posting, audience engagement, and prompt responses to messages and comments. Our goal is to build a community around your brand and foster meaningful interactions.',
        'tasks' => [
            'Schedule and publish content across platforms',
            'Engage with followers and respond to comments',
            'Monitor brand mentions and sentiment',
            'Manage social media advertising campaigns'
        ]
    ],
    [
        'title' => 'Audience Growth & Engagement',
        'thumbImage' => '/assets/images/process/smm/grow.webp',
        'fullImage' => '/assets/images/process/smm/responsiveimg.webp',
        'description' => 'Growing your social media presence requires more than just posting content. We use strategic tactics to increase your follower count, boost engagement rates, and expand your reach to new potential customers.',
        'tasks' => [
            'Run follower growth campaigns',
            'Host social media contests and giveaways',
            'Collaborate with influencers and partners',
            'Engage with relevant hashtags and communities'
        ]
    ],
    [
        'title' => 'Analytics & Reporting',
        'thumbImage' => '/assets/images/process/smm/reporting.webp',
        'fullImage' => '/assets/images/process/smm/qualityimg.webp',
        'description' => 'We track the performance of your social media efforts with in-depth analytics. Regular reports provide insights into what’s working, areas for improvement, and the overall impact of your social media marketing strategy.',
        'tasks' => [
            'Monitor key social media metrics',
            'Analyze audience demographics and behavior',
            'Provide detailed performance reports',
            'Optimize strategies based on data insights'
        ]
    ],
    [
        'title' => 'Continuous Optimization & Growth',
        'thumbImage' => '/assets/images/process/smm/launch.webp',
        'fullImage' => '/assets/images/process/smm/launchimg.webp',
        'description' => 'Social media is constantly evolving, and so are we. We continuously refine your social media strategy to keep up with trends, platform updates, and audience behavior, ensuring your brand stays relevant and continues to grow.',
        'tasks' => [
            'Stay updated with social media trends and algorithms',
            'Adjust content strategies to align with platform changes',
            'Experiment with new content formats and features',
            'Provide ongoing strategy optimization and growth tactics'
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
<?php
$secHeading = 'Frequently Asked Questions';
$description = 'Let’s work together to build something great';
$faqItems = [
    [
        'question' => 'What is web design?',
        'answer' => 'Web design is the process of creating websites that are visually appealing, functional, and user-friendly.'
    ],
    [
        'question' => 'How long does it take to design a website?',
        'answer' => 'The duration depends on the project scope, but typically, it takes around 4 to 6 weeks for a standard website.'
    ],
    [
        'question' => 'What is responsive design?',
        'answer' => 'Responsive design ensures that a website looks and functions well across a variety of devices, from mobile phones to desktop computers.'
    ],
    [
        'question' => 'How much does a website cost?',
        'answer' => 'The cost of a website varies based on its complexity, features, and design requirements. It can range from a few hundred dollars to several thousand.'
    ],
    [
        'question' => 'Do you provide website maintenance?',
        'answer' => 'Yes, we offer website maintenance services to ensure your site remains secure, up-to-date, and running smoothly.'
    ],
    [
        'question' => 'Can I update the content on my website myself?',
        'answer' => 'Yes, we build websites with content management systems (CMS) that allow you to easily update text, images, and other content without needing technical knowledge.'
    ]
];
include '../Components/faq.php';
?>
<?php include '../Components/testimonials.php' ?>
<?php include "../includes/footer.php" ?>