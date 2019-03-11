<!DOCTYPE html>
<html>
    <head>
        <title>Yomadic</title>
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Dancing+Script|Pacifico" rel="stylesheet">
        <link rel = "stylesheet" type="text/css" href="/CSS/headerstyle.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/traveltips-style.css">
        <link rel = "stylesheet" type="text/css" href="/CSS/comment-style.css">
        <link rel = "stylesheet" href = "/css/bootstrap.min.css">
        <script src = "/Javascript/tipRedirect.js"></script>
        <!-- file to redirect to tip that was clicked -->
        <?php include ("db_connection.php") ?>
    </head>
    <body>
        <?php include ('header.php') ?>
        <div class = "container">
            <div class = "introduction">
                <h1 class = "text-center">Plan your next adventure</h1>
                <img src = "/Resources/tip.jpg" alt = "tip">
                <p>It can be hard to know where to start when planning your dream trip.

                   What’s the first step? What’s the second? Third? Fourth?

                   Travel can seem like a daunting subject with so much information available and, the longer you go away, the more things you seem to have to think about.

                   I want to make planning your next gap year, family vacation, around the world, or backpacking trip simple and easy.

                   On this page, you’ll find a curated list of the best articles on this site related to planning a trip – whether it’s a two week vacation to Italy, or a year-long trip around the world. The tips are broken down into categories so you can find the information you need fast and effectively.
                </p>
                <ul>
                    <?php include ("display_tips.php") ?>
                </ul>
            </div>
            <?php include ("commentsection.php") ?>
        </div>
        
    </body>
</html>