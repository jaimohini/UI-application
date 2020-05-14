<!DOCTYPE html>
<html>
 <head>
  <title>PartDetails</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<section class="main-container">
	  <div class="main-wrapper">
	    <h2>PART DETAILS</h2>
		<form class="signup-form4" action="includes/partdetails.inc.php" method="POST">
	        <input type="text" name="partno" placeholder="Part Number"><br>
			<input type="text" name="partname" placeholder="Part Name"><br>
	        <input type="text" name="quantity" placeholder="Quantity"><br>
			<button type="submit" name="insert">Insert</button>
			<button type="submit" name="search">Search</button>
			<button type="submit" name="view">View</button>
			<button type="submit" name="delete">Delete</button><br>
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
	