<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata for character set and viewport settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title of the webpage -->
    <title>Simple Blog</title>
    
    <!-- Bootstrap CSS from CDN for styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- Header section with the title of the blog -->
    <header class="p-4 bg-dark text-center">
        <h1><a href="index.php" class="text-light text-decoration-none">Simple Blog</a></h1>
    </header>
    
    <!-- Main content section displaying a list of posts -->
    <div class="post-list mt-5">
        <div class="container">
            <?php
                // Include the database connection file
                include("connect.php");

                // SQL query to select all posts from the database
                $sqlSelect = "SELECT * FROM posts";
                $result = mysqli_query($conn, $sqlSelect);

                // Loop through the results and display each post
                while ($data = mysqli_fetch_array($result)) {
            ?>
                    <div class="row mb-4 p-5 bg-light">
                        <div class="col-sm-2">
                            <?php echo $data["date"]; ?>
                        </div>
                        <div class="col-sm-3">
                           <h2><?php echo $data["title"]; ?></h2>
                        </div>
                        <div class="col-sm-5">
                            <?php echo $data["content"]; ?>
                        </div>
                        <div class="col-sm-2">
                            <!-- Link to view a specific post with its ID -->
                            <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">READ MORE</a>
                        </div>
                    </div>
                <?php
                }
            ?>
         </div>
    </div>
    
    <!-- Footer section with a link to the admin panel -->
    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light">Admin Panel</a>
    </div>
</body>
</html>
