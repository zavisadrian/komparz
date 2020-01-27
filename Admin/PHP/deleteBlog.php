<?php
session_start();
if (isset($_SESSION['admin']) | 1) {
    include '../../Libary/Weblibary.php';
    $dbh = dbConnectSafely();
    $sql = "DELETE FROM `blog` WHERE `htmlContent` = :id";
    $sql = $dbh->prepare($sql);
    $sql->execute(array(
        ":id" => $_REQUEST['ID']
    ));
    if ($sql) {
        unlink("../../Blog/".$_REQUEST['ID']."/blog.html");
        unlink("../../Blog/".$_REQUEST['ID']."/blog.png");
        unlink("../../Blog/".$_REQUEST['ID']."/blog.jpg");
        rmdir("../../Blog/".$_REQUEST['ID']);
        header("Location: ../successMessage.php?message=Blog%20bol%20úspešne%20vymazaný.");
    }
} else header("Location: 404.php");