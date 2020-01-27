<?php
include "../Libary/Weblibary.php";
session_start();

switch (substr($_REQUEST["ID"], 0, 2)){
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

switch (substr($_SESSION["userID"], 0, 2)){
    case "01":
        $prefix2 = "pr_actor";
        $kind = "Herci a komparzisti";
        $kind1 = " hercovi / komparzistovi";
        break;
    case "02":
        $prefix2 = "pr_creative";
        $kind = "Kreatívni profesionáli";
        $kind1 = " kreatívnom profesionálovi";
        break;
    case "03":
        $prefix2 = "pr_hostess";
        $kind = "Hostesky / promotéri";
        $kind1 = " hosteske / promotérovi";
        break;
    case "04":
        $prefix2 = "pr_model";
        $kind = "Modelka / model";
        $kind1 = " modelovi / modelke";
        break;
    case "05":
        $prefix2 = "pr_foto";
        $kind = "Fotograf";
        $kind1 = " fotografovi";
        break;
    case "06":
        $prefix2 = "pr_agentures";
        $kind = "Agentúra";
        $kind1 = " agentúre";
        break;
    default:
        echo "Invalid type of user. You were kicked";
        die();
}

if (isset($_SESSION['userID'])) {

    $conn = dbConnect();
    $sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$_REQUEST['ID']."'";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        while($rw = $result->fetch_assoc()) {
            $string = $rw['followers'];
        }
        $string = str_replace($_SESSION['userID'], "", $string);
        $sql = "UPDATE `".$prefix."` SET `followers` = '".$string."' WHERE `ID` = '".$_REQUEST['ID']."'";
        $conn->query($sql);
    }

    $conn = dbConnect();
    $sql = "SELECT * FROM `".$prefix2."` WHERE `ID` = '".$_SESSION["userID"]."'";
    $result = $conn->query($sql);
    if ($result->num_rows) {
        while($rw = $result->fetch_assoc()) {
            $string = $rw['following'];
        }
        $string = str_replace($_REQUEST['ID'], "", $string);
        $sql = "UPDATE `".$prefix2."` SET `following` = '".$string."' WHERE `ID` = '".$_SESSION["userID"]."'";
        $conn->query($sql);
    }

    header("Location: ../profile-acter.php?ID=".$_REQUEST['ID']);
}