<?php
require "../Libary/Weblibary.php";

$key = rndString(15);
$mail = $_REQUEST['mail'];

$conn = dbConnect();
$sql = "INSERT INTO `passwordSessionMarket`(`key`, `user`, `newPassword`, `timestamp`) VALUES ('".$key."', '".$mail."', '', '".date("Y-m-d").".')";
$conn->query($sql);

$message = "Pre obnovenu hesla <a href='http://www.komparztv.upvision.sk/forgotten-password-2-market.php?session=".$key."'>klikni sem.</a>";

if (sendMail($mail, "Obnova hesla", $message)) {
    header("Location: ../thank-you-check-your-restore.php");
} else header("Location: 404.php");

exit();
