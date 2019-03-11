<?php
    include ('db_connection.php');

    $sqlget = "SELECT * FROM posts";
    $sqldata = mysqli_query($conn, $sqlget) or die('error getting data');
    // if ($conn)
    //     echo 'connected';
    // else 
    //     echo 'neconnected';
    // var_dump($sqldata);
    // while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
    //     echo "<p>";
    //     echo $row['views'];
    //     echo "</p><br>";
    // }

?>