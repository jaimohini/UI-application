<?php

include_once 'dbh2.inc.php';
              $formno=mysqli_real_escape_string($conn,$_POST['formno']);
	          $staffId=mysqli_real_escape_string($conn,$_POST['staffId']);
			  $deptId=mysqli_real_escape_string($conn,$_POST['deptId']);
			  $vehicleNo=mysqli_real_escape_string($conn,$_POST['vehicleNo']);
			  $booking=mysqli_real_escape_string($conn,$_POST['booking']);
	          $booktime=mysqli_real_escape_string($conn,$_POST['booktime']);
	          $destination=mysqli_real_escape_string($conn,$_POST['destination']);
			  $purpose=mysqli_real_escape_string($conn,$_POST['purpose']);
	          $dristaffid=mysqli_real_escape_string($conn,$_POST['dristaffid']);
if(isset($_POST['insert'])){
	          
  if(empty($formno)||empty($staffId)||empty($deptId)||empty($vehicleNo)||empty($booking)||
       empty($booktime)||empty($destination)||empty($purpose)||empty($dristaffid)){
	          header("Location: ../Reservation.php?Reservation=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO Reservation(formno,staffId,deptId,vehicleNo,booking,booktime,destination,purpose,dristaffid)
	                    values('$formno','$staffId','$deptId','$vehicleNo','$booking','$booktime',
						'$destination','$purpose','$dristaffid')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../Reservation.php?Reservation=success");
	          exit();
        }
}

if(isset($_POST['delete'])){
	//  include_once 'dbh2.inc.php';
	 //  $formno=mysqli_real_escape_string($conn,$_POST['formno']);
	  $sql="DELETE FROM Reservation WHERE formno='$formno'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../reservation.php?reservation=deleted");
exit();}

if(isset($_POST['delete'])){
	
	  $sql="DELETE FROM Staff WHERE user_uid='$uid'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../signup.php?signup=deleted");
exit();}

if(isset($_POST['search'])){
	   echo "<center>";
	   echo "<h1>"."Search Result "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "formno";echo "</th>";
	   echo "<th>";echo "staffId";echo "</th>";
	   echo "<th>";echo "deptId";echo "</th>";
	   echo "<th>";echo "vehicleNo";echo "</th>";
	   echo "<th>";echo "booking";echo "</th>";
	   echo "<th>";echo "booktime";echo "</th>";
	   echo "<th>";echo "destination";echo "</th>";
	   echo "<th>";echo "purpose";echo "</th>";
	   echo "<th>";echo "dristaffid";echo "</th>";
	   echo "</tr>";
		$sql="SELECT * FROM Reservation WHERE formno='$formno' OR staffId='$staffId' OR vehicleNo='$vehicleNo' ";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['formno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['staffId'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['deptId'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['vehicleNo'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['booking'];echo "</center>";echo "</td>";
		   echo "<td>";echo "<center>";echo $row['booktime']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['destination'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['purpose'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['dristaffid'];echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
else{
	 header("Location: ../reservation.php?reservation=notfound");
	          exit();
}
?>