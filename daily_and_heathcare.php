<!DOCTYPE html>
<html>
<title>Festival Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<header>
  <body>
  <header class="w3-container w3-xlarge header">
    <div class="w3-bar w3-light-grey topnav">
    <a href="honeywell.php" class="w3-bar-item w3-button">Home </a>
   <a href="account.php" class="w3-bar-item w3-button">Accounts</a>
    <a href="#" class="w3-bar-item w3-button">Orders</a>
    <a href="reports.html" class="w3-bar-item w3-button">Reports</a>
    <div class="search">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
    </div>

      <div class="search-container">
          <form action="/action_page.php" method="post" target="_blank">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
    </div>
  </div>

<!--<div>
  <form action="/action_page.php">
    <input   type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>-->




  </header>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>
<!-- Top menu -->

    <div class="w3-center w3-padding-16  ">
      <h2 style="text-align:center " >Daily and Health Products</h2>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:30px">

  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <a href="#"><img src="perfume.jpg" alt="Sandwich" height="300" width="300">
      <h3>Perfume</h3><p>500 Rs</p>
      
    </div>
    <div class="w3-quarter">
      <a href="sunscream.php"><img src="sunscream.jpg" alt="Steak" height="300" width="300">
      <h3>Sunscream</h3>
      <p>200 Rs</p>
    </div>
    <div class="w3-quarter">
       <a href="greentea.php"><img src="" alt="Cherries" height="300" width="300"></a>
      <h3>Green-Tea</h3>
      <p>70 Rs</p>
      
    </div>
    <div class="w3-quarter">
      <img src="Axe powder.jpg" alt="Pasta and Wine" height="300" width="300">
      <h3>Axe powder</h3>
      <p>200 Rs</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="protinex.php"><img src="protinex.jpg" alt="Popsicle" height="300" width="300" ></a>
      <h3>Protinex</h3>
      <p>700 Rs</p>
    </div>

     <div class="w3-quarter">
      <a href="multivitamin.php"><img src=" multivitamin.jpg" alt="Sandwich" height="300" width="300" ></a>
      <h3>Setu Fish Oil 1000 Mg 60 Softgels</h3>
      <p>Rs 150</p>
    </div>

    <div class="w3-quarter">
      <<a href="fairandhandsome.php"><img src="fairandhandsome.jpg" alt="Croissant" height="300" width="300"></a>
      <h3>Fair and Handsome</h3>
      <p>200 Rs</p>
    </div>

  <div class="w3-quarter w3-right">
      <img src="conditioner.jpg" alt="Sandwich" height="300" width="300" >
      <h3>Conditioner</h3>
      <p>Rs 170</p>
    </div>

  </div>
  <div class="w3-red w3-xlarge"> <i><b><center>CHOOSE YOUR OWN PRODUCT</center></b></i></p></div>
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
  top:5px
}
.topnav{
  padding: 10px;
}
</style>


</body>
</html>
