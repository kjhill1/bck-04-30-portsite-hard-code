<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link rel="stylesheet" href="css/style-test.css"> 
  <!-- <script src="js/script-test.js"></script> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
  

  <header class="header">
    <div class="nav-container">
        <nav class="nav">
            <ul class="nav--ul__one">
                <li class="nav-link"><a href="#">Home</a></li>
                <li class="nav-link"><a href="work.html">Work</a></li>
                <li class="nav-link"><a href="contact.html">Contact</a></li>
                <li class="nav-link"><a href="about.html">About</a></li>
            </ul>
        
        </nav>
        <span class="hamburger-menu">menu</span>
<script>
const hamburgerMenu = document.querySelector(".hamburger-menu");
  const nav = document.querySelector(".nav");
  
  hamburgerMenu.addEventListener("click", () => {
      nav.classList.toggle("active")
  });</script>
 
    </div>
</header>