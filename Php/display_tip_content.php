<?php
    // display content for each tip
    $query = "SELECT * FROM tipcontent WHERE id = $id";
    $result = mysqli_query($conn, $query);
    echo "<hr>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
       
        echo "<h4>" . $row['title'] . "</h4>";
        echo "<p>" . htmlspecialchars_decode($row['body']) . "</p>";
        echo "<hr>";
    }
?>