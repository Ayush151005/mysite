<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email=$_GET["email"];
$un=$_GET["username"];
$pwd=$_GET["password"];
$cpwd=$_GET["confirm-password"];
$sql = "insert into login values ('" . $email."','".$un."','".$pwd."','".$cpwd."')";

if ($conn->query($sql) == TRUE) {
  header("Location: loginpage1.html");
} else {
  echo "error";
}
$conn->close();
?>