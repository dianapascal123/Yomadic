<?php 
    //display title for clicked destination
    $query = "SELECT title FROM destination WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($result);
    echo "<h1 class = 'text-center title'>" . $result['title'] . " Travel Guide</h1>" ;
?>