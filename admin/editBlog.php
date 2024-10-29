<?php
include 'authenticate.php';
include './include/header.php';
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $id = intval($_POST['id']);
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

    // Fetch existing image
    $sql = "SELECT image FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $existingImage = $result->fetch_assoc()['image'];
    $stmt->close();

    if ($image) {
        // Check if uploaded image is valid
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
                // Update blog with new image
                $imageQueryPart = ", image = '$image'";
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        }
    } else {
        // No new image, keep existing image
        $imageQueryPart = "";
    }

    // Update the blog post
    $query = "UPDATE blogs SET title = '$title', heading = '$heading', slug = '$slug', description = '$meta_tags', content = '$content' $imageQueryPart WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Blog has been updated successfully');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>alert('Database Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}

// Fetch existing blog data for editing
$blogId = isset($_GET['id']) ? intval($_GET['id']) : 0;
$blog = null;

if ($blogId > 0) {


    $sql = "SELECT * FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $blogId);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
}
?>

<link rel="stylesheet" href="/assets/css/editor.css">

<section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headingCont">
                    <h2 class="secHeading">Add Blogs</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="addBlogSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="editBlog.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($blog['id']); ?>">
                    <input type="hidden" name="content" id="editor-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Edit Title</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="title" class="form-control"
                                                               placeholder="Enter Meta title" id="title"
                                                               value="<?php echo htmlspecialchars($blog['title']); ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Edit Heading</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="heading" class="form-control"
                                                               placeholder="Enter heading" id="heading"
                                                               value="<?php echo htmlspecialchars($blog['heading']); ?>"
                                                               required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Edit Slug</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="slug" class="form-control"
                                                               placeholder="Enter Slug" id="slug"
                                                               value="<?php echo htmlspecialchars($blog['slug']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Edit Meta Tags</h5>
                                                    <div class="input-group">
                                                        <input type="text" name="meta_tags" class="form-control"
                                                               placeholder="Enter Meta Tags" id="meta_tags"
                                                               value="<?php echo htmlspecialchars($blog['description']); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h5 class="my-2">Edit Content</h5>
                                                    <div id="div_editor1"><?php echo $blog['content']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="my-2">Current Image</h5>
                                                <div class="form-group">
                                                    <?php if ($blog['image']): ?>
                                                        <img src="uploads/<?php echo htmlspecialchars($blog['image']); ?>"
                                                             alt="Current Image" width="150">
                                                    <?php else: ?>
                                                        <p>No image uploaded</p>
                                                    <?php endif; ?>
                                                </div>
                                                <h5 class="my-2">Upload New Image (optional)</h5>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="cuctomeimage"
                                                           id="cuctomeimage"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-dark ml-2" onclick="datapass();">
                                                    Update
                                                </button>
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
