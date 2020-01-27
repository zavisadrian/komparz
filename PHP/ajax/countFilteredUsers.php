<?php
function SQLC() {

    $gender = $_REQUEST['gender'];
    $region = $_REQUEST['region'];
    $nationality = $_REQUEST['nationality'];
    $heightf = $_REQUEST['heightf'];
    $heightt = $_REQUEST['heightt'];
    $agef = $_REQUEST['agef'];
    $aget = $_REQUEST['aget'];
    $type = $_REQUEST['type'];

//Advanced search

    $boobsf = $_REQUEST['boobsf'];
    $boobst = $_REQUEST['boobst'];
    $confSizef = $_REQUEST['confSizef'];
    $confSizet = $_REQUEST['confSizet'];
    $shoesSizef = $_REQUEST['shoesSizef'];
    $shoesSizet = $_REQUEST['shoesSizet'];
    $eyes = $_REQUEST['eyes'];
    $hair = $_REQUEST['hair'];
    $language = $_REQUEST['language'];

//SQL build:

    $conn = dbConnect();

    $filterPassed = false;

    $SQLC = "WHERE "; //creating sql-conditions string

    if ($gender != "") {
        $SQLC .= "`gender` = '".$gender."' ";
        $filterPassed = true;
    }

    if ($region != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`region` = '".$region."' ";
        $filterPassed = true;
    }

    if ($nationality != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`nationality` = '".$nationality."' ";
        $filterPassed = true;
    }

    if ($heightf != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`height` > '".$heightf."' ";
        $filterPassed = true;
    }

    if ($heightt != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`height` < '".$heightt."' ";
        $filterPassed = true;
    }

    if ($agef != "") {
        $agef = date('Y-m-d', strtotime("-".$agef." years"));
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`date_of_birth` < '".$agef."' ";
        $filterPassed = true;
    }

    if ($aget != "") {
        $aget = date('Y-m-d', strtotime("-".$aget." years"));
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`date_of_birth` > '".$aget."' ";
        $filterPassed = true;
    }

    if ($confSizef != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`clothes_size` > '".$confSizef."' ";
        $filterPassed = true;
    }

    if ($confSizet != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`clothes_size` < '".$confSizet."' ";
        $filterPassed = true;
    }

    if ($shoesSizef != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`shoes_size` > '".$shoesSizef."' ";
        $filterPassed = true;
    }

    if ($shoesSizet != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`shoes_size` < '".$shoesSizet."' ";
        $filterPassed = true;
    }

    if ($eyes != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`eyes` = '".$eyes."' ";
        $filterPassed = true;
    }

    if ($hair != "") {
        if ($filterPassed) $SQLC .= " AND ";
        $SQLC .= "`hair` = '".$hair."' ";
        $filterPassed = true;
    }

    return $SQLC;
}