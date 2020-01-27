<?php
require ("../Libary/Weblibary.php");
session_start();

$mail = $_REQUEST['mail'];
$pass =  $_REQUEST['pass'];

$dbh = dbConnectSafely();
$sql = "INSERT INTO `castingLogins` (`email`, `password`) VALUES (:name, :password)";

$sql = $dbh->prepare($sql);

$sql->execute(array(
    ":name" => $mail,
    ":password" => hash("sha256", $pass)
));

echo $dbh->errorCode();

$_SESSION['casting_email'] = $mail;
$_SESSION['casting_pass'] = $pass;

header("Location: ../thank-you-casting-signup.php");