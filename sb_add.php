<?php

include('database/DBConnector.php');
$con = connect_db();
$week = $_POST['week'];
$division = $_POST['division'];
$image = "w3images/" . $_POST['image'];
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];


$sql = "INSERT INTO cpd_sb  (contest_week,contest_division,contest_image,contest_1st,contest_2nd,contest_3rd) values('$week', '$division', '$image', '$first', '$second', '$third')";

if (mysqli_query($con, $sql)) echo "Successfully Inserted!!";
else echo "Failed";
