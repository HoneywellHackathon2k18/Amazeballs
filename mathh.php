<?php
//echo "in mathh1";
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

$sqlg="SELECT views FROM view where category='Grocery'";
$sqlc="SELECT views FROM view where category='clothing'";
$sqle="SELECT views FROM view where category='Electronics'";
$sqlf="SELECT views FROM view where category='Festival'";
$sqlh="SELECT views FROM view where category='HealthCare'";
$a=array();





$resultg =mysqli_query($con,$sqlg);
$sumg=0;

while ($row = $resultg->fetch_row()) {
         $sumg= $sumg+ $row[0];
    }

//echo ($sumg . "<br>");
array_push($a,$sumg);


$resultc =mysqli_query($con,$sqlc);
$sumc=0;

while ($row = $resultc->fetch_row()) {
         $sumc= $sumc+ $row[0];
    }

//echo ($sumc . "<br>");
array_push($a,$sumc);


$resulte =mysqli_query($con,$sqle);
$sume=0;

while ($row = $resulte->fetch_row()) {
         $sume= $sume+ $row[0];
    }

//echo ($sume . "<br>");
array_push($a,$sume);

$resultf =mysqli_query($con,$sqlf);
$sumf=0;

while ($row = $resultf->fetch_row()) {
         $sumf= $sumf+ $row[0];
    }

//echo ($sumf . "<br>");
array_push($a,$sumf);


$resulth =mysqli_query($con,$sqlh);
$sumh=0;

while ($row = $resulth->fetch_row()) {
         $sumh= $sumh+ $row[0];
    }

//echo ($sumh . "<br>");

array_push($a,$sumh);









  //$categories = array("DHC", "FP", "ELEC", "GROC", "Cloth");
  //$view = array(50,20,0,5,15);
 
  
  $summ = array_sum($a);
