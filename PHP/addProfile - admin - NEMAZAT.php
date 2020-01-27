<?php
require ("../../Libary/Weblibary.php");

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
        echo "Invalid type of user";
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
    $sql = "INSERT INTO `pr_actor` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `nationality`, `gender`, `date_of_birth`, `height`, `eyes`, `hair`, `interests`, `add_ons`, `talent`, `work`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :postcode, :region,
    :nationality, :gender, :date_of_birth, :height, :eyes, :hair, :interests, :add_ons, :talent, :pr_work, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['pr_name'],
        ":pr_surname" => $_POST['pr_surname'],
        ":password" => $_POST['password'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => $_POST['date_of_birth'],
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

    mkdir("../../Profiles/".$ID);
    mkdir("../../Profiles/".$ID."/Photos");
    mkdir("../../Profiles/".$ID."/Photobooks");
    mkdir("../../Profiles/".$ID."/Polaroids");
    mkdir("../../Profiles/".$ID."/profilePhoto");
    mkdir("../../Profiles/".$ID."/profilePhoto/min");

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
        $resizedPath = "../../Profiles/".$ID."/profilePhoto/min/".$_FILES['profilePhoto']['name'];
        imagepng($dst, $resizedPath);
        imagedestroy($src);
        imagedestroy($dst);
    }

    $total = count($_FILES['photos']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photos']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photos/".$_FILES['photos']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['photobooks']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photobooks']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photobooks/".$_FILES['photobooks']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['polaroids']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['polaroids']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Polaroids/".$_FILES['polaroids']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }



    header("Location: ".$_POST['RURL']);
}

function addCreative() {
    $ID = IDG();

    $dbh = dbConnectSafely();
    $sql = "INSERT INTO `pr_creative` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `category`, `web`, `fb`, `ig`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :postcode, :region,
    :category, :web, :fb, :ig, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['pr_name'],
        ":pr_surname" => $_POST['pr_surname'],
        ":password" => $_POST['password'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":category" => $_POST['category'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":bio" => $_POST['bio'],
    ));

    mkdir("../../Profiles/".$ID);
    mkdir("../../Profiles/".$ID."/Photos");
    mkdir("../../Profiles/".$ID."/Photobooks");
    mkdir("../../Profiles/".$ID."/Polaroids");
    mkdir("../../Profiles/".$ID."/profilePhoto");

    $tmpFilePath = $_FILES['profilePhoto']['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "../../Profiles/".$ID."/profilePhoto/".$_FILES['profilePhoto']['name'];
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$newFilePath." success</h6>";
        }
    }

    $total = count($_FILES['photos']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photos']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photos/".$_FILES['photos']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['photobooks']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photobooks']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photobooks/".$_FILES['photobooks']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['polaroids']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['polaroids']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Polaroids/".$_FILES['polaroids']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    header("Location: ".$_POST['RURL']);
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
        ":pr_name" => $_POST['pr_name'],
        ":pr_surname" => $_POST['pr_surname'],
        ":password" => $_POST['password'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => $_POST['date_of_birth'],
        ":height" => $_POST['height'],
        ":eyes" => $_POST['eyes'],
        ":hair" => $_POST['hair'],
        ":interests" => $interests,
        ":add_ons" => $addons,
        ":talent" => json_encode($talent, JSON_UNESCAPED_UNICODE),
        ":pr_work" => $_POST['work'],
        ":clothes_size" => $_POST['clothes_size'],
        ":shoes_size" => $_POST['shoes_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    mkdir("../../Profiles/".$ID);
    mkdir("../../Profiles/".$ID."/Photos");
    mkdir("../../Profiles/".$ID."/Photobooks");
    mkdir("../../Profiles/".$ID."/Polaroids");
    mkdir("../../Profiles/".$ID."/profilePhoto");

    $tmpFilePath = $_FILES['profilePhoto']['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "../../Profiles/".$ID."/profilePhoto/".$_FILES['profilePhoto']['name'];
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$tmpFilePath." success</h6>";
        }
    }

    $total = count($_FILES['photos']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photos']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photos/".$_FILES['photos']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['photobooks']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photobooks']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photobooks/".$_FILES['photobooks']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['polaroids']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['polaroids']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Polaroids/".$_FILES['polaroids']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    header("Location: ".$_POST['RURL']);
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
        ":pr_name" => $_POST['pr_name'],
        ":pr_surname" => $_POST['pr_surname'],
        ":password" => $_POST['password'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":nationality" => $_POST['nationality'],
        ":gender" => $_POST['gender'],
        ":date_of_birth" => $_POST['date_of_birth'],
        ":height" => $_POST['height'],
        ":eyes" => $_POST['eyes'],
        ":hair" => $_POST['hair'],
        ":interests" => $interests,
        ":add_ons" => $addons,
        ":talent" => json_encode($talent, JSON_UNESCAPED_UNICODE),
        ":pr_work" => $_POST['work'],
        ":clothes_size" => $_POST['clothes_size'],
        ":shoes_size" => $_POST['shoes_size'],
        ":proportions" => json_encode($proportions, JSON_UNESCAPED_UNICODE),
        ":bio" => $_POST['bio'],
    ));

    echo $dbh->errorCode();

    mkdir("../../Profiles/".$ID);
    mkdir("../../Profiles/".$ID."/Photos");
    mkdir("../../Profiles/".$ID."/Photobooks");
    mkdir("../../Profiles/".$ID."/Polaroids");
    mkdir("../../Profiles/".$ID."/profilePhoto");

    $tmpFilePath = $_FILES['profilePhoto']['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "../../Profiles/".$ID."/profilePhoto/".$_FILES['profilePhoto']['name'];
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$tmpFilePath." success</h6>";
        }
    }

    $total = count($_FILES['photos']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photos']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photos/".$_FILES['photos']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['photobooks']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photobooks']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photobooks/".$_FILES['photobooks']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['polaroids']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['polaroids']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Polaroids/".$_FILES['polaroids']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$tmpFilePath." success</h6>";
            }
        }
    }

    header("Location: ".$_POST['RURL']);
}

