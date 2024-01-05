<?php
// Get the post ID from the URL
$id = $_GET["id"];

// Check if the ID is present
if ($id) {
    // Include the database connection file
    include("../connect.php");

    // SQL query to delete the post with the given ID
    $sqlDelete = "DELETE FROM posts WHERE id = $id";

    // Attempt to execute the delete query
    if (mysqli_query($conn, $sqlDelete)) {
        // Start a session and set a success message
        session_start();
        $_SESSION["delete"] = "Post deleted successfully";

        // Redirect to the index.php page after successful deletion
        header("Location:index.php");
    } else {
        // Display an error message and terminate the script if the query fails
        die("Something is not right. Data is not deleted");
    }
} else {
    // Display a message if no post ID is found
    echo "Post not found";
}
?>
