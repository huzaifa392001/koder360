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
                            Blogs
                        </h1>
                        <p class="w-100">
                            Discover insightful blogs that inform, inspire, and engage. We dive deep into diverse
                            topics, delivering
                            well-crafted content that resonates with our audience. Each article is meticulously crafted
                            to offer
                            valuable perspectives and actionable insights that exceed expectations.
                        </p>
                        <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Request a Quote
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blogsSec">
        <div class="container">
            <div class="row">

                <?php

                $servername = "localhost"; // Change to your database server
                $username = "koder360_koder360"; // Change to your database username
                $password = "o=Q-~m_A^r;y"; // Change to your database password
                $dbname = "koder360_koder360"; // Change to your database name

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch blog posts
                $sql = "SELECT id, title, heading, slug, image, content FROM blogs order by id desc";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-4">';
                        echo '    <div class="blogCard">';
                        echo '        <a href="blogDetail.php?id=' . htmlspecialchars($row['id']) . '">';
                        echo '            <figure>';
                        echo '                <img src="../admin/uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['heading']) . '">';
                        echo '            </figure>';
                        echo '        </a>';
                        echo '        <div class="content">';
                        echo '            <h2>' . htmlspecialchars($row['heading']) . '</h2>';
                        echo '            <p>' . substr($row['content'], 0, 200) . '</p>';
                        echo '            <a class="themeBtn" href="blogDetail.php?id=' . htmlspecialchars($row['id']) . '" >Read More <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-12"><p>No blog posts found.</p></div>';
                }

                // Close connection
                $conn->close();
                ?>


            </div>
        </div>
    </section>

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