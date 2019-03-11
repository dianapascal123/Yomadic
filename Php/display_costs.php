<?php 
    $query = "SELECT cost FROM continent WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $cost = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<p>" . $cost['cost'] . "</p>";
?>