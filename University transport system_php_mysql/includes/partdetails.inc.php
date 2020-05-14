<?php

 include_once 'dbh2.inc.php';
              $partno=mysqli_real_escape_string($conn,$_POST['partno']);
	          $partname=mysqli_real_escape_string($conn,$_POST['partname']);
	          $quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
if(isset($_POST['insert'])){
	         
  if(empty($partno)||empty($partname)||empty($quantity)){
	          header("Location: ../partdetails.php?partdetails=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO partdetails(partno,partname,quantity)
	                    values('$partno','$partname','$quantity')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../partdetails.php?partdetails=success");
	          exit();
        }
}


if(isset($_POST['delete'])){
	 // include_once 'dbh2.inc.php';
	  // $partname=mysqli_real_escape_string($conn,$_POST['partname']);
	  $sql="DELETE FROM partdetails WHERE partname='$partname'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../partdetails.php?partdetails=deleted");
exit();}

if(isset($_POST['view'])){
	  // include_once 'dbh2.inc.php';
	   $sql="SELECT * FROM partdetails;";
	   $result=mysqli_query($conn,$sql);
	   echo "<center>";
	   echo "<h1>"."All Parts Of Vehicle "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "partno";echo "</th>";
	   echo "<th>";echo "partname";echo "</th>";
	   echo "<th>";echo "quantity";echo "</th>";
	    echo "</tr>";
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_array($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['partno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['partname'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['quantity'];echo "</center>";echo "</td>";
		 
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  
	  };
	  
	  if(isset($_POST['search'])){
	   echo "<center>";
	   echo "<h1>"."Search Result "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "partno";echo "</th>";
	   echo "<th>";echo "partname";echo "</th>";
	   echo "<th>";echo "quantity";echo "</th>";
	   echo "</tr>";
		$sql="SELECT * FROM partdetails WHERE partno='$partno' OR partname='$partname'";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['partno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['partname'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['quantity'];echo "</center>";echo "</td>";
		  echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
?>