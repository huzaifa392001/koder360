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
                            Mobile Apps That Offer
                            <br>
                            Incredible User Experience
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
        </div>
        <div class="serviceRow">
            <img src="/assets/images/portfolio/mobileapps/slide1.webp" alt="" class="first active">
            <img src="/assets/images/portfolio/mobileapps/slide2.webp" alt="" class="second">
            <img src="/assets/images/portfolio/mobileapps/slide3.webp" alt="" class="third">
            <img src="/assets/images/portfolio/mobileapps/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        iOS App Development
                    </h3>
                    <p>
                        We pride ourselves on being experts in iOS app development and we believe in helping your
                        business thrive by having a great mobile app for your products and services. We have dedicated
                        app developers you can trust.
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
                        We provide custom Android apps for small and large businesses. With industry-specific expertise,
                        our developers understand industry requirements and add value to mobile app services.
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
                        We specialize in crafting Ecommerce apps that empower your business with a seamless mobile
                        shopping experience, fostering growth in the digital marketplace.
                    </p>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        Hybird Apps
                    </h3>
                    <p>
                        Hybrid apps are web apps that have a look and feel similar to native apps. We design and develop
                        Hybrid Apps in such a way that they can be downloaded and operated on all operating systems.
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
                    <img src="/assets/images/portfolio/mobileapps/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port4.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port7.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img src="/assets/images/portfolio/mobileapps/port8.webp" class="img-fluid" alt="">
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
        "image" => '/assets/images/mobile/mobile1.png',
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