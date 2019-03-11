<!DOCTYPE html>
<html>
    <head>
        <script src = "/Javascript/submit.js"></script>
    </head>
    <?php include ('admin.php') ?>
    <body>
        <form action = "admin_form.php" method = "post">
            <label for = "title" >Title</label>
            <input type = "text" name = 'title'>
            <label for = "body" >Post</label>
            <input type = "text" name = 'body'>
            <label for = "image">Image</label>
            <input type = "text" name = "image">
            <button type = "submit" name = "submit" id = "sub">Submit</button>
        </form>
    </body>
</html>