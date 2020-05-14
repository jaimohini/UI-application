<?php
session_start();
if(isset($_POST['submit'])){
	include_once 'dbh2.inc.php';
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
  if(empty($uid)||empty($pwd)){
	header("Location: ../index1.php?login=empty");
    exit();}
  else{
	   $sql="SELECT * FROM staff WHERE user_uid='$uid' OR email='$uid'";
	   $result=mysqli_query($conn,$sql);
	   $resultCheck=mysqli_num_rows($result);
	if($resultCheck<1){
	   header("Location: ../index1.php?login=error1");
	   exit();
           }
    else{
		if($row=mysqli_fetch_assoc($result)){
		//dehashing the password
		$hashedPwdCheck=password_verify($pwd,$row['user_pwd']);
		if($hashedPwdCheck==false){
			header("Location: ../index1.php?login=error2");
	   exit();}
	     elseif($hashedPwdCheck==true){
			 //login the user here
			 $_SESSION['u_first']=$row['user_first'];
			 $_SESSION['u_last']=$row['user_last'];
			 $_SESSION['u_staffid']=$row['staffId'];
			 $_SESSION['u_deptid']=$row['deptId'];
			 $_SESSION['u_mobileno']=$row['mobileNo'];
			 $_SESSION['u_designation']=$row['designation'];
			 $_SESSION['u_email']=$row['email'];
			 $_SESSION['u_uid']=$row['user_uid'];
			 $_SESSION['u_address']=$row['address'];
			 $_SESSION['u_license']=$row['license'];
			 $_SESSION['u_training']=$row['training'];
			 $_SESSION['u_authority']=$row['authority'];
			  
			  header("Location: ../transportheader.php?login=success");
	          exit();
		}}
		}
	}
}
else{
	header("Location: ../index1.php?login=error3");
	exit();
}
?>