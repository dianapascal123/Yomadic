<!DOCTYPE html>
<html>
    <head>
        <title>Yomadic</title>
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/destination-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            include ("header.php");
            include ('db_connection.php');
            $id = $_GET['id'];
        ?>
        <div class = "container">
            <?php 
            include ("display_destination_title.php");
            include ('display_images.php');?>
            <div class = "introduction">
                <?php include ('display_introduction.php'); ?>
                <h4>Content</h4>
                <ol>
                    <li>Things to see</li>
                    <li>When to go</li>
                    <li>Typical costs</li>
                </ol>
            </div>
            <div class = "when-to-go">
                <div class = "row">
                    <div class = "col-lg-4 col-md-4 col-sm-4">
                            <hr>
                        </div>
                        <div class = "col-lg-4 col-md-4 col-sm-4">
                            <h2 class = "text-center">Where to go</h2>
                        </div>
                        <div class = "col-lg-4 col-md-4 col-sm-4">
                            <hr>
                        </div>
                </div>
                <?php include ('display_places.php') ?>
            </div>
            <div class = "when-to-go">
                <div class = "row">
                    <div class = "col-lg-4 col-md-4 col-sm-4">
                        <hr>
                    </div>
                    <div class = "col-lg-4 col-md-4 col-sm-4">
                        <h2 class = "text-center">When to go</h2>
                    </div>
                    <div class = "col-lg-4 col-md-4 col-sm-4">
                        <hr>
                    </div>
                </div>
                <?php include ('display_period.php') ?>
            </div>
           
            <?php include ('commentsection.php') ?>
        </div>
        <?php include ("pagefooter.php") ?>
    </body>
</html>