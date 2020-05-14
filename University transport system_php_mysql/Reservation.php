<!DOCTYPE html>
<html>
 <head>
  <title>reservation</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<section class="main-container">
	  <div class="main-wrapper">
	    <h2>RESERVATION FORM</h2>
		<form class="signup-form3" action="includes/reservation.inc.php" method="POST">
	        <input type="text" name="formno" placeholder="Form Number"><br>
			<input type="text" name="staffId" placeholder="Staff ID"><br>
	        <input type="text" name="deptId" placeholder="Department Id"><br>
	        <input type="text" name="vehicleNo" placeholder="Vehicle Number"><br>
	        <input type="text" name="booking" placeholder="Booking Date"><br>
	        <input type="text" name="booktime" placeholder="Booking Time"><br>
			<input type="text" name="destination" placeholder="Destination"><br>
	        <input type="text" name="purpose" placeholder="Purpose"><br>
			<input type="text" name="dristaffid" placeholder="Driver Staff ID"><br>
			<button type="submit" name="insert">Insert</button>
			<button type="submit" name="search">Search</button>
			<button type="submit" name="delete">Delete</button>
			 <?php
	          echo'
	          <button name="close" type="submit" value="submit">
	          <a href="transportheader.php" style="color:white">Close</a></button>';
             ?>
	    </form>  
	  </div>
	</section>
<?php
   include_once 'footer.php';
?>
	