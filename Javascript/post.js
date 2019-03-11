document.addEventListener('DOMContentLoaded', loadFunction);
function loadFunction ()
{
    var posts = document.getElementsByClassName("post");
        for (let i = 0; i < posts.length; i++)
            posts[i].onclick = function() {
                var post_id = posts[i].id;
                var page = "/Php/complete_post.php?id=" + post_id;
                document.location.href = page;
            }
}