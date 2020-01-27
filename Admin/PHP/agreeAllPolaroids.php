<?php
$ID = $_REQUEST['ID'];
$temp = scandir("../../Profiles/".$ID."/images/polaroidsX");

for ($n = 0; $n < count($temp); $n++) {
    rename("../../Profiles/".$ID."/images/polaroidsX/".$temp[$n], "../../Profiles/".$ID."/images/polaroids/".$temp[$n]);
    rename("../../Profiles/".$ID."/images/polaroidsX/min/".$temp[$n], "../../Profiles/".$ID."/images/polaroids/min/".$temp[$n]);
}

echo "good";