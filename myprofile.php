<?php
session_start();

if(isset($_SESSION['name']) == true) {
 // User is logged in, so you can access their username
 $username = $_SESSION['name'];
 $mail= $_SESSION['email'];
 
} else {
 // User is not logged in
 //header("location: login.html");
echo "do it again ";
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
      background-image: url("game2.jpeg");
    }

    header {
      background-color: #121212;
      color: #dddad8;
      padding: 10px;
      justify-content: center;
      
      display: flex;
   }
    header h1{
      
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
    .sm{
      display:flex;
    }
    .sm a{
      height: 50px;
      width: 50px;
      display: flex ;
      margin-left: 1em;
      position:relative;


    }
    
    .slideshow-container {
      position: relative;
      max-width: 1500px;
      margin: auto;
      overflow: hidden;
      height: 500px;
    }
    
    .slide {
      display: none;
    }
    
    .slide img {
      width: 100%;
    }
    
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      margin-top: -22px;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }
    
    .prev {
      left: 0;
      border-radius: 3px 0 0 3px;
      color: black;
    }
    
    .next {
      right: 0;
      border-radius: 3px 3px 0 0;
      color: black  ;
    }
    
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }
    
    .fade {
      animation: fade 1.5s;
    }
    
    @keyframes fade {
      from {opacity: 0.4}
      to {opacity: 1}
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
   
    <a href="profile.php"> <?php echo $username ?></a>
    <a href="logout.php">logout</a>
  </div>
</div>

<nav>
  <a href="index.html">Home</a>
  
  <a href="news.html">News</a>
  <a href="registration.php">Registration</a>

</nav>

<div class="slideshow-container">
  <div class="slide fade">
    <img src="img1.webp" alt="Image 1" >
  </div>
  <div class="slide fade">
    <img src="img2.avif" alt="Image 2" >
  </div>
  <div class="slide fade">
    <img src="img3.webp" alt="Image 3" >
  </div>
  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
  <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>

<script>let slideIndex = 1;
  showSlides(slideIndex);

  function changeSlide(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex-1].style.display = "block";  
  }

  // Automatic slideshow
  setInterval(() => {
    showSlides(slideIndex += 1);
  }, 2000); // Change image every 2 seconds
</script>



<footer>
  <p>&copy; 2024 BGMI Esports Gaming</p>
</footer>

</body>
</html>
