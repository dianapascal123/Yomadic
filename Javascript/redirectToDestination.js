document.addEventListener('DOMContentLoaded', destinationRedirect);
function destinationRedirect ()
{
    var destinations = document.getElementsByClassName("destination-img");
        for (let i = 0; i < destinations.length; i++)
            destinations[i].onclick = function() {
                var dest_id = destinations[i].id;
                var page = "/Php/destination.php?id=" + dest_id;
                document.location.href = page;
            }
}