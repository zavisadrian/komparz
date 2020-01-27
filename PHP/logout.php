<?php
session_start();
unset($_SESSION['userID']);
unset($_SESSION['marketMail']);
unset($_SESSION['marketMail']);

if (isset($_REQUEST['delete'])) {
    header("Location: ../thank-you-delete-profile.php");
} else
    header("Location: ./../");