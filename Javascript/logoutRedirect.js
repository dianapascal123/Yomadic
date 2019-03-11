document.addEventListener('DOMContentLoaded', redirectFunction); 

function redirectFunction() {
    document.getElementById("log-out").onclick = function() {
        document.location.href = "/Php/logout.php";
    } 
}