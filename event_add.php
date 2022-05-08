<?php

include('database/DBConnector.php');
$con = connect_db();
$title = $_POST['title'];
$description = $_POST['description'];
$image = "w3images/" . $_POST['image'];
$division = $_POST['division'];


$sql = "INSERT INTO event  (event_title,event_description,event_image,event_division) values('$title', '$description', '$image', '$division')";

if (mysqli_query($con, $sql)) echo "Successfully Inserted!!";
else echo "Failed";
