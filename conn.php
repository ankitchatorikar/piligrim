<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "mydb";
 
// Create connection
$conn = new mysqli($servername, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$username=$_POST['username'];
$password=$_POST['password'];

$a= "CREATE TABLE `member` (
    `mem_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    `fname` varchar(30) NOT NULL,
    `lname` varchar(30) NOT NULL,
    `address` varchar(100) NOT NULL,
    `contact` varchar(30) NOT NULL,
    `picture` varchar(100) NOT NULL,
    `gender` varchar(10) NOT NULL,
    PRIMARY KEY (`mem_id`)
  )";
$conn->query($a);

$sq="INSERT INTO member(fname, lname, gender, address, contact,username, password)
VALUES('$fname', '$lname', '$gender', '$address', '$contact','$username', '$password')";
$conn->query($sq);

header("location:index.php?remarks=success");
?>