<?php

 include_once 'dbh2.inc.php';
	          $formno=mysqli_real_escape_string($conn,$_POST['formno']);
	          $Vehicleid=mysqli_real_escape_string($conn,$_POST['Vehicleid']);
			  $description=mysqli_real_escape_string($conn,$_POST['description']);
			   $initialdate=mysqli_real_escape_string($conn,$_POST['initialdate']);
	          $completiondate=mysqli_real_escape_string($conn,$_POST['completiondate']);
			  $inspectorid=mysqli_real_escape_string($conn,$_POST['inspectorid']);
if(isset($_POST['insert'])){
	         
  if(empty($formno)||empty($Vehicleid)||empty($description)||empty($initialdate)){
	          header("Location: ../maintainlog.php?maintainlog=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO maintainlog(formno,Vehicleid,description,initialdate,completiondate,inspectorid)
	                    values('$formno','$Vehicleid','$description','$initialdate','$completiondate','$inspectorid')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../maintainlog.php?maintainlog=success");
	          exit();
        }
}


if(isset($_POST['delete'])){
	 // include_once 'dbh2.inc.php';
	 //  $formno=mysqli_real_escape_string($conn,$_POST['formno']);
	  $sql="DELETE FROM maintainlog WHERE formno='$formno'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../maintainlog.php?maintainlog=deleted");
exit();}

if(isset($_POST['view'])){
	   include_once 'dbh2.inc.php';
	   $sql="SELECT * FROM maintainlog;";
	   $result=mysqli_query($conn,$sql);
	   echo "<center>";
	   echo "<h1>"."Maintain Log Details Table "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "formno";echo "</th>";
	   echo "<th>";echo "Vehicleid";echo "</th>";
	   echo "<th>";echo "description";echo "</th>";
	   echo "<th>";echo "initialdate";echo "</th>";
	   echo "<th>";echo "completiondate";echo "</th>";
	   echo "<th>";echo "inspectorid";echo "</th>";
	   
	    echo "</tr>";
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_array($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['formno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['Vehicleid'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['description'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['initialdate'];echo "</center>";echo "</td>";
		   echo "<td>";echo "<center>";echo $row['completiondate'];echo "</center>";echo "</td>";
		    echo "<td>";echo "<center>";echo $row['inspectorid'];echo "</center>";echo "</td>";
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
	   echo "<th>";echo "formno";echo "</th>";
	   echo "<th>";echo "Vehicleid";echo "</th>";
	   echo "<th>";echo "description";echo "</th>";
	   echo "<th>";echo "initialdate";echo "</th>";
	   echo "<th>";echo "completiondate";echo "</th>";
	   echo "<th>";echo "inspectorid";echo "</th>";
	   echo "</tr>";
		$sql="SELECT * FROM maintainlog WHERE formno='$formno' OR vehicleid='$Vehicleid' ";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['formno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['Vehicleid'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['description'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['initialdate'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['completiondate'];echo "</center>";echo "</td>";
		   echo "<td>";echo "<center>";echo $row['inspectorid']; echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
?>