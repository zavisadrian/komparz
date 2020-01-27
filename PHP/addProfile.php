<?php
require ("../Libary/Weblibary.php");

if (IDG() != "XXXXXXXXXXX")
switch ($_REQUEST["type"]){
    case "actor":
        addActor();
        break;
    case "creative":
        addCreative();
        break;
    case "hostess":
        addHostess();
        break;
    case "model":
        addModel();
        break;
    case "photographer":
        addPhotographer();
        break;
    case "agenture":
        addAgenture();
        break;
    default:
        echo "Invalid type of user: ".$_REQUEST["type"];
        die();
}
else {
    header("Location: 404.php");
}

function addActor() {
    $ID = IDG();

    $interests = $_POST['in1'].$_POST['in2'].$_POST['in3'].$_POST['in4'];

    $addons = $_POST['ao1'].$_POST['ao2'].$_POST['ao3'].$_POST['ao4'];

    $talent = (object) [
        'creative' => $_POST['cr1'].$_POST['cr2'].$_POST['cr3'].$_POST['cr4'].$_POST['cr5'].$_POST['cr6'].$_POST['cr7'].$_POST['cr8'],
        'movement' => $_POST['mv1'].$_POST['mv2'].$_POST['mv3'].$_POST['mv4'].$_POST['mv5'].$_POST['mv6'].$_POST['mv7'].$_POST['mv8'].
                      $_POST['mv9'].$_POST['mv10'].$_POST['mv11'].$_POST['mv12'].$_POST['mv13'].$_POST['mv14'].$_POST['mv15'].$_POST['mv16'],
        'languages' => $_POST['l1'].$_POST['l2'].$_POST['l3'].$_POST['l4'].$_POST['l5'].$_POST['l6'].$_POST['l7'].$_POST['l8'].$_POST['l9'],
    ];

    $dbh = dbConnectSafely();
    $sql = "INSERT INTO `pr_actor` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `region`, `postcode`,
    `nationality`, `gender`, `date_of_birth`, `height`, `eyes`, `hair`, `interests`, `add_ons`, `talent`, `work`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :region, :postcode,
    :nationality, :gender, :date_of_birth, :height, :eyes, :hair, :interests, :add_ons, :talent, :pr_work, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        ":password" => Hash("sha256", $_POST['password']),
        ":mail" => $_POST['mail'],
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

    saveImages($ID);

    redirectToProfile($ID, $_POST['mail'], $_POST['password']);
}

function addCreative() {
    $ID = IDG();

    $dbh = dbConnectSafely();
    $sql = "INSERT INTO `pr_creative` (`ID`, `name`, `surname`, `gender`, `category`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `web`, `fb`, `ig`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :gender, :category, :password, :mail, :phone, :street, :city, :postcode, :region,
    :web, :fb, :ig, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        ":gender" => $_POST['gender'],
        ":category" => $_POST['category'],
        ":password" => Hash("sha256", $_POST['password']),
        ":mail" => $_POST['mail'],
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

    saveImages($ID);

    redirectToProfile($ID, $_POST['mail'], $_POST['password']);
}

