<!DOCTYPE html>
<html>
    <head>
        <title>Yomadic</title>
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/tip-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <?php include ("db_connection.php") ?>
    </head>
    <body>
        <?php include ('header.php') ?>
        <?php
            $id = $_GET['id'];
        ?>
        <div class = "container" id = "content">
            <?php include ("display_tip_title.php") ?>
            <hr>
            <div class = "introduction">
                <?php include ("display_intro.php") ?>
            </div>
            <div class = "content">
                <h3>Table of contents: </h3>
                <ol>
                    <?php include ("display_table_contents.php") ?>
                </ol>
                <?php include ("display_tip_content.php") ?>
            </div>
            <?php include ("commentsection.php") ?>
        </div>
        
    </body>
</html>