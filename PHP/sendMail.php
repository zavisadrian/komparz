<?php
include "../Libary/Weblibary.php";

$text = "
Meno: ".$_REQUEST['name']."<br>
E-mail: ".$_REQUEST['mail']."<br>
Tel. č:".$_REQUEST['phone']."<br>
Adresa: ".$_REQUEST['address']."<br>
Dátum narodenia: ".$_REQUEST['birth']."<br><br>
Info: ".$_REQUEST['info']."<br><br>
";

$subject = "Nová prihláška na casting";

$recipient = $_REQUEST['recipient'];


if (sendAdminMail($recipient, $subject, $text)) {
    header("Location: ../thank-you-market-join.php");
} else
    print_r(error_get_last());
