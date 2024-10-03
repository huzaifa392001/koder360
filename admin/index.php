<?php 
include 'authenticate.php'; 
include './include/header.php'; 
include 'connect.php'; 



// Fetch blogs from the database
$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);
?>

<section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headingCont">
                    <h2 class="secHeading">Blogs</h2>
                    <div class="btnCont">
                        <a class="themeBtn" href="/admin/addBlog.php">
                            Add Blogs
                            <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blogListSec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while($row = $result->fetch_assoc()) {
                                $imagePath = 'uploads/' . $row['image'];
                                $heading = htmlspecialchars($row['heading']);
                                $content = substr($row['content'], 0, 200); // Display a snippet of the content
                                $editLink = '/admin/editBlog.php?id=' . $row['id'];
                                ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo $imagePath; ?>" alt="" style="width: 100px; height: auto;">
                                    </td>
                                    <td><?php echo $heading; ?></td>
                                    <td>
                                        <div>
                                            <?php echo $content; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btnCont">
                                            <a class="themeBtn" href="<?php echo $editLink; ?>">
                                                Edit
                                                <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b></a>
                                            <form action="deleteBlog.php" method="post" style="display:inline;">
                                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="themeBtn dltBtn">
                                                    Delete
                                                    <span></span><span></span><span></span><span></span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='4'>No blogs found</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$conn->close();
include './include/footer.php'; 
?>
