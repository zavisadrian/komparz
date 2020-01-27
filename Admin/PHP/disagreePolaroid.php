<?php
require ("../../Libary/Weblibary.php");

$path = $_REQUEST['path'];
$name = $_REQUEST['name'];

unlink("../".$path.$name);
if (unlink("../".$path."min/".$name))
    echo "success";
else
    echo "no success -> ";

if (file_exists("../".$path."min/".$name))
    echo "neexistuje";
else
    echo "existuje";