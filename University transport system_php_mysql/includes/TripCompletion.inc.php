<?php
include_once 'dbh2.inc.php';
              $formno=mysqli_real_escape_string($conn,$_POST['formno']);
              $odometerStart=mysqli_real_escape_string($conn,$_POST['odometerStart']);
	          $odometerEnd=mysqli_real_escape_string($conn,$_POST['odometerEnd']);
	          $fuelLiter=mysqli_real_escape_string($conn,$_POST['fuelLiter']);
	          $uhCreditCardNo=mysqli_real_escape_string($conn,$_POST['uhCreditCardNo']);
	          $complain=mysqli_real_escape_string($conn,$_POST['complain']);
if(isset($_POST['insert'])){
	          

  if(empty($formno)||empty($odometerStart)||empty($odometerEnd)||empty($fuelLiter)||empty($uhCreditCardNo)||empty($complain)){
	          header("Location: ../TripCompletion.php?TripCompletion=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO tripcompletion(formno,odometerStart,odometerEnd,fuelLiter,uhCreditCardNo,complain)
	                    values('$formno',' $odometerStart','$odometerEnd','$fuelLiter','$uhCreditCardNo','$complain')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../TripCompletion.php?TripCompletion=success");
	          exit();
        }
}

if(isset($_POST['delete'])){
	 // include_once 'dbh2.inc.php';
	   //$odometerStart=mysqli_real_escape_string($conn,$_POST['odometerStart']);
	  $sql="DELETE FROM tripcompletion WHERE formno='$formno'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../TripCompletion.php?TripCompletion=deleted");
exit();}

if(isset($_POST['search'])){
	   echo "<center>";
	   echo "<h1>"."Search Result "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "formno";echo "</th>";
	   echo "<th>";echo "odometerStart";echo "</th>";
	   echo "<th>";echo "odometerEnd";echo "</th>";
	   echo "<th>";echo "fuelLiter";echo "</th>";
	   echo "<th>";echo "uhCreditCardNo";echo "</th>";
	   echo "<th>";echo "complain";echo "</th>";
	    echo "</tr>";
		$sql="SELECT * FROM TripCompletion WHERE odometerStart='$odometerStart' OR formno='$formno'";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  echo "<td>";echo "<center>";echo $row['formno']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['odometerStart']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['odometerEnd'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['fuelLiter'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['uhCreditCardNo'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['complain'];echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
else{
	 header("Location: ../TripCompletion.php?TripCompletion=notfound");
	          exit();
}
?>