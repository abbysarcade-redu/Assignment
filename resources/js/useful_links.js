/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function langFunction() {
    document.getElementById("langDropdown").classList.toggle("show");
}

function langFilterFunction() {
    var input, filter, div, ul, li, tr, i;
    input = document.getElementById("langInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("langDropdown");
    tr = div.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        txtValue = tr[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

function PHPTableFilterFunction() {
    var input, filter, div, ul, li, a, i;
    input = PHP;
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

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function tagFunction() {
    document.getElementById("tagDropdown").classList.toggle("show");
}

function tagFilterFunction() {
    var input, filter, div, ul, li, a, i;
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

