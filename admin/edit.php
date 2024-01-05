<?php 
include("templates/header.php");
?>

<?php
// Get the post ID from the URL
$id = $_GET['id'];

// Check if the ID is present
if ($id) {
    // Include the database connection file
    include("../connect.php");

    // SQL query to select the post with the given ID
    $sqlEdit = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $sqlEdit);
} else {
    // Display a message if no post ID is found
    echo "No post found";
}
?>

<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <form action="process.php" method="post">
        <?php 
        // Loop through the results and display form fields for editing
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <div class="form-field mb-4">
                <!-- Input field for the post title -->
                <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:" value="<?php echo $data['title']; ?>">
            </div>
            <div class="form-field mb-4">
                <!-- Textarea for the post summary -->
                <textarea name="summary"  class="form-control" id="" cols="30" rows="10" placeholder="Enter Summary:"><?php echo $data['summary']; ?></textarea>
            </div>
            <div class="form-field mb-4">
                <!-- Textarea for the post content -->
                <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post:"><?php echo $data['content']; ?></textarea>
            </div>
            <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-field">
                <!-- Submit button for updating the post -->
                <input type="submit" class="btn btn-primary" value="Submit" name="update">
            </div>
        <?php
        }
        ?>
    </form>
</div>

<?php 
include("templates/footer.php");
?>
