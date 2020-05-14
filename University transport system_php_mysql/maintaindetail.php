<!DOCTYPE html>
<html>
 <head>
  <title>Maintaindetails</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <section class="main-container">
   <div class="main-wrapper">
  <form class="signup-form3" action="includes/maintaindetail.inc.php" method="POST">
   <center><br><br>
   <h2>Maintain Detail Form</h2><br>
   <b>
     <input type="text" name="serialno" placeholder="Serial Number"><br><br>
	 <input type="text" name="formno" placeholder="Form Number"><br><br>
	 <input type="text" name="partno" placeholder="Part Number"><br><br>
	 <input type="text" name="mechanicid" placeholder="Mechanic ID"><br><br>
	 <button name="insert" type="submit" value="submit">Insert</button>
	 <button name="back" type="submit" value="submit">Back</button>
     <button name="close" type="submit" value="submit">Close</button>
	 <button name="delete" type="submit" value="submit">Delete</button><br><br>
	 <button name="view" type="submit" value="submit">View Details</button>
	 </center>
	 </form>
	  </div>
	 </section>
  
	 </body>
	 </html>