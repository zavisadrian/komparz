<?php
session_start();
unset($_SESSION['casting_edit_email']);
unset($_SESSION['casting_edit_password']);
unset($_SESSION['casting_edit_allow']);

header("Location: ../castings.php");