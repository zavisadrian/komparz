<?php
require "../Libary/Weblibary.php";
session_start();

$dbh = dbConnectSafely();

$sql = "SELECT `email` FROM `marketLogins` WHERE `email` = :mail AND `password` = :password";
$sql = $dbh->prepare($sql);
$sql->execute(array(":mail" => $_REQUEST["mail"], ":password" => hash("sha256", $_REQUEST["password"])));

if (!$sql->rowCount() == 0) {
    $_SESSION['marketMail'] = $_REQUEST['mail'];
    header("Location: ../marketplace.php");
} else {
    header("Location: ../wrongprofile.php");
}
