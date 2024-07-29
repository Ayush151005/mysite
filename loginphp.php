<?php
session_start();

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
$un=$_POST["username"];
$pwd=$_POST["password"];
$sql = "SELECT *  FROM login ; ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  $valid_credentials = false;
  while($row = $result->fetch_assoc()) {
    if($row["username"]==$un && $row["pwd"] == $pwd){
      $_SESSION['email'] = $row['email'];
      $_SESSION['name']=$row['username'];
      $valid_credentials = true;
      header("Location: myprofile.php");
      exit();
    }
  }
  if (!$valid_credentials) {
    // Invalid username or password, redirect back to index.html with an alert
    echo "<script>alert('Invalid username or password');</script>";
    //header("location: loginpage1.html"); mam ya lawaris hai iska ghar nahi mil rha isko raah dikhayiye
    exit ();
   
  }
} else {
  echo "invalid";
}
$conn->close();
?>
