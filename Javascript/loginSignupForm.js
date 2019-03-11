document.addEventListener('DOMContentLoaded', redirectFunction);

function redirectFunction() {
    document.getElementById("sign-up").onclick = function() {
        document.location.href = "/Php/registerform.php";
    }
    document.getElementById("log-in").onclick = function() {
        document.location.href = "/Php/loginform.php";
    }
}