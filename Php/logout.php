<?php 
    // destroy session and redirect to previous page
    session_start();
    session_destroy();
    header('Location:' . $_SESSION['last_visited']);
    exit;
?>
