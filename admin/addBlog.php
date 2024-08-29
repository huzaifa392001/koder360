<?php 
include 'authenticate.php'; 
include './include/header.php'; 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
$servername = "localhost"; // Change to your database server
$username = "u986322413_phantom"; // Change to your database username
$password = "U986322413_admin"; // Change to your database password
$dbname = "u986322413_phantom"; // Change to your database name


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $slug = mysqli_real_escape_string($conn, $_POST['slug']);
    $meta_tags = mysqli_real_escape_string($conn, $_POST['meta_tags']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $target_dir = "uploads/";
    $image = $_FILES['cuctomeimage']['name'];
    $target_file = $target_dir . basename($image);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['cuctomeimage']['tmp_name']);
    if ($check === false) {
        echo "<script>alert('File is not an image.');</script>";
        $uploadOk = 0;
    }

    if ($_FILES['cuctomeimage']['size'] > 5000000) {
        echo "<script>alert('Sorry, your file is too large.');</script>";
        $uploadOk = 0;
    }

    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.');</script>";
    } else {
        if (move_uploaded_file($_FILES['cuctomeimage']['tmp_name'], $target_file)) {
            $query = "INSERT INTO blogs (title, heading, slug, description, content, image) 
                      VALUES ('$title', '$heading', '$slug', '$meta_tags', '$content', '$image')";

            if (mysqli_query($conn, $query)) {
                echo "<script>
                        alert('Blog has been added successfully');
                        window.location.href = 'index.php';
                      </script>";
            } else {
                echo "<script>alert('Database Error: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    }

    mysqli_close($conn);
}
?>

<link rel="stylesheet" href="/assets/css/editor.css">

<section class="blogListSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headingCont">
                    <h2 class="secHeading">Add Blog</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="addBlogSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="addBlog.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="content" id="editor-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Add Title</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="title" class="form-control"
                                                               placeholder="Enter Meta title" id="title" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Add Heading</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="heading" class="form-control"
                                                               placeholder="Enter heading" id="heading" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Add Slug</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="slug" class="form-control"
                                                               placeholder="Enter Slug" id="slug">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Add Meta Tags</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="meta_tags" class="form-control"
                                                               placeholder="Enter Meta Tags" id="meta_tags">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Add Content</h5>
                                                    <div id="div_editor1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="my-2">Upload Image</h5>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="cuctomeimage" id="cuctomeimage" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-dark ml-2" onclick="datapass();">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/assets/js/editor.js"></script>
<script>
    var editor1 = new RichTextEditor("#div_editor1");

    function datapass() {
        var editorContent = editor1.getHTMLCode();
        var title = $('#title').val().trim();
        var heading = $('#heading').val().trim();
        var slug = $('#slug').val().trim();
        var metaTags = $('#meta_tags').val().trim();
        var content = editorContent.trim();
        var image = $('#cuctomeimage')[0].files[0];

        if (title === '') {
            alert('Please mention title first');
            return false;
        } else if (slug === '') {
            alert('Please mention slug');
            return false;
        } else if (metaTags === '') {
            alert('Please mention meta tags');
            return false;
        } else if (content === '' || content === '<p><br></p>') {
            alert('Please mention content');
            return false;
        } else if (!image) {
            alert('Please add image first');
            return false;
        } else {
            $('#editor-content').val(editorContent);
        }
    }
</script>

<?php include './include/footer.php'; ?>
