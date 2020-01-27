<?php
$ID = $_REQUEST['ID'];
$temp = scandir("../../Profiles/".$ID."/images/polaroidsX");

for ($n = 0; $n < count($temp); $n++) {
    echo "toto mam -> "."../../Profiles/".$ID."/images/polaroidsX/".$temp[$n];
    unlink("../../Profiles/".$ID."/images/polaroidsX/".$temp[$n]);
    unlink("../../Profiles/".$ID."/images/polaroidsX/min/".$temp[$n]);
}

echo "good";