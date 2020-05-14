<!DOCTYPE html>
<html>
 <head>
  <title>department</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
<section class="main-container">
	  <div class="main-wrapper">
	    <h2>DEPARTMENT</h2>
		<form class="signup-form" action="includes/department.inc.php" method="POST">
	        <input type="text" name="deptid" placeholder="Department ID"><br>
			<input type="text" name="deptname" placeholder="Department Name"><br>
	        <input type="text" name="buildno" placeholder="Building Number"><br>
	        <input type="text" name="buildname" placeholder="Building Name"><br>
	        <input type="text" name="campus" placeholder="Campus"><br>
			<button type="submit" name="insert">Insert</button>
			<button type="submit" name="search">Search</button><br>
			<button type="submit" name="delete">Delete</button>
			<?php
			echo '
			<button type="submit" name="delete">
			<a href="transportheader.php" style="color:white">Close</a></button>';
			?>
	    </form>  
	  </div>
	</section>
<?php
   include_once 'footer.php';
?>
	