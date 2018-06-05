<html>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
<h2> iphone 6s
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

.parent-wrapper {
  height: 100%;
  width: 100%;
  margin-top: 30px;
}
.parent {
  display: flex;
  font-size: 0;
  flex-wrap: wrap;
  margin: -10px 0 0 -10px;
}
.child {
  display: inline-block;
  margin: 10px 0 0 10px;
  flex-grow: 1;
  height: 100px;
}


</style>
</head>
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
<?php
$con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
	//echo "connected";
}
$a =array();
$sqlg="SELECT name FROM cart";
$resultg =mysqli_query($con,$sqlg);
while ($row = $resultg->fetch_row()) {
         $x = $row[0];
		 array_push($a,$x);
    }
//$r = "Groceryt";
//$_POST['r']=$a[0];
$n = sizeof($a);
$r = $n;
if($n<5)
{
 while($r<=5)
{
   $a[$r]='';
   $r = $r+1;
}
}
for($i=0;$i<$n;$i++)
{
 echo '<table  cellspacing=10 cellpadding = 6 width=300>';
 echo '<tr>';
 echo  '<td hspace="20">';
echo '<figure>';
echo '<a href="'.$a[$i].'.php">';
echo  '<img src="'.$a[$i].'.jpg" width="200" height="200" hspace="20">';
 echo '<figcaption>'.$a[$i].'</figcaption>';
echo '</figure>';
echo '</td>';
echo '</table>';
}
?>
<button type="button" onclick="checkout()">Check out</button>
<?php
 function checkout()
{
  $con=mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
//	echo "connected";
}
$sqlse = "select * from cart";
$var=mysqli_query($con,$sqlse);
//$rowcount=mysqli_num_rows($result1);
while ($row = $var->fetch_row()) {

$sqlw="INSERT INTO `orders`(`name`, `quantity`, `price`, `category`, `product`) VALUES ('".$row[0]."',".$row[1].",".$row[2].",'".$row[3]."','".$row[4]."')";
$result=mysqli_query($con,$sqlw);
    }
}
?>
</body>
</html>
