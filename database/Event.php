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
