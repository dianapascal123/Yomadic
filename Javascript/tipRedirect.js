document.addEventListener('DOMContentLoaded', loadFunction);
function loadFunction()
{
    var liTags = document.getElementsByClassName("tips-menu-element");
    for (let i = 0; i <liTags.length; ++i)
        liTags[i].onclick = function()
        {
            var tipId = liTags[i].id;
            var page = "/Php/tip.php?id=" + tipId;
            document.location.href = page;
        }
}