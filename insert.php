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
$sql = "INSERT INTO login (email,password)VALUES ('parul@gmail.com','123')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
?>

</body>
</html>