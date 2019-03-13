<?php
    session_start();
    $_SESSION['last_visited'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yomadic</title>
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/destinations-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- file to redirect to page of the destination that is clicked -->
        <script src = "/Javascript/redirectToDestination.js"></script>
        <?php include ('db_connection.php'); ?>
    </head>
    <body>
        <?php include ('header.php') ?>
        <div class = "container destination">
            <?php include ('display_destinations.php');
                  include ('commentsection.php');
            ?>
        </div>
        <?php include ("pagefooter.php") ?>
    </body>
</html>