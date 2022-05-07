<?php
//used to fetch event data

use LDAP\Result;

function getData($table = 'event')
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "csec_astu";

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
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "csec_astu";
    $con = mysqli_connect($host, $user, $password, $database);
    mysqli_query($con, $sql);
}