function addPhotographer() {
    $ID = IDG();

    $dbh = dbConnectSafely();
    $sql = "INSERT INTO `pr_foto` (`ID`, `name`, `surname`, `password`, `mail`, `phone`, `street`, `city`, `postcode`, `region`,
    `studio_street`, `studio_city`, `studio_postcode`, `studio_region`, `web`, `fb`, `ig`, `bio`) 
    VALUES (:ID, :pr_name, :pr_surname, :password, :mail, :phone, :street, :city, :postcode, :region,
    :studio_street, :studio_city, :studio_postcode, :studio_region, :web, :fb, :ig, :bio)";

    $sql = $dbh->prepare($sql);

    $sql->execute(array(
        ":ID" => $ID,
        ":pr_name" => $_POST['pr_name'],
        ":pr_surname" => $_POST['pr_surname'],
        ":password" => $_POST['password'],
        ":mail" => $_POST['mail'],
        ":phone" => $_POST['phone'],
        ":street" => $_POST['street'],
        ":city" => $_POST['city'],
        ":postcode" => $_POST['postcode'],
        ":region" => $_POST['region'],
        ":studio_street" => $_POST['studio_street'],
        ":studio_city" => $_POST['studio_city'],
        ":studio_postcode" => $_POST['studio_postcode'],
        ":studio_region" => $_POST['studio_region'],
        ":web" => $_POST['web'],
        ":fb" => $_POST['fb'],
        ":ig" => $_POST['ig'],
        ":bio" => $_POST['bio'],
    ));

    mkdir("../../Profiles/".$ID);
    mkdir("../../Profiles/".$ID."/Photos");
    mkdir("../../Profiles/".$ID."/Photobooks");
    mkdir("../../Profiles/".$ID."/Polaroids");
    mkdir("../../Profiles/".$ID."/profilePhoto");

    $tmpFilePath = $_FILES['profilePhoto']['tmp_name'];
    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $newFilePath = "../../Profiles/".$ID."/profilePhoto/".$_FILES['profilePhoto']['name'];
        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<h6>photo: ".$newFilePath." success</h6>";
        }
    }

    $total = count($_FILES['photos']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photos']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photos/".$_FILES['photos']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['photobooks']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['photobooks']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Photobooks/".$_FILES['photobooks']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    $total = count($_FILES['polaroids']['name']);
    for( $i=0 ; $i < $total ; $i++ ) {
        //Get the temp file path
        $tmpFilePath = $_FILES['polaroids']['tmp_name'][$i];
        //Make sure we have a file path
        if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "../../Profiles/".$ID."/Polaroids/".$_FILES['polaroids']['name'][$i];
            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<h6>photo: ".$newFilePath." success</h6>";
            }
        }
    }

    header("Location: ".$_POST['RURL']);
}

function addAgenture() {

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