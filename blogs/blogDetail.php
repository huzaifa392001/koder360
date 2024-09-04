<?php
// Database connection settings
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

// Get blog ID from URL
$blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$title = "Blog Detail - Koder360 Blogs";
$description = "Read the detailed blog post on Koder360.";

if ($blog_id > 0) {
    // Fetch the specific blog post
    $sql = "SELECT title, heading, content FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = htmlspecialchars($row['title']);
        $description = htmlspecialchars(substr(strip_tags($row['content']), 0, 150)); // Extract a snippet of content for the description
    }

    $stmt->close();
}


?>


<?php include "../includes/header.php" ?>
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <div class="page-wrapper">
<?php include '../includes/sideMenu.php' ?>
    <div class="page-inner">
<?php
$headingClass = 'black';
include '../includes/menu.php'
?>

    <section class="singleBlogSec">
        <div class="container-fluid">
            <div class="row">
                <?php

                if ($blog_id > 0) {
                    // Fetch the specific blog post
                    $sql = "SELECT id, title, heading, image, content FROM blogs WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $blog_id);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<div class="col-12">';
                        echo '        <figure class="blogImg">';
                        echo '            <img src="../admin/uploads/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['heading']) . '">';
                        echo '        </figure>';
                        echo '    <div class="container">';
                        echo '        <div class="blogDetailCard">';
                        echo '            <div class="content">';
                        echo '                <h2>' . htmlspecialchars($row['heading']) . '</h2>';
                        echo '                <p>' . htmlspecialchars_decode($row['content']) . '</p>'; // Display full content
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    } else {
                        echo '<div class="col-12"><p>Blog post not found.</p></div>';
                    }

                    $stmt->close();
                } else {
                    echo '<div class="col-12"><p>Invalid blog ID.</p></div>';
                }

                ?>
            </div>
        </div>
    </section>

<?php
$subHeading = 'WORK WITH US';
$mainHeading = 'Let’s work together to build something great';
include '../Components/cta.php';
?>
<?php include '../Components/testimonials.php' ?>
<?php include "../includes/footer.php" ?>