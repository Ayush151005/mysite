<?php
session_start();

if(isset($_SESSION['name']) && isset($_SESSION['email'])) {
    // User is logged in, so you can access their username
    $session_username = $_SESSION['name'];
    $mail = $_SESSION['email'];

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "gaming";

    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM registration WHERE email = '$mail'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $tournament = $row['tournament_name'];
            $tname = $row['team_name'];
            $ign = $row['ign'];
            $igr = $row['ingame_role'];
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();

} else {
    // User is not logged in
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGMI Esports Gaming</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
        }

        header {
            background-color: #121212;
            color: #dddad8;
            padding: 10px;
            justify-content: center;
            display: flex;
        }
        header h1 {
            margin-left: 38rem;
            margin-right: 10em;
        }

        nav {
            background-color: #0f0e0e;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #eeebeb;
            text-decoration: none;
            padding: 10px;
        }

        nav a:hover {
            background-color: #e25c08;
        }

        section {
            padding: 20px;
        }

        .news {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #090909;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Added styles for the menu bar */
        .menu-bar {
            background-color: #444;
            color: #e6dcdc;
            text-align: left;
            padding: 10px;
        }

        .menu-bar a {
            color: #d5d2d2;
            text-decoration: none;
            padding: 10px;
        }

        .menu-bar a:hover {
            background-color: #db5c0c;
        }

        /* Dropdown menu styles */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-right: 20px; /* Adjusted margin */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #1d1c1c;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: #eae5e5;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #d95e0c;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .sm {
            display: flex;
        }

        .sm a {
            height: 50px;
            width: 50px;
            display: flex;
            margin-left: 1em;
            position: relative;
        }

        .history {
            height: 100%;
            width: 100%;
            display: flex;
            margin-left: 2em;
        }

        .data {
            height: 13em;
            width: 20em;
            background-color: white;
            margin: 5em;
            left: -20em;
            border-radius: 15px;
            box-shadow: 0 0 10px white;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .data h2 {
            color: black;
            justify-content: center;
            text-align: center;
        }

        .data2 {
            color: #161616;
            width: 20em;
            height: 12em;
            justify-content: center;
            text-align: left;
            margin-left: 1em;
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <h1>BGMI Esports Gaming</h1>
    <div class="sm"> 
        <a href="https://www.facebook.com/BattlegroundsMobileIN/">
            <img src="fb.png.png" alt="">
        </a> 
        <a href="https://www.instagram.com/battlegroundsmobilein_official/">
            <img src="insta.png.png" alt="">
        </a> 
        <a href="https://www.youtube.com/channel/UCe31NPEeRGO0hcznx6Tdb-g">
            <img src="yt.png.png" alt="" height="70px">
        </a> 
    </div>
</header>

<!-- Added dropdown menu -->
<div class="dropdown" style="float:left;"> <!-- Adjusted float to left -->
    <div class="menu-bar">
        <span>&#8286;&#8286;&#8286;</span>
    </div>
    <div class="dropdown-content">
        <a href="profile.php"> <?php echo $session_username ?></a>
        <a href="logout.php">logout</a>
    </div>
</div>

<nav>
    <a href="myprofile.php">Home</a>
    <a href="news.php">News</a>
    <a href="registration.php">Registration</a>
</nav>
<section class="history">
    <h1>Registered Tournament</h1>
    <div class="data">
        <h2><?php echo $tournament ?></h2>
        <div class="data2">
            Team Name: <?php echo $tname ?><br>
            Ingame Name: <?php echo $ign ?><br>
            Ingame Role: <?php echo $igr ?><br>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 BGMI Esports Gaming</p>
</footer>

</body>
</html>
