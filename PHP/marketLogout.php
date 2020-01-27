<?php
session_start();
unset($_SESSION['marketMail']);

//session_destroy();

if (isset($_REQUEST['delete'])) {
    header("Location: ../thank-you-delete-profile.php");
} else
    header("Location: ../marketplace.php");