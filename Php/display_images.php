<?php 
    // display image gallery for clicked destination
    echo "<div class = 'image-gallery'>";
    $query = "SELECT * FROM images WHERE continent_id = $id";
    $result = mysqli_query ($conn, $query);
    $count = 0;
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
    {
        // display 3 images/row
        if ($count % 3 == 0 )
            echo "<div class = 'row top-buffer'>";
        echo "<div class = 'col-lg-4 col-md-4 col-sm-4 left-buffer'>";
        echo "<img src = '" . $row['image_url'] . "' alt = 'Asia' class = 'asia-image'></div>";
        if ($count % 3 == 2)
            echo "</div>";
        $count++;
    }
    echo "</div>";
?>