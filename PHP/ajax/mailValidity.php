<?php
include  "../../Libary/Weblibary.php";

if ($_REQUEST['usage'] == "profiles") {
    $mail = $_REQUEST['mail'];

    $conn = dbConnect();
    $sql = "
SELECT `ID` FROM `pr_actor` WHERE `mail` = '".$mail."' UNION
SELECT `ID` FROM `pr_agentures` WHERE `email` = '".$mail."' UNION
SELECT `ID` FROM `pr_creative` WHERE `mail` = '".$mail."' UNION
SELECT `ID` FROM `pr_foto` WHERE `mail` = '".$mail."' UNION
SELECT `ID` FROM `pr_hostess` WHERE `mail` = '".$mail."' UNION
SELECT `ID` FROM `pr_model` WHERE `mail` = '".$mail."'
";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $recipient = $row['ID'];
            echo "true";
        }
    } else echo "false";
}

else if ($_REQUEST['usage'] == "castings") {
    $mail = $_REQUEST['mail'];

    $conn = dbConnect();
    $sql = "SELECT `email` FROM `castingLogins` WHERE `email` = '".$mail."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $recipient = $row['email'];
            echo "true";
        }
    } else echo $sql;
}

exit();
