<?php

require "../Libary/Weblibary.php";

$dbh = dbConnectSafely();

echo hash("sha256", $_REQUEST["password"]);

$type = "p";

$sql = "SELECT `ID` FROM `pr_actor` WHERE `mail` = :mail AND `password` = :password";
$sql = $dbh->prepare($sql);
$sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

if (!$sql->rowCount() == 0) {
    $conn = dbConnect();
    $sq = "UPDATE `pr_actor` SET `lastLog` = '".date("d.m.Y")."'";
    $conn->query($sq);
    //Sem pojde posledné prihlasenie
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_creative` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

    if (!$sql->rowCount() == 0) {
        $conn = dbConnect();
        $sq = "UPDATE `pr_creative` SET `lastLog` = '".date("d.m.Y")."'";
        $conn->query($sq);
        //Sem pojde posledné prihlasenie
    }
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_foto` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

    if (!$sql->rowCount() == 0) {
    $conn = dbConnect();
    $sq = "UPDATE `pr_foto` SET `lastLog` = '".date("d.m.Y")."'";
    $conn->query($sq);
    //Sem pojde posledné prihlasenie
}
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_hostess` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

    if (!$sql->rowCount() == 0) {
    $conn = dbConnect();
    $sq = "UPDATE `pr_hostess` SET `lastLog` = '".date("d.m.Y")."'";
    $conn->query($sq);
    //Sem pojde posledné prihlasenie
}
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_model` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

    if (!$sql->rowCount() == 0) {
    $conn = dbConnect();
    $sq = "UPDATE `pr_model` SET `lastLog` = '".date("d.m.Y")."'";
    $conn->query($sq);
    //Sem pojde posledné prihlasenie
}
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_agentures` WHERE `email` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

    if (!$sql->rowCount() == 0) {
    $conn = dbConnect();
    $sq = "UPDATE `pr_agentures` SET `lastLog` = '".date("d.m.Y")."'";
    $conn->query($sq);

    $_SESSION['castingMail'] = $_REQUEST['mail'];
    $_SESSION['marketMail'] = $_REQUEST['mail'];
}
    $type = "a";
}

if ($sql->rowCount() == 0) {
    echo "wrong profile";
}

$row = $sql->fetch();

if ($row["ID"] == "") {
    header("Location: ../wrongprofile.php");
} else {
    session_start();
    $_SESSION["userID"] = $row["ID"];
    if ($type == "p")
        header("Location: ../profile-acter.php?ID=".$row['ID']);
    else
        header("Location: ../profile-agency.php?ID=".$row['ID']);
}
