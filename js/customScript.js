function realTimeResultCount() {

    var button = document.getElementById("find");
    var typesRaw = document.getElementsByName("type");

    var types = [typesRaw[0].checked, typesRaw[1].checked, typesRaw[2].checked, typesRaw[3].checked, typesRaw[4].checked, typesRaw[5].checked, typesRaw[6].checked];

    $.ajax(
        {
            url: 'PHP/ajax/sqlFilter.php',
            type: "GET",
            contentType: "application/json; charset=utf-8",
            data: ({
                function: "count",
                gender: document.getElementById("gender").value,
                region: document.getElementById("region").value,
                nationality: document.getElementById("nationality").value,
                heightf: document.getElementById("heightf").value,
                heightt: document.getElementById("heightt").value,
                agef: document.getElementById("agef").value,
                aget: document.getElementById("aget").value,
                type: types,
                eyes: document.getElementById("eyes").value,
                hair: document.getElementById("hair").value,
                confSizef: document.getElementById("confSizef").value,
                confSizet: document.getElementById("confSizet").value,
                shoesSizef: document.getElementById("shoesSizef").value,
                shoesSizet: document.getElementById("shoesSizet").value,
                boobsf: document.getElementById("boobsf").value,
                boobst: document.getElementById("boobst").value,
                language: document.getElementById("language").value
            }),
            success: function(data){
                button.innerText = "vyhľadať (" + data + ")";
            },
            error: function(xhr, status, error) {
                button.innerText = "vyhľadať";
            },
            dataType: 'text'
        }
    );
}

function submitFilter(func = "result", index = 1) {

    var button = document.getElementById("find");
    var typesRaw = document.getElementsByName("type");

    var types = [typesRaw[0].checked, typesRaw[1].checked, typesRaw[2].checked, typesRaw[3].checked, typesRaw[4].checked, typesRaw[5].checked, typesRaw[6].checked];

    $.ajax(
        {
            url: 'PHP/ajax/sqlFilter.php',
            type: "GET",
            contentType: "application/json; charset=utf-8",
            data: ({
                start: index,
                function: func,
                gender: document.getElementById("gender").value,
                region: document.getElementById("region").value,
                nationality: document.getElementById("nationality").value,
                heightf: document.getElementById("heightf").value,
                heightt: document.getElementById("heightt").value,
                agef: document.getElementById("agef").value,
                aget: document.getElementById("aget").value,
                type: types,
                eyes: document.getElementById("eyes").value,
                hair: document.getElementById("hair").value,
                confSizef: document.getElementById("confSizef").value,
                confSizet: document.getElementById("confSizet").value,
                shoesSizef: document.getElementById("shoesSizef").value,
                shoesSizet: document.getElementById("shoesSizet").value,
                boobsf: document.getElementById("boobsf").value,
                boobst: document.getElementById("boobst").value,
                language: document.getElementById("language").value
            }),
            success: function(data){

                var resultContainer = document.getElementById("resultContainer");
                var response = JSON.parse(data);
                console.log(response);

                var content = "";

                var header = "" +
                    "<div class=\"row\">" +
                    "<div class=\"col-md-12 pt-md-2 pt-5 pb-3\">" +
                    "<h2><strong>Výsledky vyhľadávania (" + (response[0] - 1) + ")</strong></h2>" +
                    "</div>";

                content += header;

                for (var i = 1; i <= 24; i++) {

                    var elem = i + (24 * (index - 1));

                    try {
                        let is = response[elem].ID;
                    } catch (e) {
                        continue;
                    }

                    if (response[elem].ID.substring(0,2) === "06") {

                        let element = "" +
                            //"<a style='all: unset;' href='profile-agency.php?ID=" + response.ID + "'" +
                            "<div class=\"col-lg-2 col-md-4 col-6 px-md-1\">" +
                            "<div class=\"image\" style=\"background-image: url(" + response[elem].imgPath + ");\">" +
                            "<div class=\"text-onhover favourite\">" +
                            "<a href=\"./profile-agency.php?ID=" + response[elem].ID + "\">" +
                            "<div class=\"content text-center\">" +
                            "<p class=\"uppercase\"><strong>Agentúra</strong></p>" +
                            "<p class=\"small\">" + response[elem].city + "</p>" +
                            "<p></p>" +
                            "<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>" +
                            "</div>" +
                            "</a>" +
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "";
                            //"</a>";

                        content += element;
                    }
                    else {

                        let element = "" +
                            //"<a style='all: unset;' href='profile-acter.php?ID=" + response.ID + "'" +
                            "<div class=\"col-lg-2 col-md-4 col-6 px-md-1\">" +
                            "<div class=\"image\" style=\"background-image: url(" + response[elem].imgPath + ");\">" +
                            "<div class=\"text-onhover\">" +
                            "<a href=\"./profile-acter.php?ID=" + response[elem].ID + "\">" +
                            "<div class=\"content text-center\">" +
                            "<p class=\"uppercase\"><strong>" + response[elem].name + " " + response[elem].surname + "</strong></p>" +
                            "<p class=\"small\">" + response[elem].city + "</p>";

                        if (response[elem].dob !== "none") element += "<p>" + response[elem].dob + " rokov</p>";

                        element +=
                            "<i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i>" +
                            "</div>" +
                            "</a>" +
                            "</div>" +
                            "</div>" +
                            "</div>" +
                            "";
                            //"</a>";

                        content += element;
                    }

                }

                var pages = 0;

                pages = response[0] / 24;
                if (response[0] % 24 > 0)
                    pages++;

                let footer = "<div class=\"col-12 text-center pt-5 pagination-numbers\">";

                for (var j = 0; j < pages - 1; j++) {
                    footer += "<a onclick=\"submitFilter('npage', " + (j + 1) + ")\" class='cs-page-index'' href=\"#\">" + (j + 1) + "</a>";
                }

                footer += "</div></div>";

                content += footer;
                $("#resultContainer").html(content);

            },
            error: function(xhr, status, error) {
                history.go(-1);
            },
            dataType: 'text'
        }
    );
}

