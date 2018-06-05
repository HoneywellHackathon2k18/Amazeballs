﻿<!DOCTYPE html>
<html>
<title>Food Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

  <img background="lemon.jpg">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:20%;min-width:200px" id="mySidebar">
  <a href="honeywell.html" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Cusines</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16  ">
      <h2 style="text-align:center " >Food Gallery</h2>

    </div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="mango.jpg" alt="Sandwich" height="200" width="300">
      <h3>Mangoes</h3><p>50 Rs/kg</p>
      
    </div>
    <div class="w3-quarter">
      <a href="capsicum.php"><img src="capsicum.jpg" alt="Steak" height="200" width="300"></a>
      <h3>Capsicum</h3>
      <p>60 Rs/kg</p>
    </div>
    <div class="w3-quarter">
      <a href="apple.php"><img src="apple.jpg" alt="Cherries" height="200" width="300"></a>
      <h3>Apples</h3>
      <p>70 Rs/kg</p>
      
    </div>
    <div class="w3-quarter">
      <a href="grapes.php"><img src="grapes.jpg" alt="Pasta and Wine" height="200" width="300"></a>
      <h3>Grapes</h3>
      <p>300 Rs/kg</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="ferrerorocher.php"><img src="ferrerorocher.jpg" alt="Popsicle" height="200" width="300" ></a>
      <h3>Ferrerorocher</h3>
      <p>700 Rs/kg</p>
    </div>

     <div class="w3-quarter">
      <a href="banana.php"><img src="banana.jpg" alt="Sandwich" height="200" width="300" ></a>
      <h3>Banana</h3>
      <p>Rs 60/kg</p>
    </div>

    <div class="w3-quarter">
      <img src="lichi.jpg" alt="Croissant" height="200" width="300">
      <h3>Lichies</h3>
      <p>200 Rs/kg</p>
    </div>

  <div class="w3-quarter w3-right">
      <img src="macarons.jpg" alt="Sandwich" height="200" width="300" >
      <h3>Macarons</h3>
      <p>Rs 170/kg</p>
    </div>
  </div>
  <div class="w3-red w3-xlarge"> <i><b><center>CHOOSE YOUR OWN TASTE</center></b></i></p></div>
</div>


  
    
  <!-- Pagination -->
  <
  <hr id="about">

  <!-- About Section -->
  
  <!-- Footer -->
  

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
