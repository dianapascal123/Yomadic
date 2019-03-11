<?php
    echo "<button type = 'button' class = 'btn my-btn' id = 'add-post'>Add a post</button>";
    include ('new_post.php');
?>
    
    <div id = "form_post">
        <!-- <div class = "container"> -->
            <h3>Add post</h3>
            <form action = "../main.php" method = "post">
                <div class = "form-group">
                    <label for = "title">Title</label>
                    <input type = "text" class = "form-control" name = "title">
                </div>
                <div class = "form-group">
                    <label for = "summary">Summary</label>
                    <input type = "textarea" class = "form-control" name = "summary">
                </div>
                <div class = "form-group">
                    <label for = "body">Body</label>
                    <input type = "textarea" class = "form-control" name = "body">
                </div>
                <div class = "form-group">
                    <label for = "image_url">Image URL</label>
                    <input type = "text" class = "form-control" name = "image_url">
                </div>
                <button type = "submit" class = "btn my-btn" id = "submit">Submit</button>
            </form>
        <!-- </div> -->
    </div>
    