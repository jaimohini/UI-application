<?php
  include_once 'dbh2.inc.php';
              $deptid=mysqli_real_escape_string($conn,$_POST['deptid']);
	          $deptname=mysqli_real_escape_string($conn,$_POST['deptname']);
			  $buildno=mysqli_real_escape_string($conn,$_POST['buildno']);
			  $buildname=mysqli_real_escape_string($conn,$_POST['buildname']);
			  $campus=mysqli_real_escape_string($conn,$_POST['campus']);
if(isset($_POST['insert'])){
	        
  if(empty($deptid)||empty($deptname)||empty($buildno)||empty($buildname)||empty($campus)){
	          header("Location: ../department.php?department=empty");
	          exit();
        } 
  else{
	          $sql="INSERT INTO department(deptid,deptname,buildno,buildname,campus)
	                    values('$deptid','$deptname','$buildno','$buildname','$campus')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../department.php?department=success");
	          exit();
        }
}

if(isset($_POST['delete'])){
	  // include_once 'dbh2.inc.php';
	   $deptid=mysqli_real_escape_string($conn,$_POST['deptid']);
	  $sql="DELETE FROM department WHERE deptid='$deptid'";
	  $result=mysqli_query($conn,$sql);
	   header("Location: ../department.php?department=deleted");
exit();}

if(isset($_POST['search'])){
	   echo "<center>";
	   echo "<h1>"."Search Result "."</h1>";
	   echo "<table border='1' style='cell-pedding:1px;' width='300px;' bgcolor='lightgrey'>";
	   echo "<tr>";
	   echo "<th>";echo "deptid";echo "</th>";
	   echo "<th>";echo "deptname";echo "</th>";
	   echo "<th>";echo "buildno";echo "</th>";
	   echo "<th>";echo "buildname";echo "</th>";
	   echo "<th>";echo "campus";echo "</th>";
	   echo "</tr>";
		$sql="SELECT * FROM department WHERE deptid='$deptid' OR deptname='$deptname' ";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['deptid']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['deptname'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['buildno'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['buildname'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['campus'];echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
?>