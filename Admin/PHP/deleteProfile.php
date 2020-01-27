<?php
session_start();
require "../../Libary/Weblibary.php";

$admin = false;
if (isset($_SESSION['Admin']) & $_REQUEST['ID'] !== "") {
    $_SESSION['userID'] = $_REQUEST['ID'];
    $admin = true;
}

if ($_SESSION["userID"] !== "") {
    $prefix = "";
    switch (substr($_SESSION["userID"], 0, 2)){
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

    $dbh = dbConnectSafely();
    $sql = "DELETE FROM `".$prefix."` WHERE `ID` = '".$_SESSION["userID"]."'";

    echo $sql;

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $_SESSION["userID"]
    ));

    echo $dbh->errorCode();

    if (!$admin) {
        header("Location: ../../PHP/logout.php?delete=true");
    } else
        header("Location: ../actors.php?view=profiles");
}