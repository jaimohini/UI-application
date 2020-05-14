<?php
   include_once 'header1uoh.php';
?>
<head>
  <title>Index</title>
  <link rel="stylesheet" type="text/css" href="indexcss.css">
 </head>
	<section class="main-container">
	  <div class="main-wrapper">
	    <h2>University Of Hyderabad<h2>
		<?php
		  if(isset($_SESSION['u_uid'])){
			  echo '<a href="transportheader.php">Welcome</a>';
		  }
		?>
	  </div>
	</section>
	
<?php
   include_once 'footer.php';
?>
	