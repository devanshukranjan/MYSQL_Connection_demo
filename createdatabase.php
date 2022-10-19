<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$user ='root';
$pass ='';
// $db='mydb1';
//create connection
$con =  mysqli_connect('localhost', $user, $pass) or
    die("Connection failed: " . mysqli_connect_error());

echo "Connected successfully";
// Create database
$sql = "CREATE DATABASE aaa";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($con);
}



?>

</body>
</html>