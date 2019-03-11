<?php
    // display introduction for every destination
    $query  = "SELECT introduction FROM continent WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $intro = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo "<p>" . $intro['introduction']. "</p>";
?>