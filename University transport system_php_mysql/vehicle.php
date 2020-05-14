<!DOCTYPE html>
<html>
 <head>
  <title>vehicle</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <section class="main-container">
 <div class="main-wrapper">
  <form class="signup-form5" action="includes/vehicle.inc.php" method="POST">
   
   <h2>VEHICLE</h2><br>
   <b>
     <input type="text" name="vehicleNo" placeholder="vehicleNo"><br><br>
	 <input type="text" name="vehicleType" placeholder="vehicleType"><br><br>
	 <input type="text" name="color" placeholder="color"><br><br>
	 <button id="demo1" name="insert" type="submit" value="submit">Insert</button>
	 <button id="demo1" name="delete" type="submit" value="submit">Delete</button>
	 <button id="demo1" name="search" type="submit" value="submit">Search</button>
	 <button id="demo" name="view" type="submit" value="submit">View Vehicle</button>
	 <?php
	 echo'
	 <button name="close" type="submit" value="submit">
	 <a href="transportheader.php" style="color:white">Close</a></button>';
      ?>
	 </form>
	 </div>
	 </section>
	 </body>
	 </html>