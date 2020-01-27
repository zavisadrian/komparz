<?php
session_start();
$ID = $_REQUEST['ID'];

if (strlen($ID) != 10) { echo "This is not safe. You were kicked"; die(); } //Die if somebody tries to write some injection into database

switch (substr($ID, 0, 2)){
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

$conn = dbConnect();

$sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$ID."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $name = $user['name'];
    $surname = $user['surname'];
    $mail = $user['mail'];
    $email = $user['email'];
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
    $category = $user['category'];
    $ico = $user['ico'];
    $dic = $user['dic'];
    $icdph = $user['icdph'];
    $conemail = $user['conemail'];
}

if ($_SESSION['userID'] != "") {
    switch (substr($_SESSION['userID'], 0, 2)){
        case "01":
            $prefix2 = "pr_actor";
            $kind = "Herci a komparzisti";
            $kind1 = " hercovi / komparzistovi";
            break;
        case "02":
            $prefix2 = "pr_creative";
            $kind = "Kreatívni profesionáli";
            $kind1 = " kreatívnom profesionálovi";
            break;
        case "03":
            $prefix2 = "pr_hostess";
            $kind = "Hostesky / promotéri";
            $kind1 = " hosteske / promotérovi";
            break;
        case "04":
            $prefix2 = "pr_model";
            $kind = "Modelka / model";
            $kind1 = " modelovi / modelke";
            break;
        case "05":
            $prefix2 = "pr_foto";
            $kind = "Fotograf";
            $kind1 = " fotografovi";
            break;
        case "06":
            $prefix2 = "pr_agentures";
            $kind = "Agentúra";
            $kind1 = " agentúre";
            break;
        default:
            echo "Invalid type of user. You were kicked";
            die();
    }
    $sql = "SELECT * FROM `".$prefix2."` WHERE `ID` = '".$_SESSION['userID']."'";
    $result = $conn->query($sql);
    while($rw = $result->fetch_assoc()){
        $logFollowing = $rw['following'];
    }
}

$sql = "UPDATE `".$prefix."` SET `views` = '".($views + 1)."' WHERE `ID` = '".$ID."'";
$conn->query($sql);

$photos = scandir("Profiles/".$ID."/images/photos");
$photobooks = scandir("Profiles/".$ID."/images/photobooks");
$polaroids = scandir("Profiles/".$ID."/images/polaroids");

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

$profileTotals = 70;

if (count($photos) > 0) $profileTotals += 5;
if (count($photobooks) > 0) $profileTotals += 5;
if (count($polaroids) > 0) $profileTotals += 5;
if (strlen($talent_languages) > 0) $profileTotals += 5;
if (strlen($talent_movement) > 0) $profileTotals += 5;
if (strlen($talent_creative) > 0) $profileTotals += 5;

echo "
<script>
$('head').append('<meta property=\"og:url\"           content=\"' + document.URL + '\" />');
$('head').append('<meta property=\"og:type\"          content=\"website\" />');
$('head').append('<meta property=\"og:title\"         content=\"Komparz.tv | ".$name." ".$surname."\" />');
$('head').append('<meta property=\"og:description\"   content=\"Zdielanie profilu Komparztv.\" />');
$('head').append('<meta property=\"og:image\"         content=\"http://www.komparztv.upvision.sk/Profiles/".$ID."/images/p001.jpg\"/>');

</script><div id=\"fb-root\"></div><script>
 (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
";