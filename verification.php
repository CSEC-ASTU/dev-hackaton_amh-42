
<?php
include('database/DBConnector.php');
$con = connect_db();
session_start();
$email = $_POST["email"];
$pass = $_POST["pass"];
$sql = "SELECT password, level FROM user WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$resultArray = array();
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$new_pass = $row['password'];
$level = $row['level'];
if ($new_pass == $pass) {
    if ($level == 'admin') {
        $_SESSION["user"] = $email;
        $_SESSION["role"] = 'admin';
        header('location:Admin.php');
    } else {
        $_SESSION["user"] = $email;
        $_SESSION["role"] = 'standard';
        header('location:Scoreboard.php?time=all');
    }
} else echo "Wrong Password";
