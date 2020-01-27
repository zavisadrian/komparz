<?php
include "../Libary/Weblibary.php";

$recipient = "upvision@upvision.sk";

$text = "
Email: ".$_REQUEST['mail']."<br>
Kontaktná osoba: ".$_REQUEST['name']."<br>
Telefón: ".$_REQUEST['phone']."<br>
Správa: <br>".$_REQUEST['message']."<br>
";

$subject = "Technická podpora";

if (sendAdminMail("upvision@upvision.sk", $subject, $text)) {
    header("Location: ../thank-you-tech.php");
} else
    print_r(error_get_last());
