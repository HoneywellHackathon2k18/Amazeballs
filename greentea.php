<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
<h2> Green Tea
</title>
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

.button {
    background-color: #f0c14b; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    position:absolute;
    top:400px;
    right:200px
}
.button2 {
    background-color: #f0c14b; /* Green */
    border: none;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    position:absolute;
    top:400px;
    right:370px
}

.button1 {font-size: 10px;}


</style>
</head>

<!--<?php
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
$sqlw="SELECT * FROM view where product='greentea'";
$result=mysqli_query($con,$sqlw);
$rowcount=mysqli_num_rows($result);
if ($rowcount)
  {
	  $sql1 ="update view
	          set views=views+1
			  where product='greentea'";
	$result1=mysqli_query($con,$sql1);
   mysqli_free_result($result1);
  }
else{
$sql ="insert into view values('greentea',1,'healthcare')";
	$result2=mysqli_query($con,$sql);
	mysqli_free_result($result2);
}
mysqli_close($con);
?>-->
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
          <form action="search.php" method="post" target="_blank">
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
  <div class="outer">
  <div class="left" ><form action="/action_page.php" method="get" name="greentea">
  <img  src="greentea.jpg" width="300px" height ="400px" />
</div>
  <div class="right">
    <h3>greentea</h3>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

    <hr/>
    <div class="des">
      <span><b> MRP:</b> <span style="color:red">  &#x20b9; 202.50</span> </span>
      <h4>Features</h4>
      <ul>
        <li>Lipton's essential ingredient comes from nature, the leaves of a plant tea. For over a century Lipton has been bringing the benefits of this unique plant to people across the world. We want tea to be continuously grown and harvested for the enjoyment of generations to come. Lipton is the leading global tea brand and has been delivering quality for over 100 years. This means that, at Lipton, the quality standard is kept uncompromisingly high. </li>
       
      </ul>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="comp">

      <form action="test.php" method= "get" name="greentea">
        <button  class="button2 button1" type="submit" form="nameform" value="Submit">Compare</button>
      </form>

    </div>
    <div class="cart">
      <form action="test.php" method= "get" name="greentea">
      <button  class="button button1" type="submit" form="nameform" value="Submit"><i class="fa fa-shopping-cart w3-margin-right"></i>Add to Cart</button>
      </form>

    </div>
  </div>
</div>
<br/>
<br/>
<hr / >
<br />




<div class="suggested">
  <h3> Customers who viewed this also viewed</h3>
</div>

<!--<form action="test.php" method= "get" name="greentea">
<button type="submit" form="nameform" value="Submit">Split the screen!</button>
</form>
 <div class="wrapper">
  <h3> 56,000<br>
<button type="button"  justify-content: center onclick="alert('item added!')">Add to Cart</button>
</div>
<br><br>
-->
<?php
include 'edit.php';

?>
  </body>

</html>
