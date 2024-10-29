<?php
if (file_exists(dirname(__FILE__) . '/../includes/config.php')) {
    include(dirname(__FILE__) . '/../includes/config.php');
} elseif (file_exists(dirname(__FILE__) . '/includes/config.php')) {
    include(dirname(__FILE__) . '/includes/config.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="/assets/images/favicon.webp" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/plugins.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="/assets/css/styles.css" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="/assets/css/responsive.css" onload="this.onload=null;this.rel='stylesheet'">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="XIjO6R4imxxoN2tKK4pS3HbfXkFmK5KWqsGHNxideTA" />

    <?php
    // Define the titles for different pages
    $pageTitles = [
        '' => $SITE_NAME_TEXT . ' One stop digital agency offering a variety of services all around the globe',
        'about' => 'About - ' . $SITE_NAME_TEXT,
        'contact' => 'Contact - ' . $SITE_NAME_TEXT,
        'mobile-apps' => 'Mobile Applications - ' . $SITE_NAME_TEXT,
        'portfolio' => 'Portfolio - ' . $SITE_NAME_TEXT,
        'seo' => 'Search Engine Optimization - ' . $SITE_NAME_TEXT,
        'social-media' => 'Social Media - ' . $SITE_NAME_TEXT,
        'video-animation' => 'Video Animation - ' . $SITE_NAME_TEXT,
        'website-design' => 'Website Design - ' . $SITE_NAME_TEXT,
        'web-portal' => 'Website Portal - ' . $SITE_NAME_TEXT,
        'blogs' => 'Blogs - ' . $SITE_NAME_TEXT,
        'thank-you' => 'Thank You - ' . $SITE_NAME_TEXT,
    ];

    // Define the meta descriptions for different pages
    $pageDescriptions = [
        '' => 'Discover Koder360 - your one-stop digital agency offering innovative web development, mobile apps, SEO, and much more.',
        'about' => 'Learn more about Koder360 and how we provide cutting-edge web and mobile app development services.',
        'contact' => 'Contact Koder360 for professional web design, mobile app development, SEO, and digital marketing services.',
        'mobile-apps' => 'Koder360 specializes in mobile app development that delivers high performance and user satisfaction.',
        'portfolio' => 'View the portfolio of Koder360 - showcasing our diverse and successful digital projects.',
        'seo' => 'Boost your online presence with Koder360’s SEO services tailored for businesses of all sizes.',
        'social-media' => 'Koder360 offers expert social media management and marketing services to grow your online influence.',
        'video-animation' => 'Create engaging video animations with Koder360’s top-notch video production services.',
        'website-design' => 'Transform your online presence with Koder360’s professional website design services.',
        'web-portal' => 'Explore our web portal development solutions for streamlined and efficient business operations.',
        'blogs' => 'Read the latest blogs from Koder360 on web development, SEO, and digital marketing trends.',
        'thank-you' => 'Thank you for visiting Koder360. We look forward to helping you with your digital solutions.'
    ];

    // Get the current page slug from the URL
    $currentSlug = trim(basename($_SERVER['REQUEST_URI'], ".php"), '/');

    // Determine title
    if (array_key_exists($currentSlug, $pageTitles)) {
        $title = $pageTitles[$currentSlug];
    } else {
        // Default to home page title if slug not found
        $title = 'Home Page - ' . $SITE_NAME_TEXT;
    }

    // Determine description
    if (array_key_exists($currentSlug, $pageDescriptions)) {
        $description = $pageDescriptions[$currentSlug];
    } else {
        // Default to home page description if slug not found
        $description = 'Welcome to Koder360 - your one-stop digital solution for web development, mobile apps, SEO, and more.';
    }

    // Define the canonical URLs for different pages
    $canonicalUrls = [
        'about' => 'About',
        'contact' => 'Contact',
        'mobile-apps' => 'Mobile Applications',
        'portfolio' => 'Portfolio',
        'seo' => 'Search Engine Optimization',
        'social-media' => 'Social Media',
        'video-animation' => 'Video Animation',
        'website-design' => 'Website Design',
        'web-portal' => 'Website Portal',
        'blogs' => 'Blogs',
        'thank-you' => 'Thank You'
    ];


    // Get the current page slug from the URL
    $currentSlug = trim(basename($_SERVER['REQUEST_URI'], ".php"), '/');

    // Determine canonical URL
    if ($currentSlug === '' || $currentSlug === 'index') {
        // Home page
        $canonicalUrl = BASE_URL;
    } elseif (array_key_exists($currentSlug, $canonicalUrls)) {
        // Other pages
        $canonicalUrl = BASE_URL . $currentSlug . '/';
    } else {
        // Fallback or error handling
        $canonicalUrl = BASE_URL;
    }
    ?>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N9TJQ5RM');</script>
    <!-- End Google Tag Manager -->
</head>

<body>

<?php include './schema/home.php' ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9TJQ5RM"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="fullMenu">
    <div class="bgImg about"></div>
    <div class="bgImg portfolio"></div>
    <div class="bgImg contact"></div>
    <ul>
        <li>
            <a href="/web-development/">
                Web Development
            </a>
        </li>
        <li>
            <a href="/web-portal/">
                Web Portal
            </a>
        </li>
        <li>
            <a href="/mobile-apps/">
                Mobile Apps
            </a>
        </li>
        <li>
            <a href="/social-media">
                Social Media
            </a>
        </li>
        <li>
            <a href="/video-animation/">
                Video Animation
            </a>
        </li>
        <li>
            <a href="/seo/">
                SEO
            </a>
        </li>
    </ul>
    <div class="secondList">
        <div class="icon">
            <a href="/about/" data-img="about">
                <span>01</span>
                About
            </a>
        </div>
        <div class="icon">
            <a href="/portfolio/" data-img="portfolio">
                <span>02</span>
                Portfolio
            </a>
        </div>
        <div class="icon">
            <a href="/blogs/" data-img="portfolio">
                <span>03</span>
                Blog
            </a>
        </div>
        <div class="icon">
            <a href="/contact/" data-img="contact">
                <span>03</span>
                Contact
            </a>
        </div>
    </div>
</div>