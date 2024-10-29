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
                            A Trusted Mobile App Development Services
                            <br>
                            Company With a Global Presence
                        </h1>
                        <ul>
                            <li>
                                Innovative & Versatile
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
                Our Mobile Apps Design &
                <br>
                Development Services
            </h2>
            <p>
                How Can Our App Programming Company Help Your Business Grow?
            </p>
        </div>
        <div class="serviceRow">
            <img loading="lazy" src="/assets/images/portfolio/mobileapps/slide1.webp" alt="" class="first active">
            <img loading="lazy" src="/assets/images/portfolio/mobileapps/slide2.webp" alt="" class="second">
            <img loading="lazy" src="/assets/images/portfolio/mobileapps/slide3.webp" alt="" class="third">
            <img loading="lazy" src="/assets/images/portfolio/mobileapps/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        iOS Platforms
                    </h3>
                    <p>
                        We provide professional iOS mobile app development services, from concept to product launch. Our team focuses on delivering visually appealing and profitable applications, as well as programming languages, to enhance productivity for your products and services, with a deep passion for unmatched user experience.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="second">
                <div class="content">
                    <h3>
                        <span>02</span>
                        Android App Development
                    </h3>
                    <p>
                        Our mobile app development services offer custom Android app development solutions for businesses of all sizes, helping them achieve their goals. With our in-depth industry knowledge, our developers understand the constantly evolving requirements while adding value to your mobile app solutions.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="third">
                <div class="content">
                    <h3>
                        <span>03</span>
                        Ecommerce App
                    </h3>
                    <p>
                        Our eCommerce mobile app development services in the USA are focused on providing companies with flawless mobile shopping experiences, ensuring that app development is targeted to the current market, driving success and increasing consumer interaction, supporting digital marketplace growth.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        Hybrid Apps
                    </h3>
                    <p>
                        Hybrid apps are online applications that seem and operate similarly to native applications. As part of our mobile app development services, we design and construct hybrid apps that can be downloaded and used smoothly across all operating systems, offering organizations a flexible and efficient solution.
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
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port4.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port7.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/mobileapps/port8.webp" class="img-fluid" alt="">
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
$secHeading = "Featured Mobile Redesigns";
$description = "Discover how we transform digital experiences for brands. View our portfolio.";
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
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile1.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile3.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile4.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile5.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile6.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile7.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile8.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile9.png',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile10pngwebp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile11pngwebp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile12pngwebp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/mobile/mobile13pngwebp',
    ],
];
include '../Components/featured.php';
?>
<?php
$secHeading = "Custom Mobile Application Process";
$description = "Our process for developing a mobile application tailored to your business needs and user expectations.";
$processSteps = [
    [
        'title' => 'Mobile App Strategy',
        'thumbImage' => '/assets/images/process/mobile/mobile.webp',
        'fullImage' => '/assets/images/process/mobile/web-strategyimg.webp',
        'description' => 'Before we start development, we conduct thorough research into your industry, competitors, and target audience to formulate a custom mobile app strategy. This ensures your app meets the demands of your users and stands out in the marketplace.',
        'tasks' => [
            'Analyze user behavior and preferences',
            'Define app features and functionalities',
            'Identify key platforms (iOS, Android)',
            'Set performance metrics and goals'
        ]
    ],
    [
        'title' => 'Planning & Information Architecture',
        'thumbImage' => '/assets/images/process/mobile/planning.webp',
        'fullImage' => '/assets/images/process/mobile/planningimg.webp',
        'description' => 'Next, we plan the structure of your mobile app, focusing on the user experience and interface design. We map out the app’s navigation, wireframe key screens, and ensure seamless user journeys.',
        'tasks' => [
            'Create app wireframes and user flows',
            'Design app navigation and UI elements',
            'Plan integration with third-party services and APIs',
            'Establish a scalable architecture'
        ]
    ],
    [
        'title' => 'UI/UX Design',
        'thumbImage' => '/assets/images/process/mobile/ui.webp',
        'fullImage' => '/assets/images/process/mobile/creativeimg.webp',
        'description' => 'In this phase, our designers bring your app to life with a user-friendly interface and engaging visual design. We ensure that the app reflects your brand’s identity and provides a smooth user experience across devices.',
        'tasks' => [
            'Design intuitive UI and engaging UX',
            'Incorporate brand elements and colors',
            'Create interactive prototypes for review'
        ]
    ],
    [
        'title' => 'Mobile App Development',
        'thumbImage' => '/assets/images/process/mobile/responsive.webp',
        'fullImage' => '/assets/images/process/mobile/responsiveimg.webp',
        'description' => 'Our development team starts building your mobile app using the latest technologies, ensuring it is responsive, secure, and scalable. We develop both front-end and back-end components, integrating with necessary services.',
        'tasks' => [
            'Develop the app using native or cross-platform technologies',
            'Integrate backend services and APIs',
            'Implement security protocols and data encryption',
            'Conduct regular code reviews and testing'
        ]
    ],
    [
        'title' => 'Quality Assurance',
        'thumbImage' => '/assets/images/process/mobile/quality.webp',
        'fullImage' => '/assets/images/process/mobile/qualityimg.webp',
        'description' => 'Our QA team rigorously tests the app across different devices and operating systems. We ensure that all functionalities work seamlessly, the user experience is flawless, and the app performs optimally under various conditions.',
        'tasks' => [
            'Conduct functional and non-functional testing',
            'Perform usability testing with real users',
            'Ensure compatibility across devices and OS versions',
            'Optimize performance for speed and responsiveness'
        ]
    ],
    [
        'title' => 'Launch & Maintenance',
        'thumbImage' => '/assets/images/process/mobile/launch.webp',
        'fullImage' => '/assets/images/process/mobile/launchimg.webp',
        'description' => 'After final testing, we launch your mobile app on the App Store and/or Google Play. We handle the submission process and ensure your app meets all store requirements. Post-launch, we provide ongoing support and updates to keep your app running smoothly.',
        'tasks' => [
            'Submit the app to relevant app stores',
            'Monitor app performance post-launch',
            'Provide regular updates and enhancements',
            'Offer ongoing support and troubleshooting'
        ]
    ],
];
include '../Components/process.php';
?>
<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Your Vision, Our Mobile App Development Services';
include '../Components/cta.php';
?>
<?php
$secHeading = 'Frequently Asked Questions';
$description = 'Smart Solutions from a Leading Mobile App Development Company';
$faqItems = [
    [
        'question' => 'What are mobile app development services?',
        'answer' => 'Mobile app development services create user-friendly applications for mobile devices, personalized according to specific business needs.'
    ],
    [
        'question' => 'Why choose a mobile app development company?',
        'answer' => 'A good company brings expertise and quality assurance, helping you create a successful app.'
    ],
    [
        'question' => 'What should I consider when developing a mobile app?',
        'answer' => 'Consider your target audience, the platform (iOS or Android), and user experience.'
    ],
    [
        'question' => 'How does app programming help in development?',
        'answer' => 'App programming builds your apps functionality, enabling features like user interaction and data storage.'
    ],
    [
        'question' => 'What platforms can mobile apps be developed for?',
        'answer' => 'Mobile apps are primarily developed for iOS and Android, ensuring wide accessibility.'
    ],
    [
        'question' => 'Does Koder 360 handle app maintenance?',
        'answer' => 'Yes, Koder 360 provides ongoing maintenance to keep your app secure and updated with new features.'
    ]
];
include '../Components/faq.php';
?>
<?php include '../Components/testimonials.php' ?>
<?php include "../includes/footer.php" ?>