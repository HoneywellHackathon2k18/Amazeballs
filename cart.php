<!doctype html>
<head>
<title>
cart
</title>
<h2> Cart checkout
</head>
<body>
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
         
$sqlw="INSERT INTO `orders`(`name`, `quantity`, `price`, `category`, `product`) VALUES ('."$row[0]".','."$row[1]".','."$row[2]".','."$row[3]".','."$row[4]".')";
$result=mysqli_query($con,$sqlw);

    }




}
?>
</body>
</html>