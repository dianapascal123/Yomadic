<?php
    // get clicked post from database
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            // display title, image and complete post
            echo "<h1 class = 'text-center'>" . $row['title'] . "</h1>";
            echo "<img src = '" . $row['image_url'] . "'>";
            echo "<p>". htmlspecialchars_decode($row['body']) . "</p>";
        }
?>