window.onload = function() {
   document.getElementById("submit").disabled=false;
   document.getElementById("form_post").style.display = "none";
   document.getElementById("add-post").onclick = function() {
        document.getElementById("add-post").style.display = "none";
        document.getElementById("form_post").style.display = "initial";
   }
}