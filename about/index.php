<?php include "../includes/header.php" ?>
    <div class="page-wrapper">
<?php include '../includes/sideMenu.php' ?>
    <div class="page-inner">
<?php include '../includes/menu.php' ?>

    <section class="bannerSec">
        <canvas id="fluidCanvas"></canvas>
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <h1>
                            About Us
                        </h1>
                        <p class="w-100">
                           At Koder 360, we turn ideas into Digital Realities. Specializing in Web Design/Development, Mobile App Creation, Social Media Marketing, Paid Campaigns for Google and Meta, SEO, and captivating 2D & 3D Animations
                        </p>
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Request a Quote
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    '/assets/images/client12.webp',
    '/assets/images/client13.webp',
];
$beforeAfterSliderImages = [
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull1.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull3.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull4.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull5.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull6.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull7.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull8.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull9.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull10.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull11.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull12.webp',
    ],
    [
        "title" => 'Lorem Ipsum',
        "itemDesc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, veniam, vero. Commodi dolorum et facilis hic officia sit voluptatum? Amet aspernatur at deleniti explicabo, mollitia nemo nulla omnis perferendis quia quod. Ad corporis doloribus, ea earum eius exercitationem ipsam magnam molestias numquam quas quia repudiandae sunt suscipit totam ut voluptatibus?",
        "image" => '/assets/images/cleintfull13.webp',
    ],
];
include '../Components/featured.php';
?>
<?php
$secHeading = "Custom Design Process";
$description = "Our process for creating a website tailored to your unique goals.";
$processSteps = [
    [
        'title' => 'Web Strategy',
        'thumbImage' => '/assets/images/web.webp',
        'fullImage' => '/assets/images/web-strategyimg.webp',
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
        'thumbImage' => '/assets/images/planning.webp',
        'fullImage' => '/assets/images/planningimg.webp',
        'description' => 'Next, we map out your unique landing pages and define your site map and navigation. We create a plan for your URL structure, along with redirects and a search engine optimization strategy, careful to maintain any existing SEO value from your current site, if applicable.',
        'tasks' => [
            'Design your site structure, navigation and page hierarchy',
            'Map out the conversion funnel for each unique landing page',
            'Create black and white wireframes to show you the bones of your new site'
        ]
    ],
    [
        'title' => 'Creative Design',
        'thumbImage' => '/assets/images/creative.webp',
        'fullImage' => '/assets/images/creativeimg.webp',
        'description' => 'Here’s where your website begins to come to life, as our award-winning designers step in. Your design is filled with color and custom elements as we incorporate your brand’s personality and tailor the user journey to your target market.',
        'tasks' => [
            'Design your custom website',
            'Incorporate your unique branding elements',
            'Present you with full-scale designs in Figma'
        ]
    ],
    [
        'title' => 'Responsive Development',
        'thumbImage' => '/assets/images/responsive.webp',
        'fullImage' => '/assets/images/responsiveimg.webp',
        'description' => 'In the development phase, our expert development team works behind the scenes to build a custom, secure and scalable solution for your brand, on your chosen platform. From B2B to eCommerce, we ensure clean code and a website that’s fully optimized.',
        'tasks' => [
            'Write and finalize coding for your website',
            'Bring your custom solution to life in a secure staging site',
            'Ensure a responsive solution for both desktop and mobile'
        ]
    ],
    [
        'title' => 'Quality Assurance',
        'thumbImage' => '/assets/images/quality.webp',
        'fullImage' => '/assets/images/qualityimg.webp',
        'description' => 'Before we push your custom solution live for the world to see, we follow a stringent quality assurance process, leaving no stone unturned. We continuously test your site’s speed, functionality and other key elements to make sure it’s ready for launch.',
        'tasks' => [
            'Perform meticulously testing across the frontend and backend',
            'Ensure all features and functionalities are working as intended',
            'Make changes as needed to ensure a superior user experience'
        ]
    ],
    [
        'title' => 'Launch & Optimization',
        'thumbImage' => '/assets/images/launch.webp',
        'fullImage' => '/assets/images/launchimg.webp',
        'description' => 'When our QA is complete, it’s time for launch! Our team will set up your server, carry out the DNS configuration and make sure all updates are finalized. We’ll provide Cloudflare security protection, along with both internal and external monitoring.',
        'tasks' => [
            'Perform final QA testing',
            'Devise a marketing plan for launch',
            'Push your new digital solution live'
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