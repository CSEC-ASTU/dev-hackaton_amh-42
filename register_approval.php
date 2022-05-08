<?php
include('database/DBConnector.php');
$con = connect_db();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$image = $_POST['image'];
$dev = 0;
$cpd = 0;
$cbd = 0;
if (in_array("dev", $_POST)) $dev = 1;
if (in_array("cpd", $_POST)) $cpd = 2;
if (in_array("cbd", $_POST)) $cbd = 3;
$sql = "INSERT INTO user  (full_name,email,password,user_image) values('$name', '$email', '$pass', '$image')";
if (mysqli_query($con, $sql)) echo "Successfully Inserted!!";
else echo "Failed";
if ($dev != 0) {
}
for ($i = 0; $i < 3; $i++) {
    if ($i == 0) {
        $div = $dev;
    } elseif ($i == 1) {
        $div = $cpd;
    } else {
        $div = $cbd;
    }
    if ($div == 0) continue;
    $sql2 = "INSERT INTO division_members  (full_name,division_id) values('$name', '$div')";
    if (mysqli_query($con, $sql2)) header('location:login.php');
    else echo "Failed" . mysqli_query($con, $sql2);
}
