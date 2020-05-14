<?php
if(isset($_POST['insert'])){
	          include_once 'dbh2.inc.php';
              $serialno=mysqli_real_escape_string($conn,$_POST['serialno']);
	          $formno=mysqli_real_escape_string($conn,$_POST['formno']);
	          $partno=mysqli_real_escape_string($conn,$_POST['partno']);
			  $mechanicid=mysqli_real_escape_string($conn,$_POST['mechanicid']);
  if(empty($serialno)||empty($formno)||empty( $partno)||empty($mechanicid)){
	          header("Location: ../maintaindetail.php?maintaindetail=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO maintaindetail(serialno,formno,partno,mechanicid)
	                    values('$serialno','$formno','$partno','$mechanicid')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../maintaindetail.php?maintaindetail=success");
	          exit();
        }
}

if(isset($_POST['delete'])){
	  include_once 'dbh2.inc.php';
	   $serialno=mysqli_real_escape_string($conn,$_POST['serialno']);
	  $sql="DELETE FROM maintaindetail WHERE serialno='$serialno'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../maintaindetail.php?maintaindetail=deleted");
exit();}


if(isset($_POST['view'])){
	   include_once 'dbh2.inc.php';
	   $sql="SELECT * FROM maintaindetail;";
	   $result=mysqli_query($conn,$sql);
	   echo "<center>";
	   echo "<h1>"."Maintain Details Table "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "serialno";echo "</th>";
	   echo "<th>";echo "formno";echo "</th>";
	   echo "<th>";echo "partno";echo "</th>";
	     echo "<th>";echo "mechanicid";echo "</th>";
	    echo "</tr>";
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_array($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['serialno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['formno'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['partno'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['mechanicid'];echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  };
	  
if(isset($_POST['back'])){
	header("Location: ../maintainlog.php?maintainlog=backto");
exit();
}

if(isset($_POST['close'])){
	header("Location: ../transportheader.php?transportheader=backto");
exit();
}
?>