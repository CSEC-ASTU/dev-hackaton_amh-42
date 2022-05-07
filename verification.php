
<?php
include('database/DBConnector.php');
$connection = connect_db();
echo $connection;

$email = $_POST["email"];
$pass = $_POST["pass"];
$sql = "SELECT password FROM user WHERE email = '$email'";
