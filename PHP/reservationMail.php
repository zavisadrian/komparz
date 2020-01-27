<?php
include "../Libary/Weblibary.php";
$conn = dbConnect();
$ID = $_REQUEST['recipient'];

$sql = "
SELECT `mail` FROM `pr_actor` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_creative` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_foto` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_hostess` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_model` WHERE `ID` = '".$ID."'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $recipient = $row['mail'];
    }
}
$recipient2 = "upvision@upvision.sk";

$text = "niekto má o vás záujem.";
$text2 = "skúška mailu na registráciu.";

$subject = "Reezrvácia test!!!";
$subject2 = "Test na rezerváciu";


if (sendAdminMail($recipient, $subject, $text)) {
    if (sendAdminMail($recipient2, $subject2, $text2)) {
        header("Location: ../thank-you-reservation.php");
    }
} else
    print_r(error_get_last());