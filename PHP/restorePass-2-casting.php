<?php
include "../Libary/Weblibary.php";

$key = $_REQUEST['session'];
$password = $_REQUEST['password'];

$conn = dbConnect();
$sql = "SELECT * FROM `passwordSessionCasting` WHERE `key` = '".$key."' AND `timestamp` = CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $mail = $row['user'];
    }
}

$dbh = dbConnectSafely();

$sql = "UPDATE `castingLogins` SET `password` = :password WHERE `email` = :mail";
$sql = $dbh->prepare($sql);
$sql->execute(array(":mail" => $mail, ":password" => hash("sha256", $password)));

/*
$sql = "UPDATE `pr_agentures` SET `password` = :password WHERE `mail` = :mail";
$sql = $dbh->prepare($sql);
$sql->execute(array(":mail" => $mail, ":password" => hash("sha256", $password)));*/

$sql = "DELETE FROM `passwordSessionCasting` WHERE `user` = '".$mail."'";
$conn->query($sql);

header("Location: ../thank-you-restore-done.php");

exit();
