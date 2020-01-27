<?php
include "../Libary/Weblibary.php";

$recipient = "upvision@upvision.sk";

$text = "
Spoločnosť: ".$_REQUEST['company']."<br>
Email: ".$_REQUEST['mail']."<br>
Kontaktná osoba: ".$_REQUEST['person']."<br>
Telefón: ".$_REQUEST['number']."<br>
Predmet: ".$_REQUEST['subject']."<br><br>
Správa: <br>".$_REQUEST['message']."<br>
";

$subject = "Test na spoluprácu";

if (sendAdminMail("upvision@upvision.sk", $subject, $text)) {
    header("Location: ../thank-you-cooperation.php");
} else
    print_r(error_get_last());
