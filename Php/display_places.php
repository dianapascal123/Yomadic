<?php 
    // display places to visit
    $query = "SELECT * FROM places WHERE continent_id = $id";
    $result = mysqli_query($conn, $query);
    echo "<ul>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        echo "<li>";
        echo "<h5>" . $row['title'] . "</h5>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</li>";
    }
    echo "</ul>"
?>
