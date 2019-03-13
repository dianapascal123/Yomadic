<?php include ("login.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/my-form.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/error-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- disable the submit buttons when page is loaded -->
        <script src = "/Javascript/submitButtonDisable.js"></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <div class = "container my-form">
            <div class = "row">
                <div class = "col-lg-3"></div>
                <div class = "col-lg-6">
                    <h1>Log in</h1>
                </div>
                <div class = "col-lg-3"></div>
            </div>
            <div class = "row">
                <div class = "col-lg-3"></div>
                <div class = "col-lg-6">
                    <form action = "loginform.php" method = "post">
                        <?php include('errors.php') ?>
                        <div class = "form-group">
                            <label for = "username">Username</label>
                            <input type = "text" class = "form-control" name = "username">
                        </div>
                        <div class = "form-group">
                            <label for = "password">Password</label>
                            <input type = "password" class = "form-control" name = "password">
                        </div>
                        <button type = "submit" class = "btn" id = "submit-button" name = "log-in-button">Log in</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- <?php include ("pagefooter.php") ?> -->
    </body>
</html>