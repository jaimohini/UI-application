<!DOCTYPE html>
<html>
 <head>
  <title>TripCompletion</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <section class="main-container">
 <div class="main-wrapper"><center>
  <form class="signup-form3" action="includes/TripCompletion.inc.php" method="POST">
   <br><br>
   <h2>TRIP COMPLETION FORM</h2><br>
   <b>
         <input type="text" name="formno" id="odo" placeholder="Form Number"><br><br>
	    <input type="text" name="odometerStart" id="odo" placeholder="Odometer Start"><br><br>
        <input type="text" name="odometerEnd" id="ode" placeholder="Odometer End"><br><br>
	    <input type="text" name="fuelLiter" id="fuel" placeholder="Fuel Liter"><br><br>
	    <input type="text" name="uhCreditCardNo" id="uhc" placeholder="Credit Card No"><br><br>
	    <input type="text" name="complain" id="com"  placeholder="Complain"><br><br>
	    <button name="insert" type="submit" value="submit">Insert</button>
	    <button name="delete" type="submit" value="submit">Delete</button>
		 <button name="search" type="submit" value="submit">Search</button>
		 <?php
	          echo'
	          <button name="close" type="submit" value="submit">
	          <a href="transportheader.php" style="color:white">Close</a></button>';
             ?>
        </form></center>
	</section>
 </div>
	 </body>
	 </html>