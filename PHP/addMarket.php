<?php
require ("../Libary/Weblibary.php");
session_start();

if (!isset($_SESSION['marketMail'])) {
    header("Location: 404.php");
    die();
}

$dbh = dbConnectSafely();
$sql = "INSERT INTO `market` (`ID`, `name`, `place`, `description`, `category`, `personality`, `price`, `pricesale`, `honorar`, 
                    `company`, `phone`, `dateTo`, `IBAN`, `mail`, `onlineSales`)
        VALUES (:ID, :name, :place, :description, :category, :personality, :price, :pricesale, :honorar, :company,
                :phone, :dateTo, :IBAN, :mail, :onlineSales)";

$sql = $dbh->prepare($sql);

$ID = generateRandomString();
$personality = "";
if ($_POST['men'] == "on") $personality .= "Muži ";
if ($_POST['women'] == "on") $personality .= "Ženy ";
if ($_POST['kids'] == "on") $personality .= "Deti ";

if ($_POST['onlineSales'] == "" )
    $onlineSales = "no";
else
    $onlineSales = $_POST['onlineSales'];

echo "<h6>toto išlo -> ".$personality."</h6>";

$sql->execute(array(
    ":ID" => $ID,
    ":name" => $_POST['name'],
    ":place" => $_POST['place'],
    ":description" => $_POST['description'],
    ":category" => $_POST['category'],
    ":personality" => $personality,
    ":price" => $_POST['price'],
    ":pricesale" => $_POST['pricesale'],
    ":honorar" => $_POST['honorar'],
    ":company" => $_POST['company'],
    ":phone" => $_POST['phone'],
    ":dateTo" => $_POST['dateTo'],
    ":IBAN" => $_POST['IBAN'],
    ":mail" => $_SESSION['marketMail'],
    ":onlineSales" => $onlineSales,
));

echo $dbh->errorCode();
echo "<h6>".$_FILES['castingImage']['tmp_name']."</h6>";
$tmpFilePath = $_FILES['castingImage']['tmp_name'];
//Setup our new file path
$ext = strtolower(pathinfo($_FILES['castingImage']['name'], PATHINFO_EXTENSION));
$newFilePath = "../Market/" . $ID . "." . $ext;
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
$resizedPath = "../Market/" . $ID . ".jpg";
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

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

header("Location: ../thank-you-market.php");