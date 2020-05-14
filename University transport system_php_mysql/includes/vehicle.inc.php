<?php

   include_once 'dbh2.inc.php';
              $vehicleNo=mysqli_real_escape_string($conn,$_POST['vehicleNo']);
	          $vehicleType=mysqli_real_escape_string($conn,$_POST['vehicleType']);
	          $color=mysqli_real_escape_string($conn,$_POST['color']);
if(isset($_POST['insert'])){
	       
  if(empty($vehicleNo)||empty($vehicleType)||empty( $color)){
	          header("Location: ../vehicle.php?vehicle=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO vehicle(vehicleNo,vehicleType,color)
	                    values('$vehicleNo','$vehicleType','$color')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../vehicle.php?vehicle=success");
	          exit();
        }
}

if(isset($_POST['delete'])){
	   //include_once 'dbh2.inc.php';
	//   $vehicleNo=mysqli_real_escape_string($conn,$_POST['vehicleNo']);
	  $sql="DELETE FROM vehicle WHERE vehicleNo='$vehicleNo'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../vehicle.php?vehicle=deleted");
exit();}

if(isset($_POST['view'])){
	  // include_once 'dbh2.inc.php';
	   $sql="SELECT * FROM vehicle;";
	   $result=mysqli_query($conn,$sql);
	   echo "<center>";
	   echo "<h1>"."All Vehicles "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "vehicleNo";echo "</th>";
	   echo "<th>";echo "vehicleType";echo "</th>";
	   echo "<th>";echo "color";echo "</th>";
	    echo "</tr>";
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_array($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['vehicleNo']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['vehicleType'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['color'];echo "</center>";echo "</td>";
		 
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
	   echo "<th>";echo "vehicleNo";echo "</th>";
	   echo "<th>";echo "vehicleType";echo "</th>";
	   echo "<th>";echo "color";echo "</th>";
	   echo "</tr>";
		$sql="SELECT * FROM vehicle WHERE vehicleNo='$vehicleNo' ";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['vehicleNo']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['vehicleType'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['color'];echo "</center>";echo "</td>";
		  echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
?>