function showResultsClass(subj) {
    $('select').prop('selectedIndex', 0);
    if (subj === "komp") {
        document.getElementById("komp").checked = true;
    } else if (subj === "act") {
        document.getElementById("acters").checked = true;
    } else if (subj === "kompact") {
        document.getElementById("komp").checked = true;
        document.getElementById("acters").checked = true;
    } else if (subj === "host") {
        document.getElementById("hostes").checked = true;
    } else if (subj === "model"){
        document.getElementById("model").checked = true;
    } else if (subj === "foto") {
        document.getElementById("profesional").checked = true;
        document.getElementById("fotografs").checked = true;
    } else if (subj === "agentures"){
        document.getElementById("agentures").checked = true;
    }
    document.getElementById("find").click();
}

function passwordCompare() {
    pass1 = document.getElementById("pass1");
    pass2 = document.getElementById("pass2");
    submit = document.getElementById("passSubmit");

    if (pass1.value !== "" && pass2.value !== "") {
        if (pass1.value !== pass2.value) {
            submit.disabled = true;
            submit.value = "Heslá sa nezhodujú";
        } else {
            submit.disabled = false;
            submit.value = "Odoslať";
        }
    }
}

function emailVerify() {
    var rtn = false;
    $.ajax(
        {
            url: 'PHP/ajax/mailValidity.php',
            type: "POST",
            async: false,
            data: ({
                usage: "profiles",
                mail: document.getElementById("mail").value
            }),
            success: function(data){
                console.log(data);
                if (data === "false") {
                    alert("Tento mail u nás v databáze neexistuje");
                    rtn = false;
                }
                else
                    rtn = true
            },
            error: function(xhr, status, error) {
                console.log(error);
                rtn = false;
            },
            dataType: 'text'
        }
    );
    return rtn;
}

