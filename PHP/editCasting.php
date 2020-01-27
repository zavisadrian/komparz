<?php
require ("../Libary/Weblibary.php");
session_start();
$ID = $_REQUEST['ID'];

if (!isset($_SESSION['castingMail'])) {
    header("Location: 404.php");
}

$dbh = dbConnectSafely();
$sql = "UPDATE `casting` SET `name`= :name, `date`= :date,`length`= :length , `place`= :place,`googleMaps`= :googleMaps,
        `honorar`= :honorar,`description`= :description,`addition`= :addition,`ownername`= :ownername,`ownerphone`= :ownerphone
        WHERE `ID` = '".$ID."' AND `owneremail` = '".$_SESSION['castingMail']."'";

echo $sql;

$sql = $dbh->prepare($sql);

$sql->execute(array(
    ":name" => $_POST['name'],
    ":date" => date("Y-m-d", strtotime($_POST['date'])),
    ":length" => date("Y-m-d", strtotime($_POST['dateEnd'])),
    ":place" => $_POST['place'],
    ":googleMaps" => $_POST['googleMaps'],
    ":honorar" => $_POST['honorar'],
    ":description" => $_POST['description'],
    ":addition" => $_POST['addition'],
    ":ownername" => $_POST['ownername'],
    ":ownerphone" => $_POST['ownerphone'],
));

echo $dbh->errorCode();
if ($_FILES['castingImage']['tmp_name'] != "") {
    echo "<h6>".$_FILES['castingImage']['tmp_name']."</h6>";
    $tmpFilePath = $_FILES['castingImage']['tmp_name'];
//Setup our new file path
    $ext = strtolower(pathinfo($_FILES['castingImage']['name'], PATHINFO_EXTENSION));
    $newFilePath = "../Casting/" . $ID . "." . $ext;
    echo "<h6>".$newFilePath."</h6>";
//Upload the file into the temp dir
    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
        echo "<h6>photo: ".$tmpFilePath." success</h6>";
    } else echo "<h6>Fotku som neuložil</h6>";

//Edit image to lower size!!
    $fn = $newFilePath;
    list($width, $height) = getimagesize($fn);
    $ratio = $width / $height; // width/height
    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor($width, $height);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $width, $height);
    $resizedPath = "../Casting/" . $ID . ".jpg";
    if (imagejpeg($dst, $resizedPath)) echo "<h6>Druhy krok prešiel</h6>"; else echo "<h6>Druhy krok neprešiel</h6>";
    imagedestroy($src);
    imagedestroy($dst);

    $crop = json_decode($_POST['croppedImages']);
    echo $_REQUEST['croppedImages'];
    $crop = $crop->main[0];

    echo " x1 = ".$crop->x1;
    echo " x2 = ".$crop->x2;
    echo " y1 = ".$crop->y1;

    $im = imagecreatefromjpeg($resizedPath);
    $size = min(imagesx($im), imagesy($im));
    $im2 = imagecrop($im, ['x' => $crop->x1, 'y' => $crop->y1, 'width' => $crop->x2, 'height' => $crop->y2]);
    if ($im2 !== FALSE) {
        //header("Content-type: image/png");
        imagepng($im2, $resizedPath);
        imagedestroy($im2);
    }
    imagedestroy($im);
    imagedestroy($im2);

    $fn = $resizedPath;
    list($width, $height) = getimagesize($fn);
    $ratio = $width / $height; // width/height
    if ($ratio > 1) {
        $new_width = 700;
        $new_height = 700 / $ratio;
    } else {
        $new_width = 700 * $ratio;
        $new_height = 700;
    }

    $src = imagecreatefromstring(file_get_contents($fn));
    $dst = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    $resizedPath = $newFilePath;
    if (imagejpeg($dst, $resizedPath)) echo "<h6>Druhy krok prešiel</h6>"; else echo "<h6>Druhy krok neprešiel</h6>";
    imagedestroy($src);
    imagedestroy($dst);
}

header("Location: ../casting-own.php");