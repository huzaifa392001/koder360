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
                            Catchy Video Animation
                            <br>
                            Services
                        </h1>
                        <p>
                            Immersive interactions are enhanced two-fold with our engaging and captivating 2D & 3D
                            animation services.
                        </p>
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
                Our SEO Services
            </h2>
        </div>
        <div class="serviceRow">
            <img loading="lazy" src="/assets/images/portfolio/videoanimation/slide1.webp" alt="" class="first active">
            <img loading="lazy" src="/assets/images/portfolio/videoanimation/slide2.webp" alt="" class="second">
            <img loading="lazy" src="/assets/images/portfolio/videoanimation/slide3.webp" alt="" class="third">
            <img loading="lazy" src="/assets/images/portfolio/videoanimation/slide4.webp" alt="" class="forth">
            <div class="serviceBox active" data-img="first">
                <div class="content">
                    <h3>
                        <span>01</span>
                        2D Character
                    </h3>
                    <p>
                        Full-service 2D character animation services created using top-of-the-line tools and
                        technologies.
                    </p>
                    <a href="/assets/images/portfolio/videoanimation/2d-character.mp4" data-fancybox class="playBtn">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="serviceBox" data-img="second">
                <div class="content">
                    <h3>
                        <span>02</span>
                        Explainer Video
                    </h3>
                    <p>
                        Due to our strict employing and training process, we have the best animators at Creative Design
                        Crew. Not only the videos that are tailored to your taste convey the message, but also convince
                        the viewers.
                    </p>
                    <a href="/assets/images/portfolio/videoanimation/explainer-animation.mp4" data-fancybox class="playBtn">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="serviceBox" data-img="third">
                <div class="content">
                    <h3>
                        <span>03</span>
                        Whiteboard Animation
                    </h3>
                    <p>
                        The animations on the whiteboard are usually explanatory videos for business people who try to
                        explain their ideas or reports in presentations. We, as the leading producer of whiteboard
                        animation, create memorable content for internationally recognized brands.
                    </p>
                    <a href="/assets/images/portfolio/videoanimation/whiteboard.mp4" data-fancybox class="playBtn">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
            <div class="serviceBox" data-img="forth">
                <div class="content">
                    <h3>
                        <span>04</span>
                        2D Graphic Animation
                    </h3>
                    <p>
                        Storyboarding, illustrations, backgrounds, and real-life graphic movement done right for you!
                    </p>
                    <a href="/assets/images/portfolio/videoanimation/2d-graphic-animation.mp4" data-fancybox class="playBtn">
                        <i class="fas fa-play"></i>
                    </a>
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
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port1.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port2.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port3.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port4.webp" class="img-fluid" alt="">
                </figure>
            </li>
        </ul>
        <ul class="portfoliowrapper portfoliowrapper1">
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port5.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port6.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port7.webp" class="img-fluid" alt="">
                </figure>
            </li>
            <li>
                <figure>
                    <img loading="lazy" src="/assets/images/portfolio/videoanimation/port8.webp" class="img-fluid" alt="">
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
$secHeading = "Custom Video Animation Process";
$description = "Our detailed process for creating compelling video animations that captivate your audience and bring your brand’s story to life.";
$processSteps = [
    [
        'title' => 'Concept Development & Storyboarding',
        'thumbImage' => '/assets/images/process/video/video.webp',
        'fullImage' => '/assets/images/process/video/web-strategyimg.webp',
        'description' => 'We start by understanding your goals, target audience, and the message you want to convey. Based on this, we develop a concept and create a detailed storyboard that outlines the visual flow and key scenes of your animation.',
        'tasks' => [
            'Understand your brand and project goals',
            'Develop a unique animation concept',
            'Create a detailed storyboard',
            'Outline key scenes and transitions'
        ]
    ],
    [
        'title' => 'Scriptwriting & Voiceover',
        'thumbImage' => '/assets/images/process/video/writing.webp',
        'fullImage' => '/assets/images/process/video/planningimg.webp',
        'description' => 'A well-crafted script is crucial for effective storytelling. We write a script that aligns with your brand’s voice and the animation’s objectives. If needed, we also arrange professional voiceover talent to bring the script to life.',
        'tasks' => [
            'Write a compelling and concise script',
            'Ensure the script aligns with the storyboard',
            'Select or recommend voiceover talent',
            'Record and edit the voiceover for clarity and tone'
        ]
    ],
    [
        'title' => 'Design & Illustration',
        'thumbImage' => '/assets/images/process/video/design.webp',
        'fullImage' => '/assets/images/process/video/creativeimg.webp',
        'description' => 'Our design team creates custom illustrations and visual elements that match your brand’s style. We focus on designing characters, backgrounds, and other assets that will be animated, ensuring everything is visually appealing and consistent.',
        'tasks' => [
            'Design custom characters and backgrounds',
            'Create visual assets for animation',
            'Ensure illustrations align with your brand identity',
            'Prepare all elements for animation'
        ]
    ],
    [
        'title' => 'Animation & Motion Graphics',
        'thumbImage' => '/assets/images/process/video/animation.webp',
        'fullImage' => '/assets/images/process/video/responsiveimg.webp',
        'description' => 'This is where the magic happens. Our animators bring the storyboard to life by creating smooth, engaging animations. We use motion graphics and special effects to enhance the visual storytelling and keep viewers captivated.',
        'tasks' => [
            'Animate characters, scenes, and transitions',
            'Incorporate motion graphics and special effects',
            'Sync animation with voiceover and music',
            'Ensure smooth and natural movements'
        ]
    ],
    [
        'title' => 'Sound Design & Music',
        'thumbImage' => '/assets/images/process/video/sound.webp',
        'fullImage' => '/assets/images/process/video/qualityimg.webp',
        'description' => 'Sound plays a critical role in creating an immersive experience. We add sound effects and background music that complement the visuals, enhancing the overall impact of your animation and ensuring it resonates with your audience.',
        'tasks' => [
            'Select or create background music',
            'Add sound effects to match the animation',
            'Mix and master audio for clarity and balance',
            'Ensure sound complements the visual narrative'
        ]
    ],
    [
        'title' => 'Final Review & Delivery',
        'thumbImage' => '/assets/images/process/video/final.webp',
        'fullImage' => '/assets/images/process/video/launchimg.webp',
        'description' => 'Before delivering the final animation, we conduct a thorough review to ensure everything meets our quality standards. Once approved, we deliver the animation in your preferred format, ready for distribution across various platforms.',
        'tasks' => [
            'Perform a comprehensive review of the animation',
            'Make any necessary revisions',
            'Deliver the final animation in required formats',
            'Provide support for distribution and promotion'
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