//echo ($summ . "<br>");
$h=array();
if($summ>6)
{
for($x=0; $x<5; $x++)
{
 	$r =(6 * $a[$x])/$summ;
 $h[$x] = round((6 * $a[$x])/$summ) ; 
 //echo ($h[$x] . "<br>");
}
 $sqlsel = "SELECT views FROM `suggested`";
 $resultsel=mysqli_query($con,$sqlsel);
 $b=array();
 while ($row1 = $resultsel->fetch_row()) {
          array_push($b,$row1[0]);
    }
 $arraysAreEqual = ($b === $h);
 
 $sqldel = "DELETE FROM `suggested`";
 $sqli1="insert into suggested values('grocery',$h[0])";
 $sqli2="insert into suggested values('clothing',$h[1])";
 $sqli3="insert into suggested values('electronics',$h[2])";
 $sqli4="insert into suggested values('festival',$h[3])";
 $sqli5="insert into suggested values('healthcare',$h[4])";
 $resultdel=mysqli_query($con,$sqldel);
 $resulti1 =mysqli_query($con,$sqli1);
 $resulti2 =mysqli_query($con,$sqli2);
 $resulti3 =mysqli_query($con,$sqli3);
 $resulti4 =mysqli_query($con,$sqli4);
 $resulti5 =mysqli_query($con,$sqli5);
  
 $resgroc=array();	  
	  if($h[0]!=0)
	   {
	  
	   $numbers1 = range(1,6);
    shuffle($numbers1);
    $t1= array_slice($numbers1, 0, $h[0]);
    //$size= sizeof($t1);
	for($i=0;$i<$h[0];$i++)
	{
    $sqlgroc = "SELECT name FROM `grocery` where num=".$t1[$i];
    $resultgroc=mysqli_query($con,$sqlgroc);
	 $row = $resultgroc->fetch_row() ;
          array_push($resgroc,$row[0]);
	}
	//echo $resgroc[0]." ".$resgroc[1]." ".$resgroc[2]." ";
	   }
	   $rescloth=array();
	   if($h[1]!=0)
	   {
	   
	   $numbers2 = range(1,6);
    shuffle($numbers2);
    $t2= array_slice($numbers2, 0, $h[1]);
	for($i=0;$i<$h[1];$i++)
	{
    $sqlcloth = "SELECT name FROM `clothing` where num=".$t2[$i];
    $resultcloth=mysqli_query($con,$sqlcloth);
	 $row = $resultcloth->fetch_row() ;
          array_push($rescloth,$row[0]);
	}
	echo $rescloth[0].$rescloth[1].$rescloth[2];
	   }
	   $reselec=array();
	   if($h[2]!=0)
	   {
	   
	   $numbers3 = range(1,6);
    shuffle($numbers3);
    $t3= array_slice($numbers3, 0, $h[2]);
	for($i=0;$i<$h[2];$i++)
	{
    $sqlelec = "SELECT name FROM `electronics` where num=".$t3[$i];
    $resultelec=mysqli_query($con,$sqlelec);
	 $row = $resultelec->fetch_row() ;
          array_push($reselec,$row[0]);
	}
	echo $reselec[0]." ".$reselec[1]." ".$reselec[2];
	   }
	   $resfest=array();
	   if($h[3]!=0)
	   {
	   $numbers4 = range(1,6);
      shuffle($numbers4);
    $t4= array_slice($numbers4, 0, $h[3]);
	for($i=0;$i<$h[3];$i++)
	{
    $sqlfest = "SELECT name FROM `festival` where num=".$t4[$i];
    $resultfest=mysqli_query($con,$sqlfest);
	 $row = $resultfest->fetch_row() ;
          array_push($resfest,$row[0]);
	}
	echo $resfest[0].$resfest[1].$resfest[2];
	   }
	   $reshc=array();
	   if($h[4]!=0)
	   {
	 
	   $numbers5 = range(1,6);
    shuffle($numbers5);
    $t5= array_slice($numbers5, 0, $h[4]);
	for($i=0;$i<$h[4];$i++)
	{
    $sqlhc = "SELECT name FROM `healthcare` where num=".$t5[$i];
    $resulthc=mysqli_query($con,$sqlhc);
	 $row = $resulthc->fetch_row() ;
          array_push($reshc,$row[0]);
	}
	//echo $reshc[0].$reshc[1].$reshc[2];
	   }   
	   $main=array();
	   $main=array_merge($resgroc,$reselec,$rescloth,$resfest,$reshc);
	   echo "<br>";
	  echo $main[0].$main[1].$main[2].$main[3].$main[4].$main[5];
	  echo "<br>";
       $sqldelete = "DELETE FROM `itemssuggested`";
       $sqlitem1="INSERT INTO `itemssuggested`(`name`) VALUES ('"."$main[0]"."')";
	   $sqlitem2="INSERT INTO `itemssuggested` VALUES ('"."$main[1]"."')";
	   $sqlitem3="INSERT INTO `itemssuggested` VALUES ('"."$main[2]"."')";
	   $sqlitem4="INSERT INTO `itemssuggested` VALUES ('"."$main[3]"."')";
	   $sqlitem5="INSERT INTO `itemssuggested` VALUES ('"."$main[4]"."')";
	   $sqlitem6="INSERT INTO `itemssuggested` VALUES ('"."$main[5]"."')";
	   $resultdel=mysqli_query($con,$sqldelete);
 $resultitem1 =mysqli_query($con,$sqlitem1);
 $resultitem2 =mysqli_query($con,$sqlitem2);
 $resultitem3 =mysqli_query($con,$sqlitem3);
 $resultitem4 =mysqli_query($con,$sqlitem4);
 $resultitem5 =mysqli_query($con,$sqlitem5);
 $resultitem6 =mysqli_query($con,$sqlitem6);
 echo $main[0].$main[1].$main[2].$main[3].$main[4].$main[5];
	   
   
mysqli_close($con);
 
}
?>