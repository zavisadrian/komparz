<?php
require ("../../Libary/Weblibary.php");

$ID = $_REQUEST['ID'];
$name = $_REQUEST['name'];

rename("../../Profiles/".$ID."/images/polaroidsX/".$name, "../../Profiles/".$ID."/images/polaroids/".$name);
if (rename("../../Profiles/".$ID."/images/polaroidsX/min/".$name, "../../Profiles/".$ID."/images/polaroids/min/".$name))
    echo "hotovo";
else echo "this is shit";