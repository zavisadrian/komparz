<?php
session_start();
require("../Libary/Weblibary.php");

echo $_SESSION['userID'];

$prefix = "";
switch (substr($_SESSION['userID'], 0, 2)){
    case "01":
        $prefix = "pr_actor";
        $kind = "Herci a komparzisti";
        $kind1 = " hercovi / komparzistovi";
        editActor();
        break;
    case "02":
        $prefix = "pr_creative";
        $kind = "Kreatívni profesionáli";
        $kind1 = " kreatívnom profesionálovi";
        editCreative();
        break;
    case "03":
        $prefix = "pr_hostess";
        $kind = "Hostesky / promotéri";
        $kind1 = " hosteske / promotérovi";
        addHostess();
        break;
    case "04":
        $prefix = "pr_model";
        $kind = "Modelka / model";
        $kind1 = " modelovi / modelke";
        addModel();
        break;
    case "05":
        $prefix = "pr_foto";
        $kind = "Fotograf";
        $kind1 = " fotografovi";
        addPhotographer();
        break;
    case "06":
        $prefix = "pr_agentures";
        $kind = "Agentúra";
        $kind1 = " agentúre";
        addAgenture();
        break;
    default:
        echo "Invalid type of user. You were kicked.";
        die();
}

function editActor()
{
    $ID = $_SESSION['userID'];

    $interests = $_POST['in1'] . $_POST['in2'] . $_POST['in3'] . $_POST['in4'];

    $addons = $_POST['ao1'] . $_POST['ao2'] . $_POST['ao3'] . $_POST['ao4'];

    $talent = (object)[
        'creative' => $_POST['cr1'] . $_POST['cr2'] . $_POST['cr3'] . $_POST['cr4'] . $_POST['cr5'] . $_POST['cr6'] . $_POST['cr7'] . $_POST['cr8'],
        'movement' => $_POST['mv1'] . $_POST['mv2'] . $_POST['mv3'] . $_POST['mv4'] . $_POST['mv5'] . $_POST['mv6'] . $_POST['mv7'] . $_POST['mv8'] .
            $_POST['mv9'] . $_POST['mv10'] . $_POST['mv11'] . $_POST['mv12'] . $_POST['mv13'] . $_POST['mv14'] . $_POST['mv15'] . $_POST['mv16'],
        'languages' => $_POST['l1'] . $_POST['l2'] . $_POST['l3'] . $_POST['l4'] . $_POST['l5'] . $_POST['l6'] . $_POST['l7'] . $_POST['l8'] . $_POST['l9'],
    ];

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_actor` SET `name`= :pr_name,`surname`= :pr_surname,/*`password`= :password,*/`phone`= :phone,`street`= :street,
            `city`= :city,`postcode`= :postcode,`region`= :region,`nationality`= :nationality,`gender`= :gender,`date_of_birth`= :date_of_birth,
            `height`= :height,`eyes`= :eyes, `hair`= :hair,`talent`= :talent,`interests`= :interests,`add_ons`= :add_ons,`work`= :pr_work,`bio`= :bio
             WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        //":password" => Hash("sha256", $_POST['password']),
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":region" => $_POST['region'],
        ":postcode" => $_POST['postcode'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => date("Y-m-d", strtotime($_POST['date_of_birth'])),
        ":height" => $_POST['height'],
        ":eyes" => $_POST['eyes'],
        ":hair" => $_POST['hair'],
        ":interests" => $interests,
        ":add_ons" => $addons,
        ":talent" => json_encode($talent, JSON_UNESCAPED_UNICODE),
        ":pr_work" => $_POST['work'],
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    deleteImages($ID);

    saveImages($ID);

    notifyFollowers($ID);

    redirectToProfile($ID);
}

function editCreative() {

    $ID = $_SESSION['userID'];

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_creative` SET `name`= :name, `surname`=:surname, `gender`= :gender, `phone`= :phone,
            `street`= :street,`city`= :city,`postcode`= :postcode,`region`= :region,`category`= :category,`web`= :web,
            `fb`= :fb,`ig`= :ig,`bio`= :bio
            WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":name" => $_POST['name'],
        ":surname" => $_POST['surname'],
        ":gender" => $_POST['gender'],
        ":category" => $_POST['category'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    deleteImages($ID);

    saveImages($ID);

    notifyFollowers($ID);

    //redirectToProfile($ID);
}

function addHostess() {

    $ID = $_SESSION['userID'];

    $interests = $_POST['in1'].$_POST['in2'].$_POST['in3'].$_POST['in4'];

    $addons = $_POST['ao1'].$_POST['ao2'].$_POST['ao3'].$_POST['ao4'];

    $proportions = (object) [
        'breast' => $_POST['pr1'],
        'waist' => $_POST['pr2'],
        'hips' => $_POST['pr3']
    ];

    $talent = (object) [
        'creative' => $_POST['cr1'].$_POST['cr2'].$_POST['cr3'].$_POST['cr4'].$_POST['cr5'].$_POST['cr6'].$_POST['cr7'].$_POST['cr8'],
        'movement' => $_POST['mv1'].$_POST['mv2'].$_POST['mv3'].$_POST['mv4'].$_POST['mv5'].$_POST['mv6'].$_POST['mv7'].$_POST['mv8'].
            $_POST['mv9'].$_POST['mv10'].$_POST['mv11'].$_POST['mv12'].$_POST['mv13'].$_POST['mv14'].$_POST['mv15'].$_POST['mv16'],
        'languages' => $_POST['l1'].$_POST['l2'].$_POST['l3'].$_POST['l4'].$_POST['l5'].$_POST['l6'].$_POST['l7'].$_POST['l8'].$_POST['l9'],
    ];

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_hostess` SET `name`= :name,`surname`= :surname, `phone`= :phone,`street`=:street,
            `city`= :city,`postcode`= :postcode,`region`= :region,`nationality`= :nationality,`gender`= :gender,
            `date_of_birth`= :date_of_birth,`height`= :height,`eyes`=:eyes,`hair`=:hair,`talent`=:talent,`work`= :work,
            `clothes_size`= :clothes_size,`shoes_size`= :shoes_size,`proportions`= :proportions,`interests`= :interests,
            `add_ons`= :add_ons,`bio`= :bio
            WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":name" => $_POST['name'],
        ":surname" => $_POST['surname'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => date("Y-m-d", strtotime($_POST['date_of_birth'])),
        ":height" => $_POST['height'],
        ":eyes" => $_POST['eyes'],
        ":hair" => $_POST['hair'],
        ":interests" => $interests,
        ":add_ons" => $addons,
        ":talent" => json_encode($talent, JSON_UNESCAPED_UNICODE),
        ":work" => $_POST['work'],
        ":clothes_size" => $_POST['confection'],
        ":shoes_size" => $_POST['foot_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    deleteImages($ID);

    saveImages($ID);

    notifyFollowers($ID);

    redirectToProfile($ID);

}

function addModel() {

    $ID = $_SESSION['userID'];

    $interests = $_POST['in1'] . $_POST['in2'] . $_POST['in3'] . $_POST['in4'];

    $addons = $_POST['ao1'] . $_POST['ao2'] . $_POST['ao3'] . $_POST['ao4'];

    $proportions = (object)[
        'breast' => $_POST['pr1'],
        'waist' => $_POST['pr2'],
        'hips' => $_POST['pr3']
    ];

    $talent = (object)[
        'creative' => $_POST['cr1'] . $_POST['cr2'] . $_POST['cr3'] . $_POST['cr4'] . $_POST['cr5'] . $_POST['cr6'] . $_POST['cr7'] . $_POST['cr8'],
        'movement' => $_POST['mv1'] . $_POST['mv2'] . $_POST['mv3'] . $_POST['mv4'] . $_POST['mv5'] . $_POST['mv6'] . $_POST['mv7'] . $_POST['mv8'] .
            $_POST['mv9'] . $_POST['mv10'] . $_POST['mv11'] . $_POST['mv12'] . $_POST['mv13'] . $_POST['mv14'] . $_POST['mv15'] . $_POST['mv16'],
        'languages' => $_POST['l1'] . $_POST['l2'] . $_POST['l3'] . $_POST['l4'] . $_POST['l5'] . $_POST['l6'] . $_POST['l7'] . $_POST['l8'] . $_POST['l9'],
    ];

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_model` SET `name`= :name,`surname`= :surname,`mail`= :mail,`phone`= :phone,`street`=:street,
            `city`= :city,`postcode`= :postcode,`region`= :region,`nationality`= :nationality,`gender`= :gender,
            `date_of_birth`= :date_of_birth,`height`= :height,`eyes`=:eyes,`hair`=:hair,`talent`=:talent,`work`= :work,
            `clothes_size`= :clothes_size,`shoes_size`= :shoes_size,`proportions`= :proportions,`interests`= :interests,
            `add_ons`= :add_ons,`bio`= :bio
            WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":name" => $_POST['name'],
        ":surname" => $_POST['surname'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => date("Y-m-d", strtotime($_POST['date_of_birth'])),
        ":height" => $_POST['height'],
        ":eyes" => $_POST['eyes'],
        ":hair" => $_POST['hair'],
        ":interests" => $interests,
        ":add_ons" => $addons,
        ":talent" => json_encode($talent, JSON_UNESCAPED_UNICODE),
        ":work" => $_POST['work'],
        ":clothes_size" => $_POST['confection'],
        ":shoes_size" => $_POST['foot_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    deleteImages($ID);

    saveImages($ID);

    notifyFollowers($ID);

    redirectToProfile($ID);
}

function addPhotographer() {

    $ID = $_SESSION['userID'];

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_foto` SET `name`= :name, `surname`= :surname, `gender`=:gender, `phone`= :phone, `street`=:street,
            `city`=:city, `postcode`= :postcode, `region`= :region, `web`= :web, `fb`=:fb, `ig`=:ig, `bio`=:bio
            WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":name" => $_POST['name'],
        ":surname" => $_POST['surname'],
        ":gender" => $_POST['gender'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    deleteImages($ID);

    saveImages($ID);

    notifyFollowers($ID);

    redirectToProfile($ID);
}

function addAgenture() {

    $ID = $_SESSION['userID'];

    $openhours = [];
    for ($i = 1; $i <= 7; $i++) {
        if (strlen($_POST['op'.$i]) > 4) {
            $temp = new stdClass();
            $temp->day = $_POST['op'.$i];
            $temp->hours = $_POST['op'.$i.'t'];
            if (strlen($_POST['op'.$i.'t']) > 5)
                array_push($openhours, $temp);
        }
    }
    $openhours = json_encode($openhours, JSON_UNESCAPED_UNICODE);

    $cropDemisions = json_decode($_REQUEST['croppedImages']);
    $cropDemisions = $cropDemisions->main;
    var_dump($cropDemisions); echo "<br>";
    for ($i = 0; $i < count($cropDemisions); $i++) {
        if ($cropDemisions[$i]->deleted == true) {
            unlink("../Profiles/".$ID."/images/".$cropDemisions[$i]->name.".jpg");
            unlink("../Profiles/".$ID."/images/min/".$cropDemisions[$i]->name.".jpg");
            echo "../Profiles/".$ID."/images/".$cropDemisions[$i]->name.".jpg - DELETED <br>";
        } else
        echo "../Profiles/".$ID."/images/".$cropDemisions[$i]->name." - ".$cropDemisions[$i]->delete." <br>";
    }

    $success = [];
    $cropDemisions = json_decode($_REQUEST['croppedImages']);
    $cropDemisions = $cropDemisions->main;
    $index = getIndexFromArrayObject($cropDemisions, 'logo');
    saveCroppedImage($ID, 'logo', $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
    $index = getIndexFromArrayObject($cropDemisions, 'p001');
    saveCroppedImage($ID, 'p001', $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);

    for ($i = 1; $i <= 10; $i++) {
        $temp = new stdClass();
        if (strlen($_POST['suc'.$i.'_text']) > 0) {
            $temp->text = $_POST['suc'.$i.'_text'];
            $temp->img = 'suc'.$i;
        }
        if (strlen($_POST['suc'.$i.'_link']) > 0) {
            $temp->link = $_POST['suc'.$i.'_link'];
        }
        if (isset($_FILES['suc'.$i])) {
            $index = getIndexFromArrayObject($cropDemisions, 'suc'.$i);
            echo "saving: "."suc".$i;
            saveCroppedImage($ID, 'suc'.$i, $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
            array_push($success, $temp);
        }
    }
    $success = json_encode($success, JSON_UNESCAPED_UNICODE);
    echo "successes are: ".$success."<br>"."<br>";

    $dbh = dbConnectSafely();
    $sql = "UPDATE `pr_agentures` SET `name`=:name,`ico`=:ico,`dic`=:dic,`icdph`=:icdph,`street`=:street,`city`=:city,
            `region`=:region,`postcode`=:postcode,`category`=:category,`fb`=:fb,`ig`=:ig,`phone`=:phone,`web`=:web,
            `conemail`=:conemail,`openhours`=:openhours,`bio`=:bio,`successes`=:successes
            WHERE `ID` = '".$ID."'";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":name" => $_POST['name'],
        ":ico" => $_POST['ico'],
        ":dic" => $_POST['dic'],
        ":icdph" => $_POST['icdph'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":region" => $_POST['region'],
        ":postcode" => $_POST['postcode'],
        ":category" => $_POST['category'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":conemail" => $_POST['conemail'],
        ":phone" => $_POST['phone'],
        ":openhours" => $openhours,
        ":bio" => $_POST['bio'],
        ":successes" => $success,
    ));

    echo $dbh->errorCode();

    notifyFollowers($ID);

    redirectToProfile($ID,"a");
}

function IDG()
{ //ID Generator.
    $ID = "";
    switch ($_REQUEST["type"]) {
        case "actor":
            $ID = "01";
            break;
        case "creative":
            $ID = "02";
            break;
        case "hostess":
            $ID = "03";
            break;
        case "model":
            $ID = "04";
            break;
        case "photographer":
            $ID = "05";
            break;
        case "agenture":
            $ID = "06";
            break;
        default:
            echo "Invalid type of user";
            return "XXXXXXXXXXX";
    }

    switch ($_REQUEST['gender']) {
        case "Muž":
            $ID .= "01";
            break;
        case "Žena":
            $ID .= "02";
            break;
        default:
            echo "Invalid type of user";
            return "XXXXXXXXXXX";
    }

    return $ID . generateRandomString(6);
}

function generateRandomString($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function saveImages($ID)
{

    mkdir("../Profiles/" . $ID);
    mkdir("../Profiles/" . $ID . "/images");
    mkdir("../Profiles/" . $ID . "/images/min");
    mkdir("../Profiles/" . $ID . "/images/photos");
    mkdir("../Profiles/" . $ID . "/images/photobooks");
    mkdir("../Profiles/" . $ID . "/images/polaroids");
    mkdir("../Profiles/" . $ID . "/images/photos/min");
    mkdir("../Profiles/" . $ID . "/images/photobooks/min");
    mkdir("../Profiles/" . $ID . "/images/polaroids/min");

    //load json with crop demisions
    $cropDemisions = json_decode($_REQUEST['croppedImages']);
    $cropDemisions = $cropDemisions->main;
echo "TOTO ___ ";
    var_dump($cropDemisions);

    echo "<h6>This is json: " . $_REQUEST['croppedImages'] . "</h6>";

    //save profile photo sep.
    $index = getIndexFromArrayObject($cropDemisions, 'p001');

    echo "<h6>Toto je index: " . $index . "</h6>";

    if (isset($_FILES["p001"])) {
        echo "<h6>Profilovka je nastavená.</h6>";
        saveCroppedImage($ID, "p001", $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
    } else echo "<h6>Error: Profilovka nebola nastavená</h6>.</h6>";

    //save every setted image from gallery
    for ($j = 1; $j <= 9; $j++) {

        $name = "p01" . $j;
        $index = getIndexFromArrayObject($cropDemisions, $name);

        if (isset($_FILES[$name])) {
            echo "<h6>name: " . $name . " | Crop " . $index . " -> " . $cropDemisions[$index]->x1 . " je nastavená.</h6>";
            saveCroppedImage($ID, $name, $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
        } else echo "<h6>" . $name . " ERROR - NOT SET VARIABLE</h6>";

    }

    $name = "p021";
    $index = getIndexFromArrayObject($cropDemisions, $name);

    if (isset($_FILES[$name])) {
        echo "<h6>name: " . $name . " | Crop " . $index . " -> " . $cropDemisions[$index]->x1 . " je nastavená.</h6>";
        saveCroppedImage($ID, $name, $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
    } else echo "<h6>" . $name . " ERROR - NOT SET VARIABLE</h6>";

    $name = "p031";
    $index = getIndexFromArrayObject($cropDemisions, $name);

    if (isset($_FILES[$name])) {
        echo "<h6>name: " . $name . " | Crop " . $index . " -> " . $cropDemisions[$index]->x1 . " je nastavená.</h6>";
        saveCroppedImage($ID, $name, $cropDemisions[$index]->x1, $cropDemisions[$index]->y1, $cropDemisions[$index]->x2, $cropDemisions[$index]->y2);
    } else echo "<h6>" . $name . " ERROR - NOT SET VARIABLE</h6>";
    //save rest of gallery
    saveRestImages($ID);
}

function saveCroppedImage($ID, $name, $x0, $y0, $x1, $y1)
{
    $tmpFilePath = $_FILES[$name]['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != "") {
        //Setup our new file path
        $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);
        $newFilePath = "../Profiles/" . $ID . "/images/" . $name . "." . $ext;
        //Upload the file into the temp dir
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            //echo "<h6>photo: ".$tmpFilePath." success</h6>";
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

        if ($x0 + $y0 + $x1 + $y1 != 0) {
            $cropx = $x0;
            $cropy = $y0;
            $cropw = $x1 - $x0;
            $croph = $y1 - $y0;
        } else {
            $cropx = 0;
            $cropy = 0;
            $cropw = $width;
            $croph = $height;
        }

        //Crop edited image!
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

        //Create miniature of image
        $fn = $resizedPath;
        list($width, $height) = getimagesize($fn);
        $ratio = $width / $height; // width/height
        if ($ratio > 1) {
            $new_width = 600;
            $new_height = 600 / $ratio;
        } else {
            $new_width = 600 * $ratio;
            $new_height = 600;
        }
        $src = imagecreatefromstring(file_get_contents($fn));
        $dst = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        $newFilePath = "../Profiles/" . $ID . "/images/min/" . $name . ".jpg";
        imagejpeg($dst, $newFilePath, 80);
        imagedestroy($src);
        imagedestroy($dst);

        //Create lower version of image
        $fn = $resizedPath;
        list($width, $height) = getimagesize($fn);
        $ratio = $width / $height; // width/height
        if ($ratio > 1) {
            $new_width = 1920;
            $new_height = 1920 / $ratio;
        } else {
            $new_width = 1920 * $ratio;
            $new_height = 1920;
        }
        $src = imagecreatefromstring(file_get_contents($fn));
        $dst = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        $newFilePath = "../Profiles/" . $ID . "/images/" . $name . ".jpg";
        imagejpeg($dst, $newFilePath, 90);
        imagedestroy($src);
        imagedestroy($dst);
    }
}

function saveRestImages($ID)
{
    echo "size is: " . count($_FILES["photos"]['tmp_name']);
    echo "size is: " . count($_FILES["photobooks"]['tmp_name']);
    echo "size is: " . count($_FILES["polaroids"]);


    for ($i = 0; $i < count($_FILES["photos"]); $i++) {
        $tmpFilePath = $_FILES["photos"]['tmp_name'][$i];
        echo $tmpFilePath . " <- ";

        if ($tmpFilePath != "") {
            $name = generateRandomString(12);
            //Setup our new file path
            $ext = pathinfo($_FILES["photos"]['name'][$i], PATHINFO_EXTENSION);
            $newFilePath = "../Profiles/" . $ID . "/images/photos/" . $name . ".jpg";
            //Upload the file into the temp dir
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: " . $tmpFilePath . " success</h6>";
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
                $new_width = 600;
                $new_height = 600 / $ratio;
            } else {
                $new_width = 600 * $ratio;
                $new_height = 600;
            }
            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/photos/min/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 80);
            imagedestroy($src);
            imagedestroy($dst);

            //Create lower version of image
            $fn = $resizedPath;
            list($width, $height) = getimagesize($fn);
            $ratio = $width / $height; // width/height
            if ($ratio > 1) {
                $new_width = 1920;
                $new_height = 1920 / $ratio;
            } else {
                $new_width = 1920 * $ratio;
                $new_height = 1920;
            }
            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/photos/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 90);
            imagedestroy($src);
            imagedestroy($dst);
        }
    }


    for ($i = 0; $i < count($_FILES["photobooks"]); $i++) {
        $tmpFilePath = $_FILES["photobooks"]['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != "") {
            $name = generateRandomString(12);
            //Setup our new file path
            $ext = pathinfo($_FILES["photos"]['name'][$i], PATHINFO_EXTENSION);
            $newFilePath = "../Profiles/" . $ID . "/images/photobooks/" . $name . ".jpg";
            //Upload the file into the temp dir
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: " . $tmpFilePath . " success</h6>";
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
                $new_width = 600;
                $new_height = 600 / $ratio;
            } else {
                $new_width = 600 * $ratio;
                $new_height = 600;
            }

            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/photobooks/min/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 80);
            imagedestroy($src);
            imagedestroy($dst);

            //Create lower version of image
            $fn = $resizedPath;
            list($width, $height) = getimagesize($fn);
            $ratio = $width / $height; // width/height
            if ($ratio > 1) {
                $new_width = 1920;
                $new_height = 1920 / $ratio;
            } else {
                $new_width = 1920 * $ratio;
                $new_height = 1920;
            }
            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/photobooks/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 90);
            imagedestroy($src);
            imagedestroy($dst);
        }
    }

    for ($i = 0; $i < count($_FILES["polaroids"]); $i++) {
        $tmpFilePath = $_FILES["polaroids"]['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != "") {
            $name = generateRandomString(12);
            //Setup our new file path
            $ext = pathinfo($_FILES["polaroids"]['name'][$i], PATHINFO_EXTENSION);
            $newFilePath = "../Profiles/" . $ID . "/images/polaroidsX/" . $name . ".jpg";
            //Upload the file into the temp dir
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                //echo "<h6>photo: ".$tmpFilePath." success</h6>";
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
                $new_width = 600;
                $new_height = 600 / $ratio;
            } else {
                $new_width = 600 * $ratio;
                $new_height = 600;
            }
            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/polaroidsX/min/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 80);
            imagedestroy($src);
            imagedestroy($dst);

            //Create lower version of image
            $fn = $resizedPath;
            list($width, $height) = getimagesize($fn);
            $ratio = $width / $height; // width/height
            if ($ratio > 1) {
                $new_width = 1920;
                $new_height = 1920 / $ratio;
            } else {
                $new_width = 1920 * $ratio;
                $new_height = 1920;
            }
            $src = imagecreatefromstring(file_get_contents($fn));
            $dst = imagecreatetruecolor($new_width, $new_height);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            $newFilePath = "../Profiles/" . $ID . "/images/polaroidsX/" . $name . ".jpg";
            imagejpeg($dst, $newFilePath, 90);
            imagedestroy($src);
            imagedestroy($dst);
        }
    }
}

function deleteImages ($ID){
    $base = json_decode($_REQUEST['croppedImages']);

    $cropDemisions = $base->photos;
    for ($i = 0; $i < count($cropDemisions); $i++) {
        unlink("../Profiles/".$ID."/images/photos/".$cropDemisions[$i]->name);
        unlink("../Profiles/".$ID."/images/photos/min/".$cropDemisions[$i]->name);
    }

    $cropDemisions = $base->photobooks;
    for ($i = 0; $i < count($cropDemisions); $i++) {
        unlink("../Profiles/".$ID."/images/photobooks/".$cropDemisions[$i]->name);
        unlink("../Profiles/".$ID."/images/photobooks/min/".$cropDemisions[$i]->name);
    }

    $cropDemisions = $base->polaroids;
    for ($i = 0; $i < count($cropDemisions); $i++) {
        unlink("../Profiles/".$ID."/images/polaroids/".$cropDemisions[$i]->name);
        unlink("../Profiles/".$ID."/images/polaroids/min/".$cropDemisions[$i]->name);
    }

    $cropDemisions = $base->main;
    for ($i = 0; $i < count($cropDemisions); $i++) {
        if ($cropDemisions[$i]->deleted == true) {
            echo "<br>"."../Profiles/".$ID."/images/".$cropDemisions[$i]->name.".jpg";
            unlink("../Profiles/".$ID."/images/".$cropDemisions[$i]->name.".jpg");
            unlink("../Profiles/".$ID."/images/min/".$cropDemisions[$i]->name.".jpg");
        }
    }
}

function getIndexFromArrayObject($obj, $key)
{

    for ($i = 0; $i <= count($obj); $i++) {
        if ($obj[$i]->name == $key) return $i;
    }

    return "null";
}

function redirectToProfile($ID, $type = "p")
{
    if ($type == "p")
        header("Location: ../profile-acter.php?ID=".$ID);
    else if ($type == "a")
        header("Location: ../profile-agency.php?ID=".$ID);
}

function notifyFollowers($ID) {
    global $prefix;
    $conn = dbConnect();
    $sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$ID."'";
    $res = $conn->query($sql);
    $str_arr = [];
    if ($res->num_rows > 0) {
        while($rw = $res->fetch_assoc()) {
            $str_arr = explode (",", $rw['followers']);
        }
    }

    for ($i = 0; $i < count($str_arr); $i++) {
       if (strlen($str_arr[$i])) {
           switch (substr($str_arr[$i], 0, 2)){
               case "01":
                   $prefix2 = "pr_actor";
                   break;
               case "02":
                   $prefix2 = "pr_creative";
                   break;
               case "03":
                   $prefix2 = "pr_hostess";
                   break;
               case "04":
                   $prefix2 = "pr_model";
                   break;
               case "05":
                   $prefix2 = "pr_foto";
                   break;
               case "06":
                   $prefix2 = "pr_agentures";
                   break;
               default:
                   { }
           }
           $sql = "SELECT * FROM `".$prefix2."` WHERE `ID` = '".$str_arr[$i]."'";
           $rs = $conn->query($sql);
           if ($rs->num_rows > 0) { while($r = $rs->fetch_assoc()) { $mail = $r['mail']; } }
           echo "<h3>".$i." mail -> ".$mail."</h3>";
           $message = "<html><body>Váš follow si zmenil niečo na profile! Klikni <a href='http://komparztv.upvision.sk/profile-acter.php?ID=".$ID."'>sem</a> nech ti nič neunikne!!</body></html>";
           if (sendMail($mail, "Komparztv | Aktivita vášho followa", $message))
               echo "oslavuj je to ok";
       }
    }
}