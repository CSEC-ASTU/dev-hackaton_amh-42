<?php
function connect_db()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "csec_astu";
    $con = mysqli_connect($host, $user, $password, $database);
    if ($con->connect_error) return "Fail" . $con->connect_error;
    return $con;
}
