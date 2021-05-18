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

function langTableFilterFunction() {
    var container, row;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    for (i=0; i < row.length; i++) {
        row[i].classList.remove("hide");
    }
}

function PHPTableFilterFunction() {
    var container, row, showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("PHP");
        for (i=0; i < row.length; i++) {
            row[i].classList.add("hide");
        }
        for (i=1; i <showrow.length; i++) {
            showrow[i].classList.remove("hide");
        }
}

function CSSTableFilterFunction() {
    var container, row, showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("CSS");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function JavaScriptTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("JavaScript");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function HTMLTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("HTML");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
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

function tagTableFilterFunction() {
    var container, row;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    for (i=0; i < row.length; i++) {
        row[i].classList.remove("hide");
    }
}

function pdoTableFilterFunction() {
    var container, row, showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("pdo");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function nav_barTableFilterFunction() {
    var container, row, showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("nav_bar");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function hoverTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("hover");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function focus_withinTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("focus_within");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
function searchTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("search");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function if_stateTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("if_state");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
function sess_varTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("sess_var");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
function formsTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("forms");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
function search_filtTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("search_filt");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
function new_tabTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("new_tab");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function arraysTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("arrays");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function dropdownTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("dropdown");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}

function imageTableFilterFunction() {
    var container, row , showrow;
    container = document.getElementById("link_table");
    row = container.getElementsByClassName("table filterTr");
    showrow = container.getElementsByClassName("image");
    for (i=0; i < row.length; i++) {
        row[i].classList.add("hide");
    }
    for (i=1; i <showrow.length; i++) {
        showrow[i].classList.remove("hide");
    }
}