$( document ).ready(function() {

    $(".set-casting").click( function () {
        $("#castingid").val($(this).data("id"));
    });

    //Find form and needed inputs in it
    $( "form" ).submit(function( event ) {
        var rtrn = true;
        $("[data-necessary='text']").each(function (index) {
            if ($(this).val() === "") {
                window.location.href = "#form";
                alert("Prosim vyplň celý formulár");
                $(this).css({"border-color" : "unset", "background" : "#ff000014"});
                rtrn = false;
                return false;
            } else $(this).css({"border-color" : "unset", "background" : "unset"});
        });
        $("[data-necessary='date']").each(function (index) {
            if ($(this).val() === "") {
                window.location.href = "#form";
                alert("Prosim vyplň dátum vo formulári");
                $(this).css({"border-color" : "unset", "background" : "#ff000014"});
                rtrn = false;
                return false;
            } else $(this).css({"border-color" : "unset", "background" : "unset"});
        });
        $("[data-necessary='num']").each(function (index) {
            if (!$(this).val().isNaN()) {
                window.location.href = "#form";
                alert("Toto pole musí obsahovať číslo");
                $(this).css({"border-color" : "unset", "background" : "#ff000014"});
                rtrn = false;
                return false;
            } else $(this).css({"border-color" : "unset", "background" : "unset"});
        });
        if ( $("#pass1").length ) {
            console.log($("#pass1").val());
            if ($("#pass1").val() !== $("#pass2").val()) {
                window.location.href = "#form";
                alert("Heslá sa musia zhodovať");
                $("#pass1").css({"border-color" : "unset", "background" : "#ff000014"});
                $("#pass2").css({"border-color" : "unset", "background" : "#ff000014"});
                rtrn = false;
                return false;
            } else { $("#pass1").css({"border-color" : "unset", "background" : "unset"}); $("#pass2").css({"border-color" : "unset", "background" : "unset"}); }
        }

        if ( $("#castmail").length ) {
            var rtn = false;
            $.ajax(
                {
                    url: 'PHP/ajax/mailValidity.php',
                    type: "POST",
                    async: false,
                    data: ({
                        usage: "castings",
                        mail: document.getElementById("castmail").value
                    }),
                    success: function(data){
                        console.log(data);
                        if (data === "true") {
                            alert("Tento mail u nás v databáze už existuje");
                            rtn = false;
                        }
                        else
                            rtn = true
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        rtn = false;
                    },
                    dataType: 'text'
                }
            );
            if (rtrn === true)
                rtrn = rtn;
        }

        if ( $("#marketmail").length ) {
            var rtn = false;
            $.ajax(
                {
                    url: 'PHP/ajax/mailValidity.php',
                    type: "POST",
                    async: false,
                    data: ({
                        usage: "markets",
                        mail: document.getElementById("castmail").value
                    }),
                    success: function(data){
                        console.log(data);
                        if (data === "true") {
                            alert("Tento mail u nás v databáze už existuje");
                            rtn = false;
                        }
                        else
                            rtn = true
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        rtn = false;
                    },
                    dataType: 'text'
                }
            );
            if (rtrn === true)
                rtrn = rtn;
        }

        if ( $("#email").length ) {
            var rtn = false;
            $.ajax(
                {
                    url: 'PHP/ajax/mailValidity.php',
                    type: "POST",
                    async: false,
                    data: ({
                        usage: "profiles",
                        mail: document.getElementById("email").value
                    }),
                    success: function(data){
                        console.log(data);
                        if (data === "true") {
                            alert("Tento mail u nás v databáze už existuje");
                            rtn = false;
                        }
                        else
                            rtn = true
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        rtn = false;
                    },
                    dataType: 'text'
                }
            );
            if (rtrn === true)
                rtrn = rtn;
        }

        if ( $("#acceptation").length ) {
            if (!document.getElementById("acceptation").checked) {
                rtrn = false;
                alert("Prosím zaklikni že súhlasíš so spracovaním a zverejnením osobných údajov.")
            }
        }

        if (rtrn) $(".wait-screen").css({"display" : "flex"});
        return rtrn;
    });

});

grecaptcha.ready(function() {
    grecaptcha.execute('6Ldy8M0UAAAAANmqiH9a0LjbilEoHWyrcxqDk8c7', {action: 'homepage'});
});