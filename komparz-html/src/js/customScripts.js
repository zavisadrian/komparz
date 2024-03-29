function filterTableKeyword(table, keyword) {

    if (keyword[keyword.length - 1] === " ") keyword = keyword.substring(0, keyword.length - 1);

    var words = keyword.split(" ");

    var rows = table.getElementsByTagName("tr");

    //If there is no keyword, show all results.
    if (keyword === "") {
        for (var x = 1; x < rows.length; x++) {
            let row = rows[x];
            row.style.display = "table-row";
            row.style.opacity = "1";
        }
    }

     // Check all keywords one by one, then hide which can not be result.
    for (var j = 0; j < words.length; j++) {
        for (var i = 1; i < rows.length; i++) {
            let actual = plainText(rows[i].innerHTML);
            let row = rows[i];
            keyword = plainText(words[j]);
            if (!actual.includes(keyword)) {
                row.style.opacity = "0";
                row.style.display = "none";
                rows[i] = "";
            } else if (j === 0) {
                row.style.display = "table-row";
                row.style.opacity = "1";
            }
        }
    }
}

function plainText(string) {
    string = string.toString().replace("á", "a");
    string = string.toString().replace("ľ", "l");
    string = string.toString().replace("š", "s");
    string = string.toString().replace("č", "c");
    string = string.toString().replace("ť", "t");
    string = string.toString().replace("ž", "z");
    string = string.toString().replace("ý", "y");
    string = string.toString().replace("í", "i");
    string = string.toString().replace("é", "e");
    string = string.toString().replace("ô", "o");
    string = string.toString().replace("ú", "u");
    string = string.toString().replace("ň", "n");
    string = string.toString().replace("ä", "a");
    string = string.toString().toLowerCase();

    return string.toString();
}

function findActive(name) {
    document.getElementById(name).classList.add("active");
}

function multipleFileOnChange(sender) {
    var frame = sender.parentElement;
    var closebutton = frame.getElementsByTagName("div")[0];

    var URL = window.URL || window.webkitURL;

    if (sender.files) {
        for (i = 0; i < sender.files.length; i++) {
            var file = sender.files[i];
            var src = URL.createObjectURL(file);

            frame.insertAdjacentHTML(
                "beforeend","<img alt='' src=\"" + src + "\" class=\"cs-input-type-mf-img\">"
            );
        }

        closebutton.style.display = "block";
        sender.style.display = "none";
    }
}

function nullFileInput(sender) {
    var frame = sender.parentElement;
    var input = frame.getElementsByTagName("input")[0];
    var imgs = frame.getElementsByTagName("img");

    input.value = "";
    input.style.display = "block";

    sender.style.display = "none";

    while (frame.getElementsByTagName("img").length > 0) {
        imgs = frame.getElementsByTagName("img");

        for (var i = 0; i < imgs.length; i++) {
            imgs[i].parentNode.removeChild(imgs[i]);
        }
    }
}

function checkData(sender) {
    //check if all data are valid.

    var loading = document.getElementById("loading");

    sender.style.opacity = "0.8";
    sender.style.pointerEvents = "none";
    loading.style.display = "block";

    window.scroll(0, 50000);
}