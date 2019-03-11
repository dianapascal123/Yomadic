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
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
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
    </body>
</html>