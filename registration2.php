<?php
session_start();

if(isset($_SESSION['name']) == true) {
  // User is logged in, so you can access their username
  $username = $_SESSION['name'];
  $mail= $_SESSION['email'];
  
 

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

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $tournament = $_POST["tournament_name"];
    $teamname = $_POST["team-name"];
    $ign = $_POST["Ingame-name"];
    $ingamerole = $_POST["Ingame-role"];

    $sql = "INSERT INTO registration (email, username, tournament_name, team_name, ign, ingame_role) VALUES ('$email', '$username', '$tournament', '$teamname', '$ign', '$ingamerole')";

    if ($conn->query($sql) === TRUE) {
        $message = "Registered Successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}}
else {
  // User is not logged in
  header("location: login.html");
 
 exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRATION</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #1a1a1a;
    }

    .signup-container {
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 350px;
      text-align: center;
      background-image: url('https://wallpapercave.com/wp/wp2694502.jpg');
      opacity: 0.9;
    }

    .signup-form h2 {
      margin-bottom: 20px;
      color: #00ffff;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #ff00ff;
    }

    .input-group input {
      width: calc(100% - 20px);
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #f2f2f2;
    }

    .button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #00ffff;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #ff00ff;
    }

    .footer-text {
      margin-top: 20px;
      color: #ff00ff;
      font-size: 14px;
    }

    .footer-text a {
      color: #00ffff;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('https://wallpapercave.com/wp/wp2694479.jpg');
      background-size: cover;
      opacity: 65;
    }
  </style>
  <script type="text/javascript">
    function showMessage(message) {
      alert(message);
    }
  </script>
</head>
<body>

<?php
if ($message != '') {
    echo "<script type='text/javascript'>showMessage('$message');</script>";
}
?>

<div class="signup-container">
  <form class="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Enter the details</h2>
    <div class="input-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="input-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
      <label for="tournament_name">Tournament name</label>
      <input type="text" id="tournament_name" name="tournament_name" required>
    </div>
    <div class="input-group">
      <label for="team-name">Team name</label>
      <input type="text" id="team-name" name="team-name" required>
    </div>
    <div class="input-group">
      <label for="Ingame-name">Ingame name</label>
      <input type="text" id="Ingame-name" name="Ingame-name" required>
    </div>
    <div class="input-group">
      <label for="Ingame-role">Ingame role</label>
      <input type="text" id="Ingame-role" name="Ingame-role" required>
    </div>
    <button type="submit" class="button">Submit</button>
    <p class="footer-text">All the Best <a href=""></a>.</p>
  </form>
</div>

</body>
</html>
