<?php
    include ('db_connection.php');
    $query = "SELECT * FROM comments";
    $comm = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($comm))
    {
        echo "<h6 class = 'small'>" . $row['name'] . ", " . $row['submittime'] . "</h6>";
        echo "<p>" . $row['subject'] . "</p>";
        echo "<hr class='post_hr'>";
    }
?>