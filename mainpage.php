<!DOCTYPE html>
<html>
<title>Amazeballs</title>
<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style >
.wrapper {
    text-align: center;
}
.checked {
    color: orange;
}

.button {
    position: absolute;
    top: 50%;
}
.left{
  flex: auto;
  float:left;

  margin-left: 10px;
  width:400px;
  margin-top: 20px;
}
.outer{
  display: flex;
}
.right{
  position: absolute;
  right:420px;
  flex:auto;
  width:600px;
  margin-top: 20px;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  position: absolute;
  right: 0px;
  top:0px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;


}
.fa-fa-search{
  height:45px !important;
}
.topnav{
  height:60px;
}
li{
  list-style-type: none;
}

.topnav .search-container button:hover {
  background: #ccc;
}
.search{
  position: absolute;
  right: 300px;
  top:5p
}
.topnav{
  padding: 10px;
}
</style>
</head>
<style>
  body{
    width: auto;
  }
  #page1{
  overflow-x: scroll;
    width: auto;
    white-space: nowrap; 
  }
  
  }
  </style>
<style>
.mySlides {display:none}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px;overflow-y:hidden;overflow-x: scroll;width: auto;white-space: nowrap">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>AMAZEBALLS</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-red" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Daily and Health care </a>
    <a href="#" class="w3-bar-item w3-button">Festival</a>
    <a href="Gadgets.php" class="w3-bar-item w3-button">Gadgets and electronics</a>
    <a href="food.php" class="w3-bar-item w3-button">Grocesery</a>
    <a href="slideshow.php" class="w3-bar-item w3-button">Clothings</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">AMAZEBALLS</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <div class="w3-bar w3-light-grey">
    <a href="account.php" class="w3-bar-item w3-button">Accounts</a>
    <a href="#" class="w3-bar-item w3-button">Orders</a>
    <a href="reports.php" class="w3-bar-item w3-button">Reports</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button">More</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
      </div>
        <div class="search-container">
    <form action="/action_page.php">
    <input   type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
  </div>
    </div>
  </div>
  </header>
  <div>
    <br><br>
    <div>


  


  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="sakshiii.jpg" alt="fruits" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New Products</h1>
      <h1 class="w3-hide-large w3-hide-medium">New Products</h1>
      <h1 class="w3-hide-small">COLLECTION 2018</h1>
      
    </div>
  </div>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<style>
.checked {
    color: orange;
}
</style>
  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container mySlides">
        <img src="lantern.jpg" height="200" width="200" >
        <p>Festival Products<br><b>250 Rs</b></p>7
      </div>
    </div>
    
      <div class="w3-container">
        <img src="10.jpg" height="200" width="200">
    
    </div>
        <p>Electronics Products<br><b>2500 Rs</b></p>
      </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="images.jpg" height="200" width="200">
          <div class="w3-display-middle w3-display-hover">
          </div>
        </div>
        <p>Health Products<br><b>900Rs</b></p>
      </div>


      <div class="w3-container">
        <img src="69709789-clothes-wallpapers.jpg" height="200" width="200">
		<div class="w3-display-middle w3-display-hover">
		<button class="w3-button w3-black" onClick="document.location.href='apple.php'">Buy now <i class="fa fa-shopping-cart"></i></button>
		</div>
        <p>Clothings<br><b>500Rs</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="meyve_0012-full.jpg" height="200" width="200">
		<button class="w3-display-middle w3-display-hover w3-button w3-black" onClick="document.location.href='apple.php'">Buy now <i class="fa fa-shopping-cart"></i></button>
        <p>Fruits and Vegetables<br>1500Rs</b></p>
      </div>

      
	  <div class="w3-container">
        <div class="w3-display-container">
          <img src="home-decor.jpg" height="200" width="200">
          
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onClick="document.location.href='apple.php'">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Home Decoratives<br><b class="w3-text-red">1500Rs</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-display-container">
        <img src="hqdefault.jpg" height="200" width="200" >
		<div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onClick="document.location.href='apple.php'">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Footwears<br><b>2500Rs</b></p>
      </div>
      
    </div>
  </div>
<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
	echo "connected";
}
$a =array();
$sqlg="SELECT name FROM itemssuggested";
$resultg =mysqli_query($con,$sqlg);
while ($row = $resultg->fetch_row()) {
         $x = $row[0];
		 array_push($a,$x);
    }
//$r = "Groceryt";
//$_POST['r']=$a[0];
?>
<div> 
<table  cellspacing=10 cellpadding = 6 width=300 id ="t01">

<h3> Today's deals   
  <tr>
   <td hspace="20">
<figure>
  <a href="dell.php">
  <img src="dell.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>dell</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
  <a href="ferrerorocher.php">
  <img src="ferrerorocher.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>ferrreorocher</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
 <a href="fastrack.php">
  <img src="fastrack.jpg" alt="green tea" width="300" height="300" hspace="20">
  <figcaption>fastrack</figcaption>
</figure>
</td>
</td>

   <td hspace="20">
<figure>
 <a href="greentea.php">
  <img src="greentea.jpg" alt="green tea" width="300" height="300" hspace="20">
  <figcaption>greentea</figcaption>
</figure>
</td>
</td>

   <td hspace="20">
<figure>
 <a href="flirt.php">
  <img src="flirt.jpg" alt="green tea" width="300" height="300" hspace="20">
  <figcaption>flirt</figcaption>
</figure>
</td>

</tr>
</table>


<table  cellspacing=10 cellpadding = 6 width=300 id ="t01">
   <h3> Suggestions on what you viewed<br>
  
  <tr>
   <td hspace="20">
<figure>
<a href="<?php echo "$a[0]"?>.php">
  <img src="<?php echo "$a[0]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[0]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[1]"?>.php">
  <img src="<?php echo "$a[1]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[1]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[2]"?>.php">
  <img src="<?php echo "$a[2]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[2]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[3]"?>.php">
  <img src="<?php echo "$a[3]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[3]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[4]"?>.php">
  <img src="<?php echo "$a[4]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[4]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[5]"?>.php">
  <img src="<?php echo "$a[5]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[5]"?></figcaption>
</figure>
</td>

</tr>
</table>

<table  cellspacing=10 cellpadding = 6 width=300 id ="t01">
   <h3> Suggestions on yours previous order<br>
  
  <tr>
   <td hspace="20">
<figure>
<a href="<?php echo "$a[0]"?>.php">
  <img src="<?php echo "$a[0]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[0]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[1]"?>.php">
  <img src="<?php echo "$a[1]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[1]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[2]"?>.php">
  <img src="<?php echo "$a[2]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[2]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[3]"?>.php">
  <img src="<?php echo "$a[3]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[3]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[4]"?>.php">
  <img src="<?php echo "$a[4]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[4]"?></figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="<?php echo "$a[5]"?>.php">
  <img src="<?php echo "$a[5]"?>.jpg" alt="The Pulpit Rock" width="100" height="100" hspace="20">
  <figcaption><?php echo "$a[5]"?></figcaption>
</figure>
</td>

</tr>
</table>
</div>
  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>
  
  <!-- Footer-->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
   <!-- <div class="w3-row-padding">
      <div class="w3-col s2">
      
      </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">We're hiring</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Find store</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Company Name</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa fa-cc-mastercard"></i>mastercard</p>
         <p><i class="fa fa-fw fa fa-google-wallet"></i>wallet</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div> -->
  </footer>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
