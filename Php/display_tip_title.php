<?php
    // display title for tip that was clicked
    $query = "SELECT title FROM tipsmenu WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);
    echo "<h1>Travel Tips: " . $result['title'] . "</h1>";
?>