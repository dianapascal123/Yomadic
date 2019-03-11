<!DOCTYPE html>
<?php session_start();
$_SESSION['last_visited'] = $_SERVER['REQUEST_URI'];
?>
<html>
    <head>
        <title>Yomadic</title>
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/complete-post-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <?php include ("db_connection.php") ?>
    </head>
    <body>
        <?php
            include ('header.php');
            $id = $_GET['id'];
        ?>
        <div class = "container">
            <div class = "post">
                <?php include ("display_complete_post.php") ?>
            </div>
            <?php include ("commentsection.php") ?>
            <?php include ("pagefooter.php") ?>
        </div>
    </body>
</html>