<?php 
    include ('db_connection.php');
    if(isset($_POST)) {
        $username = $_POST['username'];
        $subject = $_POST['subject'];
        $query = "INSERT INTO comments (name, subject, submittime)
                 VALUES ('$username', '$subject', now())";
        $sent = mysqli_query($conn, $query);
        if ($sent)
            $msg = "Your comment submitted successfully";
        else 
            $msg = "Failed to submit your comment";
    }