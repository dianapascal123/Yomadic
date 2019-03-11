<?php
    // display menu for each tip as a list
    $query = "SELECT title FROM tipcontent WHERE id = $id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo "<li>" . $row['title'] . "</li>";
    }
?>