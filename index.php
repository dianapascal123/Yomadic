<!DOCTYPE html>
<?php session_start();
$_SESSION['last_visited'] = $_SERVER['REQUEST_URI'];
?>
<html>
    <head>
        <title>Yomadic</title>
        <link rel = "stylesheet" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/main-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/PageFooter-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/admin-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/error-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        <link rel = "stylesheet" type="text/css" href="CSS/body-style.css">
        <!-- display complete post when a post in main page is clicked -->
        <script src = "/Javascript/post.js"></script>
        <?php include ("Php/db_connection.php") ?>
    </head>
    <body>
      <?php include ('Php/header.php') ?>
      <div class = "image-text">
          <img src = "/Resources/landscape.jpg" alt = "landscape">
          <div class = "centered">
            <p>Don't listen to what they say. Go see.</p>
          </div>
      </div>
      <div class = "container">
        <?php include ('Php/pagebody.php');
              if ($_SESSION['user']['username'] == "admin")
                {
                  include ('Php/admin.php');
                  echo '<script src = "/Javascript/admin_form.js"></script>';

                }
              include ('Php/commentsection.php') ?>
      </div>
        <?php include ('Php/pagefooter.php') ?>    
    </body>
</html>