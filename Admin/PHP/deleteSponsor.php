<?php
if (isset($_SESSION['Admin']) | 1) {
    unlink("../sponsors/".$_REQUEST['ID']);
    echo "success -> ".$_REQUEST['ID'];
}