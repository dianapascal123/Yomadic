<?php
    // display introduction and image for tip that was clicked
    $query = "SELECT * FROM tips WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<img src = '" . $row['image_url'] . "' class = 'tips-image' alt = 'tips-image'>";
    echo "<p>" . $row['intro'] . "</p>";
?>  

