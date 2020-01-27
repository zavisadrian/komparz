<?php
include "../../Libary/Weblibary.php";
include "countFilteredUsers.php";

session_start();
/*
 * 0 - komparisti
 * 1 - herci
 * 2 - hostesky a promoteri
 * 3 - modeli
 * 4 - agenturi
 * 5 - fotografi
 * 6 - kreativny profesionali
 */

$type = $_REQUEST["type"];
$language = $_REQUEST['language'];

$diagnostic = $type[0].":".$type[1].":".$type[2].":".$type[3].":".$type[4].":".$type[5].":".$type[6];

$typeAr = array();
if ($type[0] == "true" || $type[1] == "true")
    array_push($typeAr, "`pr_actor`");
if ($type[2] == "true")
    array_push($typeAr, "`pr_hostess`");
if ($type[3] == "true")
    array_push($typeAr, "`pr_model`");
if ($type[4] == "true")
    array_push($typeAr, "`pr_agentures`");
if ($type[5] == "true")
    array_push($typeAr, "`pr_foto`");
if ($type[6] == "true")
    array_push($typeAr, "`pr_creative`");

if (empty($typeAr))
    array_push($typeAr, "`pr_actor`", "`pr_hostess`", "`pr_model`", "`pr_agentures`", "`pr_foto`", "`pr_creative`");

if ($typeAr[0] == "`pr_actor`" && $type[0] == "true" && $type[1] == "true")
    $actorEnd = "";
elseif ($typeAr[0] == "`pr_actor`" && $type[0] == "true")
    $actorEnd = " AND `interests` LIKE \"%herectvo%\"";
elseif ($typeAr[0] == "`pr_actor`" && $type[1] == "true")
    $actorEnd = " AND `interests` LIKE \"%komparz%\"";

$conn = dbConnect();

$SQLC = SQLC();

if ($SQLC == "WHERE ") $SQLC = "WHERE 1";

$res = array();

array_push($res, 0);

for ($i = 0; $i < count($typeAr); $i++) {
    $sql = "SELECT * FROM "; //add country

    if ($typeAr[$i] == "`pr_actor`")
        $sql .= $typeAr[$i]. " ". $SQLC. $actorEnd;
    else
        $sql .= $typeAr[$i]. " ". $SQLC;

    $result = $conn->query($sql);

    if ($result) {
        while ($user = $result->fetch_assoc()) {

            //check other validations
            $pass = true;

            if($language != "") {
                $languages = json_decode($user['talent'])->languages;
                if (strpos($languages, $language) !== false) {
                    $pass = true;
                } else $pass = false;
            }

            //if everything is alright, add row to array
            if ($pass == true) {
                $obj = new stdClass();
                $obj->ID = $user['ID'];
                $obj->name = $user['name'];
                $obj->surname = $user['surname'];
                $obj->city = $user['city'];
                if ($user['date_of_birth'])
                    $obj->dob = getAge($user['date_of_birth']);
                else
                    $obj->dob = "none";
                $imagepath = "Profiles/".$user['ID']."/images/min/p001.jpg";
                $obj->imgPath = $imagepath;

                array_push($res, $obj);
            }
        }
    }

}

$res[0] = count($res);

if ($_REQUEST["function"] == "count")
    echo count($res) - 1;
elseif ($_REQUEST["function"] == "result") {

    $_SESSION['result'] = $res;
    echo json_encode($res, JSON_UNESCAPED_UNICODE);

} elseif ($_REQUEST['function'] == "npage") {

    echo json_encode($_SESSION['result'], JSON_UNESCAPED_UNICODE);

}

die();

function getAge($bithdayDate) {
    $date = new DateTime($bithdayDate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}