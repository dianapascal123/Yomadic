<?php
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $body = $_POST['body'];
    $image_url = $_POST['image_url'];
    $query = "INSERT INTO posts (title, summary, body, image_url, created_at)
              VALUES ('$title', '$summary', '$body', '$image_url', now())";
    mysqli_query($conn, $query);
?>