function addHostess() {
    $ID = IDG();

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
    $sql = "INSERT INTO `pr_hostess` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `nationality`, `gender`, `date_of_birth`, `height`, `eyes`, `hair`, `interests`, `add_ons`, `talent`, `work`, `clothes_size`, `shoes_size`, `proportions`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :postcode, :region,
    :nationality, :gender, :date_of_birth, :height, :eyes, :hair, :interests, :add_ons, :talent, :pr_work, :clothes_size, :shoes_size, :proportions, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        ":password" => Hash("sha256", $_POST['password']),
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
        ":pr_work" => $_POST['work'],
        ":clothes_size" => $_POST['confection'],
        ":shoes_size" => $_POST['foot_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    saveImages($ID);

    redirectToProfile($ID, $_POST['mail'], $_POST['password']);
}

function addModel() {
    $ID = IDG();

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
    $sql = "INSERT INTO `pr_model` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `nationality`, `gender`, `date_of_birth`, `height`, `eyes`, `hair`, `interests`, `add_ons`, `talent`, `work`, `clothes_size`, `shoes_size`, `proportions`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :postcode, :region,
    :nationality, :gender, :date_of_birth, :height, :eyes, :hair, :interests, :add_ons, :talent, :pr_work, :clothes_size, :shoes_size, :proportions, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        ":password" => Hash("sha256", $_POST['password']),
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
        ":pr_work" => $_POST['work'],
        ":clothes_size" => $_POST['confection'],
        ":shoes_size" => $_POST['foot_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    saveImages($ID);

    redirectToProfile($ID, $_POST['mail'], $_POST['password']);
}

function addPhotographer() {
    $ID = IDG();

    $dbh = dbConnectSafely();
    $sql = "INSERT INTO `pr_foto` (`ID`, `name`, `surname`, `gender`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `web`, `fb`, `ig`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :gender, :password, :mail, :phone, :street, :city, :postcode, :region,
    :web, :fb, :ig, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['name'],
        ":pr_surname" => $_POST['surname'],
        ":gender" => $_POST['gender'],
        ":password" => Hash("sha256", $_POST['password']),
        ":mail" => $_POST['mail'],
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

    saveImages($ID);

    redirectToProfile($ID, $_POST['mail'], $_POST['password']);
}

function addAgenture() {
    $ID = IDG();
    echo "ID: ".$ID."<br>";
    mkdir("../Profiles/".$ID);
    mkdir("../Profiles/".$ID."/images");
    mkdir("../Profiles/".$ID."/images/min");

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
    echo "open hours: ".$openhours."<br>"."<br>";

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
    $sql = "INSERT INTO `pr_agentures`(`ID`, `name`, `ico`, `dic`, `icdph`, `password`, `street`, `city`, `region`,
            `postcode`, `category`, `fb`, `ig`, `email`, `phone`, `web`, `conemail`, `openhours`, `bio`, `successes`) 
            VALUES (:ID, :name, :ico, :dic, :icdph, :password, :street, :city, :region, :postcode, :category, :fb, :ig,
            :email, :phone, :web, :conemail, :openhours, :bio, :successes)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":name" => $_POST['name'],
        ":ico" => $_POST['ico'],
        ":dic" => $_POST['dic'],
        ":icdph" => $_POST['icdph'],
        ":password" => Hash("sha256", $_POST['password']),
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":region" => $_POST['region'],
        ":postcode" => $_POST['postcode'],
        ":category" => $_POST['category'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":email" => $_POST['email'],
        ":conemail" => $_POST['conemail'],
        ":phone" => $_POST['phone'],
        ":openhours" => $openhours,
        ":bio" => $_POST['bio'],
        ":successes" => $success,
    ));

    redirectToProfile($ID, $_POST['email'], $_POST['password']);
}

function IDG() { //ID Generator.
    $ID = "";
    switch ($_REQUEST["type"]){
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

    if ($_REQUEST['type'] != "agenture")
    switch ($_REQUEST['gender']){
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
    else $ID .= "03";

    return $ID.generateRandomString(6);
}

function generateRandomString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function saveImages($ID) {

    mkdir("../Profiles/".$ID);
    mkdir("../Profiles/".$ID."/images");
    mkdir("../Profiles/".$ID."/images/min");
    mkdir("../Profiles/".$ID."/images/photos");
    mkdir("../Profiles/".$ID."/images/photobooks");
    mkdir("../Profiles/".$ID."/images/polaroids");
    mkdir("../Profiles/".$ID."/images/polaroidsX");
    mkdir("../Profiles/".$ID."/images/photos/min");
    mkdir("../Profiles/".$ID."/images/photobooks/min");
    mkdir("../Profiles/".$ID."/images/polaroids/min");
    mkdir("../Profiles/".$ID."/images/polaroidsX/min");

    //load json with crop demisions
    $cropDemisions = json_decode($_REQUEST['croppedImages']);
    $cropDemisions = $cropDemisions->main;

    echo "<h6>This is json: ".$_REQUEST['croppedImages']."</h6>";

    //save profile photo sep.
    $index = getIndexFromArrayObject($cropDemisions, 'p001');

    echo "<h6>Toto je index: ".$index."</h6>";

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

function saveCroppedImage($ID, $name, $x0, $y0, $x1, $y1) {
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

function saveRestImages($ID) {
    echo "size is: ".count($_FILES["photos"]['tmp_name']);
    echo "size is: ".count($_FILES["photobooks"]['tmp_name']);
    echo "size is: ".count($_FILES["polaroids"]);


for ($i = 0; $i < count($_FILES["photos"]); $i++) {
    $tmpFilePath = $_FILES["photos"]['tmp_name'][$i];

if ($tmpFilePath != "") {
    $name = generateRandomString(12);
    //Setup our new file path
    $ext = pathinfo($_FILES["photos"]['name'][$i], PATHINFO_EXTENSION);
    $newFilePath = "../Profiles/" . $ID . "/images/photos/" . $name . ".jpg";
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

function getIndexFromArrayObject($obj, $key) {

    for ($i = 0; $i <= count($obj); $i++) {
        if ($obj[$i]->name == $key) return $i;
    }

    return "null";
}

function redirectToProfile($ID, $mail, $pass) {
    header("Location: ../thank-you.php?ID=".$ID."&mail=".$mail."&pass=".$pass);
}