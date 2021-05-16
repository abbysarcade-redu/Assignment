function search_function() {
    //declare variables
    var input, filter, container, li, p, i, txtValue;
    input = document.getElementById('search_input');
    filter = input.value.toUpperCase();
    container = document.getElementById("search_container");
    li = ul.getElementsByTagName('li');

    //loop through list items then hide those not matching
    for (i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p") [0];
        txtValue = p.textContent || p.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
