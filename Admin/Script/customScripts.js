function filterTableKeyword(table, keyword) {

    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        if (!rows[i].includes(keyword)) {
            rows[i].style.opacity = "0";
        } else {
            rows[i].style.opacity = "1";
        }
    }
}
