<?php

 include_once 'dbh2.inc.php';
              $first=mysqli_real_escape_string($conn,$_POST['fname']);
	          $last=mysqli_real_escape_string($conn,$_POST['lname']);
			  $staffId=mysqli_real_escape_string($conn,$_POST['staffId']);
			  $deptId=mysqli_real_escape_string($conn,$_POST['deptId']);
			  $mobileNo=mysqli_real_escape_string($conn,$_POST['mobileNo']);
			  $designation=mysqli_real_escape_string($conn,$_POST['designation']);
	          $email=mysqli_real_escape_string($conn,$_POST['email']);
	          $uid=mysqli_real_escape_string($conn,$_POST['uid']);
			  $address=mysqli_real_escape_string($conn,$_POST['address']);
	          $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
			  $license=mysqli_real_escape_string($conn,$_POST['license']);
	          $training=mysqli_real_escape_string($conn,$_POST['training']);
			  $authority=mysqli_real_escape_string($conn,$_POST['authority']);
if(isset($_POST['submit'])){
	         
  if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd)||empty($staffId)
	  ||empty($deptId)||empty($mobileNo)||empty($designation)||empty($address)){
	          header("Location: ../signup.php?signup=empty");
	          exit();
        } 
  else{
	if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
		      header("Location: ../signup.php?signup=invalid");
	          exit();
	    }
    else{
		      //chacking for email is valid
	  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		      header("Location: ../signup.php?signup=invalid_email");
	          exit();
	    }
	  else{
		      $sql="SELECT * FROM users WHERE user_uid='$uid';";
	          $result=mysqli_query($conn,$sql);
	          $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
		      header("Location: ../signup.php?signup=usertaken");
	          exit();
	    }
   else{
              //hashing the password
              $hashedPwd=password_hash($pwd,PASSWORD_DEFAULT);
              //INSERT INTO table		
		      $sql="INSERT INTO Staff(user_first,user_last,staffId,deptId,mobileNo,
			  designation,email,user_uid,address,user_pwd,license,training,authority)
	                    values('$first','$last','$staffId','$deptId','$mobileNo','$designation','$email','$uid',
						'$address','$hashedPwd','$license','$training','$authority')";
              $result=mysqli_query($conn,$sql);
			  header("Location: ../signup.php?signup=success");
	          exit();
        }
	 }
   }
 }
}
			  
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
	   echo "<th>";echo "user_first";echo "</th>";
	   echo "<th>";echo "user_last";echo "</th>";
	   echo "<th>";echo "staffId";echo "</th>";
	   echo "<th>";echo "deptId";echo "</th>";
	   echo "<th>";echo "mobileNo";echo "</th>";
	   echo "<th>";echo "designation";echo "</th>";
	   echo "<th>";echo "email";echo "</th>";
	   echo "<th>";echo "user_uid";echo "</th>";
	   echo "<th>";echo "address";echo "</th>";
	   echo "<th>";echo "license";echo "</th>";
	   echo "<th>";echo "training";echo "</th>";
	   echo "<th>";echo "authority";echo "</th>";
	   
	    echo "</tr>";
		$sql="SELECT * FROM Staff WHERE user_first='$first' OR user_last='$last'";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	   if($resultCheck>0){
	   while($row=mysqli_fetch_assoc($result)){
		  echo "<tr>";
		  
		  echo "<td>";echo "<center>";echo $row['user_first']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['user_last'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['staffId'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['deptId'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['mobileNo'];echo "</center>";echo "</td>";
		   echo "<td>";echo "<center>";echo $row['designation']; echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['email'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['user_uid'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['address'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['license'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['training'];echo "</center>";echo "</td>";
		  echo "<td>";echo "<center>";echo $row['authority'];echo "</center>";echo "</td>";
		   echo "</tr>";
		  }
	  }
	   echo "</table>";
	   echo "</center>";
	  }
else{
	 header("Location: ../signup.php?signup=notfound");
	          exit();
}
?>