/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function resultsFunction() {
    document.getElementById("search_container").classList.remove("hide");
}

function hideResultsFunction() {
    document.getElementById("search_container").classList.add("hide");
}

function resultFilterFunction() {
    var input, filter, div, ul, li, a, i;
    input = document.getElementById("nav_search");
    filter = input.value.toUpperCase();
    div = document.getElementById("search_container");
    li = div.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
