<?php
    // display tips categories, 3/row
    $query = "SELECT * FROM tipsmenu";
    $result = mysqli_query($conn, $query);
    $count = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
    {
        if ($count % 3 == 0)
            echo "<div class = 'row'>";
        echo "<li class = 'col-lg-4 tips-menu-element' id = '". $row['id' ] ."'>" . $row['title'] . "</li></col-lg-4>";
        if ($count % 3 == 2)
            echo "</div>";
        $count++;
    }
?>