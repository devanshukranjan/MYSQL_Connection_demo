<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$user ='root';
$pass ='';
$db='aaa' ;
//create connection
$con =  mysqli_connect('localhost', $user, $pass,$db) or
    die("Connection failed: " . mysqli_connect_error());

echo "Connected successfully";
// sql to create table   */

$sql = "CREATE TABLE login (email varchar(10) ,password varchar(30))";

if (mysqli_query($con, $sql)) {
    echo "Table login created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}


mysqli_close($con);



?>

</body>
</html>