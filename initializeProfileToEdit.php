<?php
session_start();
$conn = dbConnect();

$sql = "SELECT * FROM `".$prefix."` WHERE `ID` = '".$_SESSION["userID"]."'";

$result = $conn->query($sql);

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
}

$photos = scandir("Profiles/".$ID."/images/Photos");
$photobooks = scandir("Profiles/".$ID."/images/Photobooks");
$polaroids = scandir("Profiles/".$ID."/images/Polaroids");