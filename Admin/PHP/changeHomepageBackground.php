<?php
$index = $_REQUEST['index'];

//$tmpFilePath = $_FILES["bcg1"];
$target_dir = "../../images/";
$parts = explode('.', $_FILES['bcg1']['name']);
$newname = "homepage".$index.".".$parts[1];
$target_file = $target_dir . $newname;
if (move_uploaded_file($_FILES["bcg1"]["tmp_name"], $target_file)) {
    echo "successfuly uploaded";
    header("Location: ../settings.php");
} else echo "Sorry, there was an error uploading your file.";

/*
    //Edit image to lower size!!
    $fn = $newFilePath;
    list($width, $height) = getimagesize($fn);
    $ratio = $width / $height; // width/height
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor($width, $height);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $width, $height);
    $resizedPath = $newFilePath;
    imagejpeg($dst, $resizedPath);
    imagedestroy($src);
    imagedestroy($dst);*/