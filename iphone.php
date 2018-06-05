<!DOCTYPE html>
<html>
<head>
<title>
<h2> iphone 6s
</title>
<style >
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}</style>
</head>

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
$sqlw="SELECT * FROM view where product='phone'";
$result=mysqli_query($con,$sqlw);
$rowcount=mysqli_num_rows($result);
if ($rowcount)
  {
	  $sql1 ="update view
	          set views=views+1
			  where product='phone'";
	$result1=mysqli_query($con,$sql1);
   mysqli_free_result($result1);
  }
else{
$sql ="insert into view values('phone',1,'Electronics')";
	$result2=mysqli_query($con,$sql);
	mysqli_free_result($result2);
}
mysqli_close($con);
?>
<body>
  <h2> iphone 6s
<form action="test.php" method= "get" name="phone">
<button type="submit" form="nameform" value="Submit">Split the screen!</button>
</form>
  <div style="display: flex; justify-content: center;"><form action="/action_page.php" method="get" name="phone">
  <img src="iphone.jpg" style="width: 300; height: 300;" />
</div>
 <div class="wrapper">
  <h3> 56,000<br>
<button type="button"  justify-content: center onclick="alert('item added!')">Add to Cart</button>
</div>
<br><br>
<h3> Customers who viewed this also viewed
<?php
include 'edit.php';

?>
  </body>

</html>
