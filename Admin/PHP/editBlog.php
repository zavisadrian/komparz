<?php
include "../../Libary/Weblibary.php";

$blogName = $_POST['ID'];

mkdir("../../Blog/".$blogName);

unlink("../../Blog/".$blogName."/blog.html");
$myfile = fopen("../../Blog/".$blogName."/blog.html", "w");
$html = $_POST['html'];
fwrite($myfile, $html);
fclose($myfile);

$dbh = dbConnectSafely();
$sql = "UPDATE `blog` SET `headline` = :headline, `mainText` = :mainText WHERE `htmlContent` = :htmlContent";
$sql = $dbh->prepare($sql);
$sql->execute(array(
    ":headline" => $_POST['headline'],
    ":mainText" => $_POST['mainText'],
    ":htmlContent" => $_POST['ID']
));

if ($_REQUEST['croppedImages'] != "") {
    echo "<h6>".$_FILES['castingImage']['tmp_name']."</h6>";
    $tmpFilePath = $_FILES['castingImage']['tmp_name'];
//Setup our new file path
    $ext = strtolower(pathinfo($_FILES['castingImage']['name'], PATHINFO_EXTENSION));
    $newFilePath = "../../Blog/".$blogName . "/blog." . $ext;
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
    $resizedPath = "../../Blog/".$blogName."/blog.jpg";
    if (imagejpeg($dst, $resizedPath)) echo "<h6>Druhy krok prešiel</h6>"; else echo "<h6>Druhy krok neprešiel</h6>";
    imagedestroy($src);
    imagedestroy($dst);

    $crop = json_decode($_POST['croppedImages']);
    echo $_REQUEST['croppedImages'];
    $crop = $crop->main[0];

    $cropx = $crop->x1;
    $cropy = $crop->y1;
    $cropw = $crop->x2 - $crop->x1;
    $croph = $crop->y2 - $crop->y1;


    $im = imagecreatefromjpeg($resizedPath);
    $size = min(imagesx($im), imagesy($im));
    $im2 = imagecrop($im, ['x' => $cropx, 'y' => $cropy, 'width' => $cropw, 'height' => $croph]);
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

header("Location: ../successMessage.php?message=Blog bol úspešne upravený.");
