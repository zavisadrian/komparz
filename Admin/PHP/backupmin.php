<?php
function addProfilePhoto($ID) {
    $tmpFilePath = $_FILES['profilePhoto']['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "../../Profiles/".$ID."/profilePhoto/".$_FILES['profilePhoto']['name'];
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$tmpFilePath." success</h6>";
        }

        $fn = $newFilePath;
        list($width, $height) = getimagesize($fn);
        $ratio = $width/$height; // width/height
        if( $ratio > 1) {
            $new_width = 500;
            $new_height = 500/$ratio;
        }
        else {
            $new_width = 500*$ratio;
            $new_height = 500;
        }
        $src = imagecreatefromstring(file_get_contents($fn));
        $dst = imagecreatetruecolor($new_width,$new_height);
        imagecopyresampled($dst,$src,0,0,0,0,$new_width,$new_height,$width,$height);
        $resizedPath = "../../Profiles/".$ID."/profilePhoto/min/min".$_FILES['profilePhoto']['name'];
        imagepng($dst, $resizedPath);
        imagedestroy($src);
        imagedestroy($dst);
    }
}