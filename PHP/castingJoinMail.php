<?php
include "../Libary/Weblibary.php";
$conn = dbConnect();
$ID = $_REQUEST['castingid'];

$sql = "
SELECT `owneremail` FROM `casting` WHERE `ID` = '" . $ID . "'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recipient = $row['owneremail'];
    }
}

$recipient2 = "upvision@upvision.sk";

$text = "niekto sa vám prihlásil na casting.";
$text2 = "skúška mailu na prihlásenie do castingu.";

$subject = "Prihláška test!!!";
$subject2 = "Test na prihlášku do castingu!";


if (sendAdminMail($recipient, $subject, $text)) {
    if (sendAdminMail($recipient2, $subject2, $text2)) {
        header("Location: ../thank-you-casting-join.php");
    }
} else
    print_r(error_get_last());