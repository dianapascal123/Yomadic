<?php 
    // for each destination, display when to visit
    $query = "SELECT period FROM continent WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $period = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<p>" . $period ['period'] . "</p>";
?>