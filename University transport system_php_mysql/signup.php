<?php
   include_once 'header1uoh.php';
?>
	<section class="main-container">
	  <div class="main-wrapper">
	    <h2>StaffInfo</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
	        <input type="text" name="fname" placeholder="Firstname"><br><br>
	        <input type="text" name="lname" placeholder="Lastname"><br><br>
			<input type="text" name="staffId" placeholder="StaffId"><br><br>
	        <input type="text" name="deptId" placeholder="DeptId"><br><br>
	        <input type="text" name="mobileNo" placeholder="MobileNo"><br><br>
			<input type="text" name="designation" placeholder="Designation"><br><br>
	        <input type="text" name="email" placeholder="E-mail"><br><br>
	        <input type="text" name="uid" placeholder="Username"><br><br>
			<input type="text" name="address" placeholder="Address"><br><br>
	        <input type="password" name="pwd" placeholder="Set Password"><br>
			Only For UHTD Employee<br><br>
			<input type="text" name="license" placeholder="Driving License"><br><br>
			<input type="text" name="training" placeholder="Training Level"><br><br>
			<input type="text" name="authority" placeholder="Authority Level"><br><br>
	        <button type="submit" name="submit">Sign up</button>
			<button type="submit" name="search">Search</button>
			<button type="submit" name="delete">Delete</button>
	    </form>  
	  </div>
	</section>
<?php
   include_once 'footer.php';
?>
	