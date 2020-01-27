<?php
include "../../Libary/Weblibary.php";
$url = $_REQUEST['url'];

if (isset($_FILES['addbcg'])) {
    $target_dir = "../../images/";
    $parts = explode('.', $_FILES['addbcg']['name']);
    $newname = "add".".jpg";
    $target_file = $target_dir . $newname;
    if (move_uploaded_file($_FILES["addbcg"]["tmp_name"], $target_file)) {
        echo "successfuly uploaded";
        header("Location: ../settings.php");
    } else echo "Sorry, there was an error uploading your file.";
}

if (isset($_REQUEST['url'])) {
    $conn = dbConnect();
    $sql = "UPDATE `advertisement` SET `ID` = '0000', `link` = '".$url."' WHERE 1";
    $conn->query($sql);
}