<?php
include "../Libary/Weblibary.php";
$conn = dbConnect();
$ID = $_REQUEST['marketid'];

$sql = "
SELECT `mail` FROM `market` WHERE `ID` = '" . $ID . "'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recipient = $row['mail'];
    }
}

$recipient2 = "upvision@upvision.sk";

$text = "niekto sa vám prihlásil na ponuku.";
$text2 = "skúška mailu na prihlásenie do ponuky.";

$subject = "Prihláška test!!!";
$subject2 = "Test na prihlášku do trhoviska!";


if (sendAdminMail($recipient, $subject, $text)) {
    if (sendAdminMail($recipient2, $subject2, $text2)) {
        header("Location: ../thank-you-market-join.php");
    }
} else
    print_r(error_get_last());