<?php
// Check if the login form is submitted
if (isset($_POST['login'])) {
   // Retrieve username and password from the submitted form
   $username = $_POST['username'];
   $password = $_POST['password'];

   // Check if the entered username and password match the expected values
   if ($username == "admin" && $password == "pass") {
      // Start a session and set the user as "admin"
      session_start();
      $_SESSION["user"] = "admin";

      // Redirect to the index.php page upon successful login
      header("Location:index.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS from CDN for styling -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width:600px">
        <div class="login-form">
            <!-- Login form with username, password, and submit button -->
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <!-- Input field for the username -->
                    <input class="form-control" type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <!-- Input field for the password -->
                    <input class="form-control" type="password" name="password" id="" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <!-- Submit button for the login form -->
                    <input class="btn btn-primary" type="submit" value="Login" name="login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
