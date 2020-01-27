<?php
require("../Libary/Weblibary.php");
session_start();

$ID = $_REQUEST['ID'];

$conn = dbConnect();
$sql = "SELECT * FROM `casting` WHERE `ID` = '".$ID."' ORDER BY `auto` DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mail = $row['owneremail'];
    }
}

if ($_SESSION['marketMail'] != $mail) {
    header("Location: 404.php");
    die();
}

$dbh = dbConnectSafely();
$sql = "DELETE FROM `casting` WHERE `ID` = '".$ID."'";

$sql = $dbh->prepare($sql);

$sql->execute(array(
    ":ID" => $_POST['ID']
));

header("Location: ../casting-own.php");