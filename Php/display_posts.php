<?php
    // get posts from database  
    $sqldata = mysqli_query($conn, "SELECT * FROM posts");
    $number_rows = mysqli_num_rows($sqldata);
    $count = 0;
    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC))
    {
        // for each post, display title, image and summary
        // complete post is in completepost.php
        if ($count % 3 == 0)
                echo "<div class = 'row'>";
        echo "<div class = 'col-lg-4 col-md-4 col-sm-4 post' id = " . $row['id'] . ">";
        echo "<h4 class = 'text-center'>";
        echo $row['title'];
        echo "</h4><br>";
        echo "<img class = 'recent-image' src =" . $row['image_url'] . "><br>";
        echo "<p class = 'summary'>" . $row['summary'] . "</p>";
        echo "</div>";
        if ($count % 3 == 2)
            echo "</div>";
        ++$count;

    }
?>