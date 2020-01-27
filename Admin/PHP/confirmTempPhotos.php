<?php
require ("../../Libary/Weblibary.php");


$id = $_REQUEST['id'];
$acc = $_REQUEST['accept'];
$photo = $_REQUEST['photo'];
$path = "../../Profiles/".$id."/";
$files = scandir($path."temp/");

if ($acc == "true") {
    if ($photo == "-1") {
        foreach ($files as $file) {
            if ($file == "." || $file == "..")
                continue;

            copyAndDeleteImage($file, $path);
        }
    }
    else {
        copyAndDeleteImage($photo, $path);
    }
}
elseif ($acc == "false") {
    if ($photo == "-1") {
        foreach ($files as $file) {
            if ($file == "." || $file == "..")
                continue;

            unlink($path."temp/".$file);
        }
    }
    else {
        unlink($path."temp/".$photo);
    }
}

if (sizeof(scandir($path."temp/")) <= 2) {
    $dbh = dbConnectSafely();
    $sql = "DELETE FROM `confirmPhotos` WHERE `userID` = :id";
    $sql = $dbh->prepare($sql);

    $sql->execute(array(":id" => $id,));
}

function copyAndDeleteImage($img, $path) {
    $pos = strpos($img, '-');
    $dir = substr($img, 0, $pos);
    $tempPath = $path."temp/".$img;
    list($width, $height) = getimagesize($tempPath);
    $src = imagecreatefromstring(file_get_contents($tempPath));
    $dest = imagecreatetruecolor($width,$height);


    imagecopyresampled($dest, $src, 0, 0, 0, 0, $width, $height, $width, $height);
    imagepng($dest, $path.$dir."/".substr($img, $pos + 1));
    unlink($tempPath);
    imagedestroy($src);
    imagedestroy($dest);
}
