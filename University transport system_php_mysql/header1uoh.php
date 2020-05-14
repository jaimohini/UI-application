<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>login/signup</title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>
  <body >
    <header>
	  <nav>
	    <div class="main-wrapper">
		  <ul>
		     <li><a href="index1.php">Home</a></li>
		  <ul>
		  <div class="nav-login">
		  <?php
		    if(isset($_SESSION['u_uid'])){
				echo '<form action="includes/logout.inc.php" method="POST">
			          <button type="submit" name="submit">Logout</button>
				
			          </form>';
			}
			else{
				echo '
		        <form action="includes/login.inc.php" method="POST">
			    <input type="text" name="uid" placeholder="Username/e-mail">
	            <input type="password" name="pwd" value="password">
	            <button type="submit" name="submit">login</button>
			    </form>
				<a href="signup.php">Sign up</a>';
			}
			?>
			
		  </div>
	    </div>
	   </nav>
	</header>
	</body>
	</html>