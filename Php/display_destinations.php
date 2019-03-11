<?php
    // get all destinations from db
    $query = "SELECT * FROM destination";
    $sqldata = mysqli_query($conn, $query);
    $count = 0;
    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) 
    {
        // display 3 destinations/row
        // for each destination, display image and name
        if ($count % 3 == 0)
            echo "<div class = 'row'>";
        echo "<div class = 'col-lg-4 col-md-4 col-sm-4 col-height'>";
        echo "<h2 class = 'continent-name'>" . $row['title'] . "</h2><br>";
        echo "<img class = 'continent-img destination-img' id = '" . $row['id'] . "' src = " . $row['image_url'] . "></div>";
        if ($count % 3 == 2)
            echo "</div>";
        $count++;
    }
?>