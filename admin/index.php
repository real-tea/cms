<?php
// Include the header template
include("templates/header.php");
?>

<div class="posts-list w-100 p-5">
    <?php
    // Display success messages for various operations if they exist in the session
    if (isset($_SESSION["create"])) {
    ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
    <?php
        // Remove the success message from the session after displaying it
        unset($_SESSION["create"]);
    }
    ?>
    <?php
    if (isset($_SESSION["update"])) {
    ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
    <?php
        unset($_SESSION["update"]);
    }
    ?>
    <?php
    if (isset($_SESSION["delete"])) {
    ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
    <?php
        unset($_SESSION["delete"]);
    }
    ?>

    <!-- Display a table with posts information -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width:15%;">Publication Date</th>
                <th style="width:15%;">Title</th>
                <th style="width:45%;">Article</th>
                <th style="width:25%;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include the database connection file
            include('../connect.php');

            // Select all posts from the database
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sqlSelect);

            // Loop through the results and display each post in a table row
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $data["date"]?></td>
                    <td><?php echo $data["title"]?></td>
                    <td><?php echo $data["summary"]?></td>
                    <td>
                        <!-- Action buttons for viewing, editing, and deleting a post -->
                        <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                        <a class="btn btn-warning"  href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Include the footer template
include("templates/footer.php");
?>
