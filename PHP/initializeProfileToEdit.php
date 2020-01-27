<?php
session_start();
$conn = dbConnect();

if (($_SESSION['Admin'] == "Admin" | 1)  & $_SESSION['userID'] == "") { $_SESSION['userID'] = $_REQUEST['ID'];  }

if (($_SESSION['Admin'] != "Admin" | 0) & $_SESSION['userID'] == "") {
    header("Location: 404.php");
}

switch (substr($_SESSION["userID"], 0, 2)){
    case "01":
        $prefix = "pr_actor";
        $kind = "Herci a komparzisti";
        $kind1 = " hercovi / komparzistovi";
        break;
    case "02":
        $prefix = "pr_creative";
        $kind = "Kreatívni profesionáli";
        $kind1 = " kreatívnom profesionálovi";
        break;
    case "03":
        $prefix = "pr_hostess";
        $kind = "Hostesky / promotéri";
        $kind1 = " hosteske / promotérovi";
        break;
    case "04":
        $prefix = "pr_model";
        $kind = "Modelka / model";
        $kind1 = " modelovi / modelke";
        break;
    case "05":
        $prefix = "pr_foto";
        $kind = "Fotograf";
        $kind1 = " fotografovi";
        break;
    case "06":
        $prefix = "pr_agentures";
        $kind = "Agentúra";
        $kind1 = " agentúre";
        break;
    default:
        echo "Invalid type of user. You were kicked";
        die();
}

$sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$_SESSION["userID"]."'";

$result = $conn->query($sql);

if ((($_SESSION['Admin'] == "Admin" | 1)  & $_SESSION['userID'] == "")) {
    $ID = $_REQUEST["ID"];
} else {
    $ID = $_SESSION["userID"];
}

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $name = $user['name'];
    $surname = $user['surname'];
    $mail = $user['mail'];
    $phone = $user['phone'];
    $street = $user['street'];
    $city = $user['city'];
    $postcode = $user['postcode'];
    $region = $user['region'];
    $studio_street = $user['studio_street'];
    $studio_city = $user['studio_city'];
    $studio_postcode = $user['studio_postcode'];
    $studio_region = $user['studio_region'];
    $nationality = $user['nationality'];
    $gender = $user['gender'];
    $date_of_birth = $user['date_of_birth'];
    $height = $user['height'];
    $eyes = $user['eyes'];
    $hair = $user['hair'];
    $work = $user['work'];
    $clothes_size = $user['clothes_size'];
    $shoes_size = $user['shoes_size'];
    $interests = substr($user['interests'], 0, strlen($user['interests']) - 2);
    $add_ons = substr($user['add_ons'], 0, strlen($user['add_ons']) - 2);
    $talent_creative = substr(json_decode($user['talent'])->creative, 0, strlen(json_decode($user['talent'])->creative) - 2);
    $talent_movement = substr(json_decode($user['talent'])->movement, 0, strlen(json_decode($user['talent'])->movement) - 2);
    $talent_languages = substr(json_decode($user['talent'])->languages, 0, strlen(json_decode($user['talent'])->languages) - 2);
    $proportions_breast = json_decode($user['proportions'])->breast;
    $proportions_waist = json_decode($user['proportions'])->waist;
    $proportions_hips = json_decode($user['proportions'])->hips;
    $category = $user['category'];
    $web = $user['web'];
    $ig = $user['ig'];
    $fb = $user['fb'];
    $bio = $user['bio'];
    $views = $user['views'];
    $lastLog = $user['lastLog'];
    $followers = $user['followers'];
    $following = $user['following'];
    $successes = json_decode($user['successes']);
    $openhours = json_decode($user['openhours']);
    $opendays = $openhours;
    $category = $user['category'];
    $ico = $user['ico'];
    $dic = $user['dic'];
    $icdph = $user['icdph'];
    $conemail = $user['conemail'];
} else header("Location: ./");

if ((($_SESSION['Admin'] == "Admin" | 1)  & $_SESSION['userID'] == "")) {
    $photos = scandir("../../Profiles/".$ID."/images/photos");
    $photobooks = scandir("../../Profiles/".$ID."/images/photobooks");
    $polaroids = scandir("../../Profiles/".$ID."/images/polaroids");
} else {
    $photos = scandir("Profiles/".$ID."/images/photos");
    $photobooks = scandir("Profiles/".$ID."/images/photobooks");
    $polaroids = scandir("Profiles/".$ID."/images/polaroids");
}

for ($i = 0; $i < count($openhours); $i++) {
    $opendays .= $openhours[$i]->day;
}

for ($i = 0; $i < count($photos); $i++) {
    if (strlen($photos[$i]) < 8) unset($photos[$i]);
}
$photos = array_values($photos);
unset($photos[count($photos) - 1]);

for ($i = 0; $i < count($photobooks); $i++) {
    if (strlen($photobooks[$i]) < 5) unset($photobooks[$i]);
}
$photobooks = array_values($photobooks);
unset($photobooks[count($photobooks) - 1]);

for ($i = 0; $i < count($polaroids); $i++) {
    if (strlen($polaroids[$i]) < 5) unset($polaroids[$i]);
}
$polaroids = array_values($polaroids);
unset($polaroids[count($polaroids) - 1]);