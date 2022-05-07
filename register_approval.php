<?php
include('database/DBConnector.php');
$con = connect_db();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
