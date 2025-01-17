<?php
session_start();

if(isset($_SESSION['name']) == true) {
 // User is logged in, so you can access their username
 $username = $_SESSION['name'];
 $mail= $_SESSION['email'];
 
} else {
 // User is not logged in
 header("location: loginpage1.html");

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
      background-color: #1d1c1c;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #444;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
    }

    nav a:hover {
      background-color: #555;
    }

    section {
      padding: 20px;
    }

    .news {
      background-color: #f2f2f2;
      padding: 20px;
      margin-bottom: 20px;
    }

    .points-table {
      background-color: #f2f2f2;
      padding: 20px;
      margin-bottom: 20px;
    }

    .ongoing-tournaments {
      background-color: #f2f2f2;
      padding: 20px;
    }

    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    
    main {
      padding: 20px;
    }

   

    footer {
      background-color: rgba(9, 165, 232, 0.8);
      color: #161616;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    /* Modal Styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      text-align: center;
      border-radius: 10px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    .modal button {
      background-color: #09a5e8;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .modal button:hover {
      background-color: #c994e0;
    }
    .card{
      height: 30em;
      width: 22em;
      background-color: white;
margin:4em;
border-radius: 15px;
box-shadow: 0 0 10px white;
position: relative;
    }
   
     .img img{
      height: 12em;
      width: 20em;
      margin: 1em;
      margin-bottom: 0;

    }

    
    .text{
      color: #161616;
      width: 20em;
      height: 12em;
      justify-content: center;
      text-align: left;
      margin-left: 2em;
      font-size: larges;
      font-weight:bold;

    } 
    .btn{
      margin-left: 13em;

    }
    .btn button{
      padding: 1em;
      padding-left: 2em;
      padding-right: 2em;
      border-radius: 20px;
      background-color: #161616;
      color: #fff;
      box-shadow:0 0 10px rgb(238, 154, 10);

    }
    .btn button:hover{
      background-color: aquamarine;
      color: #161616;
      transition: 0.3s ease-in;
      font-size: 13.5px;
    }
    .temp{
      height: 100%;
      width: 100%;
      display: flex;
      
      
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
    
  </style>
</head>
<body>

<header>
  <h1>BGMI Esports Gaming</h1>
</header>
<div class="dropdown" style="float:left;"> <!-- Adjusted float to left -->
  <div class="menu-bar">
    <span>&#8286;&#8286;&#8286;</span>
  </div>
  <div class="dropdown-content">
    <a href="profile.php"><?php echo $username ?></a>
    <a href="logout.php">logout</a>
  </div>

</div>

<nav>
  <a href="myprofile.php">Home</a>
  
  <a href="news.php">News</a>
  <a href="registration.php">Registration</a>
</nav>

<main>
  <section class="temp">
    <div class="card">
      <div class="img">
        <img src="bmps.png" alt="">
      </div>
      <div class="text">
        <h2>BMPS 2K23</h2>
        <span>DETAILS : <br><br> Winner: TEAM SOUL <br> Prize Pool: 1cr <br>MVP :SoulxGoblin <br> For more details click the button given below..</span>

      </div>
      <div class="btn">
       <a href="https://www.news18.com/news/sports/team-soul-crowned-bmps-2022-champions-after-dominating-grand-finals-5361115.html"> <button> More Details </button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgis.jpeg" alt="">
      </div>
      <div class="text">
        <h2>BGIS 2K23</h2>
        <span>DETAILS: <br><br>Winner: TEAM GLADIATORS <br>Prize Pool: 2cr <br>MVP: GDRxDeltaPG <br>  For more details click the button given below..</span>

      </div>
      <div class="btn">
       <a href="https://www.sportskeeda.com/bgmi/bgis-2023-grand-finals-winners-mvp-prize-pool-distribution-special-awards"> <button> More Details</button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgis2021.avif" alt="">
      </div>
      <div class="text">
        <h2>BGIS 2K21</h2>
        <span>DETAILS: <br><br> Winner: SKYLIGHT GAMING <br>Prize Pool : 1cr<br>MVP: GodlxNeyo <br>For more details click the button given below..</span>

      </div>
      <div class="btn">
       <a href="https://liquipedia.net/pubgmobile/Battlegrounds_Mobile_India_Series/2021"> <button>More Details </button></a>
      </div>
    </div>

    
    
  












<footer>
  <p>&copy; 2024 BGMI Esports Gaming</p>
</footer>

</body>
</html>
