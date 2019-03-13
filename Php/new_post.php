<?php
    if (isset($_POST['submit'])) {
        $errors = array();
        $title = $_POST['title'];
        $summary = $_POST['summary'];
        $body = $_POST['body'];
        $image_url = $_POST['image_url'];
        if (empty($title))
            array_push($errors, "You must enter a title.");
        if (empty($summary))
            array_push($errors, "You must enter a summary");
        if (empty($body))
            array_push($errors, "You must enter a body");
        if (empty($image_url))
            array_push($errors, "You must enter an image URL");
        if (count($errors) == 0)
        {
            $query = "INSERT INTO posts (title, summary, body, image_url, created_at)
                    VALUES ('$title', '$summary', '$body', '$image_url', now())";
            mysqli_query($conn, $query);
        }
    }
?>