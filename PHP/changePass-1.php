<?php
include "../Libary/Weblibary.php";
session_start();

echo $_SESSION['userID'];
switch (substr($_SESSION['userID'], 0, 2)){
    case "01":
        $prefix = "pr_actor";
        $kind = "Herci a komparzisti";
        $kind1 = " hercovi / komparzistovi";
        break;
    case "02":
        $prefix = "pr_creative";
        $kind = "Kreatívni profesionáli";
        $kind1 = " kreatívnom profesionálovi";
        break;
    case "03":
        $prefix = "pr_hostess";
        $kind = "Hostesky / promotéri";
        $kind1 = " hosteske / promotérovi";
        break;
    case "04":
        $prefix = "pr_model";
        $kind = "Modelka / model";
        $kind1 = " modelovi / modelke";
        break;
    case "05":
        $prefix = "pr_foto";
        $kind = "Fotograf";
        $kind1 = " fotografovi";
        break;
    case "06":
        $prefix = "pr_agentures";
        $kind = "Agentúra";
        $kind1 = " agentúre";
        break;
    default:
        echo "Invalid type of user. You were kicked";
        die();
}

if (isset($_SESSION['userID'])){
    $conn = dbConnect();
    $sql = "SELECT * FROM `$prefix` WHERE `ID` = '".$_SESSION['userID']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $mail = $row['mail'];
            if ($mail == "") $mail = $row['email'];
        }
    }

    $sessionID = rndString(15);

    $sql = "INSERT INTO `passwordSession`(`key`, `user`, `newPassword`, `timestamp`) VALUES ('".$sessionID."', '".$_SESSION['userID']."', '".hash("sha256", $_REQUEST["password"])."','".date("Y-m-d")."')";
    $conn->query($sql);

    $message = "<body>
    Toto je link na obnovu hesla. Prosím <a href='http://www.komparztv.upvision.sk/PHP/changePass-2.php?session=".$sessionID."&returnID=".$_SESSION['userID']."'>klikni tu</a> aby sa zmena tvojho hesla vykonala. <br>Link je platný 30 minút a musíš ho otvoriť zo zariadenia, z ktoreho si žiadal o zmenu.
    </body>";

    sendMail($mail, "Link na potvrdenie zmeny hesla", $message);
    header("Location: ../thank-you-pass-check-mail.php");
} else header("Location: ../404.php");

exit();