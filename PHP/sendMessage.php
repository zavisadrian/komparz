<?php
include "../Libary/Weblibary.php";

$ID = $_REQUEST['ID'];

$message = "<body>
Meno: ".$_REQUEST['person']."<br>
Správa: ".$_REQUEST['message']."
<br><br><br><b>kontakt na odosielateľa: ".$_REQUEST['contact']."
</body>";

$subject = "Komparztv správa | ".$_REQUEST['subject'];

$conn = dbConnect();
$sql = "
SELECT `mail` FROM `pr_actor` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_creative` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_foto` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_hostess` WHERE `ID` = '".$ID."' UNION
SELECT `mail` FROM `pr_model` WHERE `ID` = '".$ID."'
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $recipient = $row['mail'];
        echo "ID: ".$recipient;
    }
} else echo "ID: XXXXXXXXX";

if (sendAdminMail($recipient, $subject, $message)) {
    header("Location: ../thank-you-message.php");
} else
    print_r(error_get_last());

exit();