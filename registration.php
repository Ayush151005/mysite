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
      background-color:#161616;
      background-size: cover;
      color: #fff;

    }

    header {
      background-color: rgba(9, 165, 232, 0.8);
      color: #2a2726;
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: rgba(201, 148, 224, 0.8);
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      transition: background-color 0.3s ease;
    }

    nav a:hover {
      background-color: rgba(8, 224, 228, 0.8);
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
  <a href="registration.html" id="registrationLink">Registration</a>
</nav>

<main>
  <section class="temp">
    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>STAR CHAMPIONSHIP</h2>
        <span>Details: <br><br> Date: 5th june 2k24 <br> Time: 3:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>STAR League</h2>
        <span>Details: <br><br> Date: 10th june 2k24 <br> Time: 3:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>PMCO</h2>
        <span>Details: <br><br> Date: 10th june 2k24 <br> Time: 6:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

    
    
  </section>
  <section class="temp">
    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>OPEN CHAMPIONSHIP</h2>
        <span>Details: <br><br> Date: 18th june 2k24 <br> Time: 9:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>WORLD LEAGUE</h2>
        <span>Details: <br><br> Date: 20th june 2k24 <br> Time: 4:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

    <div class="card">
      <div class="img">
        <img src="bgmi.avif" alt="">
      </div>
      <div class="text">
        <h2>MOBILE CHAMPIONSHIP</h2>
        <span>Details: <br><br> Date: 19th june 2k24 <br> Time: 3:00 pm <br> Entry Fee: 0/- <br> Prize Pool: 1,00,000rs</span>

      </div>
      <div class="btn">
       <a href="registration2.php"> <button> Register Now </button></a>
      </div>
    </div>

  </section>
<h3> LOGIN TO GET REGISTER FORM   <a href="loginpage1.html">LOGIN</a></h3>

<!-- The Modal -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Please log in to register for the competition.</p>
    <button onclick="window.location.href='login.html'">Log In</button>
  </div>
</div>

<footer>
  <p>&copy; 2024 BGMI Esports Gaming</p>
</footer>



</body>
</html>
