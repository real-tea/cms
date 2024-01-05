<?php
// Check if the "create" button is pressed in the HTML form
if (isset($_POST["create"])) {
    // Include the connection file to establish a connection to the database
    include("../connect.php");

    // Get and sanitize data from the form
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);

    // Create SQL query to insert data into the "posts" table
    $sqlInsert = "INSERT INTO posts(date, title, summary, content) VALUES ('$date', '$title', '$summary','$content' )";

    // Execute the SQL query and check if it was successful
    if (mysqli_query($conn, $sqlInsert)) {
        // Start a session and set a success message
        session_start();
        $_SESSION["create"] = "Post added successfully";

        // Redirect to the index.php page
        header("Location:index.php");
        echo "data inserted";
    } else {
        // If the query fails, display an error message and terminate the script
        die("Data is not inserted!");
        echo"Data not inserted";
    }
}
?>

<?php
// Check if the "update" button is pressed in the HTML form
if (isset($_POST["update"])) {
    // Include the connection file to establish a connection to the database
    include("../connect.php");

    // Get and sanitize data from the form
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $summary = mysqli_real_escape_string($conn, $_POST["summary"]);
    $content = mysqli_real_escape_string($conn, $_POST["content"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    // Create SQL query to update data in the "posts" table
    $sqlUpdate = "UPDATE posts SET title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = $id";

    // Execute the SQL query and check if it was successful
    if (mysqli_query($conn, $sqlUpdate)) {
        // Start a session and set a success message
        session_start();
        $_SESSION["update"] = "Post updated successfully";

        // Redirect to the index.php page
        header("Location:index.php");
    } else {
        // If the query fails, display an error message and terminate the script
        die("Data is not updated!");
    }
}
?>
