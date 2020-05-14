<!DOCTYPE html>
<html>
 <head>
  <title>Maintainlog</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<section class="main-container">
   <div class="main-wrapper">
  <form class="signup-form3" action="includes/maintainlog.inc.php" method="POST">
   <center><br><br>
   <h2>Maintain Log Form</h2><br>
   <b>
  
	 <input type="text" name="formno" placeholder="Form Number"><br><br>
	 <input type="text" name="Vehicleid" placeholder="Vehicle ID"><br><br>
	 <input type="text" name="description" placeholder="Description"><br><br>
	 <input type="text" name="initialdate" placeholder="Initial Date"><br><br>
	 To be filled after completion:<br>
	 <input type="text" name="completiondate" placeholder="Completion Date"><br><br>
	 <input type="text" name="inspectorid" placeholder="Inspector ID"><br><br>
	 <button name="insert" type="submit" value="submit">Insert</button>
	 <button name="search" type="submit" value="submit">Search</button>
	 <button name="delete" type="submit" value="submit">Delete</button><br><br>
	  <?php
	          echo'
	          <button name="close" type="submit" value="submit">
	          <a href="transportheader.php" style="color:white">Close</a></button>';
             ?>
	 <button name="view" type="submit" value="submit">View All</button>
	 <?php
	          echo'
	          <button name="view" type="submit" value="submit">
	          <a href="maintaindetail.php" style="color:white">Go to Maintain Details </a></button>';
             ?>
	 
	 
     </center>
	 </form>
	 </section>
   </div>
	 </body>
	 </html>