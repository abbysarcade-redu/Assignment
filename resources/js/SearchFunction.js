function langFunction() {
    document.getElementById("langDropdown").classList.toggle("show");
}

function langFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("langInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("langDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

function tagFunction() {
    document.getElementById("tagDropdown").classList.toggle("show");
}

function tagFilterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("tagInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("tagDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
