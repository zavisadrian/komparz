<?php
include "../../Libary/Weblibary.php";

for ($i = 0; $i < count($_FILES["photos"]); $i++) {
    $tmpFilePath = $_FILES["photos"]['tmp_name'][$i];

    if ($tmpFilePath != "") {
        $name = rndString(12);
        //Setup our new file path
        $ext = pathinfo($_FILES["photos"]['name'][$i], PATHINFO_EXTENSION);
        $newFilePath = "../sponsors/" . $name . ".jpg";
        //Upload the file into the temp dir
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$tmpFilePath." success</h6>";
        }

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
        imagedestroy($dst);

        //Create miniature of image
        $fn = $resizedPath;
        list($width, $height) = getimagesize($fn);
        $ratio = $width / $height; // width/height
        if ($ratio > 1) {
            $new_width = 400;
            $new_height = 400 / $ratio;
        } else {
            $new_width = 400 * $ratio;
            $new_height = 400;
        }

        $src = imagecreatefromstring(file_get_contents($fn));
        $dst = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        $newFilePath = "../sponsors/" . $name . ".jpg";
        imagejpeg($dst, $newFilePath, 90);
        imagedestroy($src);
        imagedestroy($dst);
    }
}