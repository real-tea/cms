<?php
include("templates/header.php");
?>

<div class="post w-100 bg-light p-5">
    <?php
    // Get the post ID from the URL
    $id = $_GET["id"];

    // Check if the ID is present
    if ($id) {
        // Include the database connection file
        include("../connect.php");

        // Select the post with the given ID from the database
        $sqlSelectPost = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($conn, $sqlSelectPost);

        // Loop through the results and display post details
        while ($data = mysqli_fetch_array($result)) {
        ?>
        <h1><?php echo  $data['title']; ?></h1>
        <p><?php echo $data['date']; ?></p>
        <p><?php echo $data['content']; ?></p>
        <?php
        }
    } else {
        // Display a message if the post ID is not found
        echo "Post Not Found";
    }
    ?>
</div>

<?php
include("templates/footer.php");
?>
