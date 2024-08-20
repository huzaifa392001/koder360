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
        'thank-you' => 'Thank You - ' . $SITE_NAME_TEXT,
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

    // Output the canonical link
    echo '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') . '">';

    ?>
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
</head>

<body>
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
            <a href="/contact/" data-img="contact">
                <span>03</span>
                Contact
            </a>
        </div>
    </div>
</div>