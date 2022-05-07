
<?php
include('database/DBConnector.php');
$con = connect_db();

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
        echo 'Successfully Logged in <br><a href="Admin.php">Admin Dashboard</a><br><a href="scoreboard.php">Main Page</a>';
    } else {
        echo 'Successfully Logged in <a href="Scoreboard.php">Click Here</a>';
    }
} else echo "Wrong Password";
