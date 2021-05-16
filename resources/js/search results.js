function showProducts (str) {
    var xhttp;
    if (str == "") {
        document.getElementById("textHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getdb.php?q="+str, true);
    xhttp.send();
}
