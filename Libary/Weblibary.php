<?php

const DB_HOST = "mysql80.websupport.sk";
const DB_USER = "komparztvtest";
const DB_PASS = "Prasavlese.9458";
const DB_DATABASE = "komparztvtest";

function sendMail($recipient, $subject, $message) {
    $from = "komparztv@upvision.sk";
    $headers = "From:" . $from;

    $semi_rand     = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $headers      .= "\nMIME-Version: 1.0\n"."Content-Type: text/html; charset=UTF-8;\n"." boundary=\"{$mime_boundary}\"";

    return mail($recipient,$subject, $message, $headers);
}

function sendAdminMail($recipient, $subject, $message) {

    $headers = "From: " . "komparztv@upvision.sk" . "\r\n";
    $headers .= "Reply-To: ". "komparztv@upvision.sk" . "\r\n";
    $headers .= "CC: ". $recipient ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    return mail($recipient, $subject, $message, $headers);
}

function dbConnect() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE, 3314);
    if ($conn->connect_error) {
        return $conn->connect_error;
    }
    mysqli_set_charset ($conn, "utf8");

    return $conn;
}

function dbConnectSafely() {
    $dbh = new PDO ("mysql:host=".DB_HOST.";port=3314;dbname=".DB_DATABASE.";charset=utf8", DB_USER, DB_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;
}

function rndString($length = 10) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}