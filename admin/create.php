<?php 
// Include the header template
include("templates/header.php");
?>

<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <!-- Form for creating a new post -->
    <form action="process.php" method="post">
        <div class="form-field mb-4">
            <!-- Input field for the post title -->
            <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:">
        </div>
        <div class="form-field mb-4">
            <!-- Textarea for the post summary -->
            <textarea name="summary" class="form-control" id="" cols="30" rows="10" placeholder="Enter Summary:"></textarea>
        </div>
        <div class="form-field mb-4">
            <!-- Textarea for the post content -->
            <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter Post:"></textarea>
        </div>
        <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">

        <div class="form-field">
            <!-- Submit button for creating a new post -->
            <input type="submit" class="btn btn-primary" value="Submit" name="create">
        </div>
    </form>
</div>

<?php 
// Include the footer template
include("templates/footer.php");
?>
