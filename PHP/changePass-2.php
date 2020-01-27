<?php
include "../Libary/Weblibary.php";

$key = $_REQUEST['session'];
$conn = dbConnect();
$sql = "SELECT * FROM `passwordSession` WHERE `key` = '".$key."' AND `timestamp` = CURDATE()";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ID = $row['user'];
        $newPass = $row['newPassword'];
    }
} else header("Location: ../404.php");

switch (substr($ID, 0, 2)){
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
        header("Location: ../404.php");
        die();
}

    $conn = dbConnect();
    $sql = "UPDATE `$prefix` SET `password` = '".$newPass."' WHERE `ID` = '".$ID."'";
    if ($conn->query($sql)) {
        $sql = "DELETE FROM `passwordSession` WHERE `user` = '".$ID."'";
        $conn->query($sql);
        header("location: ../thank-you-password-changed.php?returnID=".$_REQUEST['returnID']);
    }

exit();