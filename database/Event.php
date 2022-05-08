<?php
//used to fetch event data

use LDAP\Result;

$host = "localhost";
$user = "root";
$password = "";
$database = "csec_astu";

function getData($table = 'event')
{
    global $host, $user, $password, $database;
    $con = mysqli_connect($host, $user, $password, $database);
    $sql = "SELECT * FROM $table;";

    $result = mysqli_query($con, $sql);
    $resultArray = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $resultArray[] = $row;
    }
    return $resultArray;
}

function newEvent($sql = "INSERT INTO event values(event_id = 1, event_title = 'Division 1', event_description = 'blah blah blah', event_image = 'w3images/wood.png', event_division = 'CPD', event_addDate = '2022-05-06')")
{
    global $host, $user, $password, $database;
    $con = mysqli_connect($host, $user, $password, $database);
    mysqli_query($con, $sql);
}

function getSpecificData($time)
{
    if ($time == 'last_week') {
        $lastWeek = date("Y-m-d", strtotime("-7 days"));
        $now = date("Y-m-d", strtotime("+1 day"));
    } elseif ($time == 'last_month') {
        $lastWeek = date("Y-m-d", strtotime("-60 days"));
        $now = date("Y-m-d", strtotime("-30 day"));
    } elseif ($time == 'this_month') {
        $lastWeek = date("Y-m-d", strtotime("-30 days"));
        $now = date("Y-m-d", strtotime("+1 day"));
    } else {
        $lastWeek = date("Y-m-d", strtotime("-7 days"));
        $now = date("Y-m-d", strtotime("+1 day"));
    }

    global $host, $user, $password, $database;
    $con = mysqli_connect($host, $user, $password, $database);
    $sql = "SELECT * FROM cpd_sb WHERE contest_Date >= '$lastWeek' AND contest_Date<= '$now' ";

    $result = mysqli_query($con, $sql);
    $resultArray = array();
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $resultArray[] = $row;
    }
    return $resultArray;
}
