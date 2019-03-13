<!DOCTYPE html>
<html>
    <head>
        <script src = "/Javascript/submit.js"></script>
        <link rel = "stylesheet" type="text/css" href="/CSS/error-style.css">
    </head>
    <?php include ('admin.php') ?>
    <body>
        <form action = "admin_form.php" method = "post">
            <?php include ("errors.php") ?>
            <label for = "title" >Title</label>
            <input type = "text" name = 'title'>
            <label for = "body" >Post</label>
            <input type = "textarea" name = 'body'>
            <label for = "image">Image</label>
            <input type = "text" name = "image">
            <button type = "submit" name = "submit" id = "submit">Submit</button>
        </form>
    </body>
</html>