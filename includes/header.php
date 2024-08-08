<?php
if (file_exists(dirname(__FILE__) . '/../includes/config.php')) {
    include(dirname(__FILE__) . '/../includes/config.php');
} elseif (file_exists(dirname(__FILE__) . '/includes/config.php')) {
    include(dirname(__FILE__) . '/includes/config.php');
}
?>
<!doctype html>
<html lang="en" data-wf-page="62c3858f6cfae3f54733f101" data-wf-site="625f0a142cf4b77b35521fd7">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="/assets/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="/assets/css/plugin.css">

    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animations-custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    <?php
    // Define the titles for different pages
    $pageTitles = [
        '' => $SITE_NAME_TEXT . ' One stop digital agency offering a variety of services all around the globe',
        'about' => 'About - ' . $SITE_NAME_TEXT,
        'branding' => 'Branding - ' . $SITE_NAME_TEXT,
        'contact-us' => 'Contact - ' . $SITE_NAME_TEXT,
        'ecommerce' => 'Ecommerce - ' . $SITE_NAME_TEXT,
        'logo-design' => 'Logo Design - ' . $SITE_NAME_TEXT,
        'mobile-apps' => 'Mobile Applications - ' . $SITE_NAME_TEXT,
        'portfolio' => 'Portfolio - ' . $SITE_NAME_TEXT,
        'seo' => 'Search Engine Optimization - ' . $SITE_NAME_TEXT,
        'social-media' => 'Social Media - ' . $SITE_NAME_TEXT,
        'video-animation' => 'Video Animation - ' . $SITE_NAME_TEXT,
        'website-design' => 'Website Design - ' . $SITE_NAME_TEXT,
        'web-portal' => 'Website Portal - ' . $SITE_NAME_TEXT,
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
        'branding' => 'Branding',
        'contact-us' => 'Contact',
        'ecommerce' => 'Ecommerce',
        'logo-design' => 'Logo Design',
        'mobile-apps' => 'Mobile Applications',
        'portfolio' => 'Portfolio',
        'seo' => 'Search Engine Optimization',
        'social-media' => 'Social Media',
        'video-animation' => 'Video Animation',
        'website-design' => 'Website Design',
        'web-portal' => 'Website Portal'
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