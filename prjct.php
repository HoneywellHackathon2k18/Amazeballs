<!DOCTYPE html>
<html>
<title>Amazeballs</title>
<meta charset="UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

<style>
.center {
    padding: 70px 0;
   
    text-align: center;
}
</style>
<style>
td:nth-child(2) {
    border-right: 10px solid transparent;
    -webkit-background-clip: padding;
    -moz-background-clip: padding;
    background-clip: padding-box;
}
</style>
<style>
table, th, td {
    
}
</style>
<style>
body {
    font-family: "Lato", sans-serif;
   bgcolor="#E6E6FA"
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
  float: right;
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

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
     
  }
}
</style>
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
.mySlides {display:none}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>

<body style="background-color:#E6E6FA">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  
  <div class="search-container">
    <form action="edit.php">
      <input type="text" placeholder="Search for what your looking for...." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
      
        <a href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>
      
    </form>
  </div>
</div>



</body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Shop by Category</a>
  <a href="#">Your previous orders</a>
  <a href="#">Settings</a>
  <a href="#">Customer support</a>
</div>

<div id="main">
  <h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<div class="center">
<table>
 <tr>
<div class="w3-content w3-display-container">
  
  <img class="mySlides" src="watch.jpg" style="width:100%">
  <img class="mySlides" src="kindle.jpg" style="width:100%">
  <img class="mySlides" src="macbook.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
</tr>
</table>
<table  cellspacing="10" cellpadding = "3" width=300>
<h3> Today's deals   
  <tr>
   <td hspace="20">
<figure>
  <a href="https://www.w3schools.com">
  <img src="dell.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>dell inspiron</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
  <a href="https://www.w3schools.com">
  <img src="fr.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Ferrreo Rocher</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
 <a href="https://www.w3schools.com">
  <img src="sony.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Sony</figcaption>
</figure>
</td>

</tr>
</table>
 <table  cellspacing="10" cellpadding = "3" width=300>
<h3> Items based on your previous orders
  <tr>
   <td hspace="20">
<figure>
<a href="iphone6s.php">
  <img src="iphone6s.jpg" alt="The Pulpit Rock" width="300" height="300" onclick="edit.php" hspace="20">
  <figcaption>iphone 6</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="https://www.w3schools.com">
  <img src="nokia.jpeg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Nokia</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="https://www.w3schools.com">
  <img src="samsung.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Samsung</figcaption>
</figure>
</td>

</tr>
</table>

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


<table  cellspacing=10 cellpadding = 6 width=300 id ="t01">
   <h3> Suggestions on what you viewed<br>
  <h3> Printing from php : <?php echo "$a[0]"?>
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

<table  cellspacing="10" cellpadding = "3" width=300>
   <h3> Seasonal items
  <tr>
   <td hspace="20">
<figure>
<a href="mango.php">
  <img src="mango.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Mangoes</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="https://www.w3schools.com">
  <img src="apple.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Apple</figcaption>
</figure>
</td>

   <td hspace="20">
<figure>
<a href="https://www.w3schools.com">
  <img src="grapes.jpg" alt="The Pulpit Rock" width="300" height="300" hspace="20">
  <figcaption>Grapes</figcaption>
</figure>
</td>

</tr>
</table>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
<script>
   $('img.submitableimage').click(function(){
      $('#myform').submit();
   });
</script>
     
</body>
</html> 
