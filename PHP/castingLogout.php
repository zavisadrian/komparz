<?php
session_start();
unset($_SESSION['castingMail']);

//session_destroy();

if (isset($_REQUEST['delete'])) {
    header("Location: ../thank-you-delete-profile.php");
} else
    header("Location: ../castings.php");