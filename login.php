<?php

require "../Libary/Weblibary.php";

$dbh = dbConnectSafely();

echo hash("sha256", $_REQUEST["password"]);

$sql = "SELECT `ID` FROM `pr_actor` WHERE `mail` = :mail AND `password` = :password";
$sql = $dbh->prepare($sql);
$sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_creative` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_foto` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_hostess` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));
}

if ($sql->rowCount() == 0) {
    $sql = "SELECT `ID` FROM `pr_model` WHERE `mail` = :mail AND `password` = :password";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));
}

if ($sql->rowCount() == 0) {
    echo "wrong profile";
}

$row = $sql->fetch();

session_start();
$_SESSION["userID"] = $row["ID"];
//echo "<script>history.go(-1);</script>";
