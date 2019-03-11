<div class = "comments">
    <hr>
    <h5 id = "comments-title">Comments</h5>
    <hr>
    <?php include ('postedcomment.php');
    if ($_SESSION['user'])
        include ('commentform.php');
    else
        echo "<p id = 'comment-info'>You must be logged in to post a comment</p>";
    ?>
</div>
     