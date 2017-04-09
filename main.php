
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Car Parking</title>
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>

<body>
<section class="container">
<header>
<section class="logo">
<p><center>CAR PARKING RESERVATION SYSTEM</center></p>
</section>
    <nav>
      <ul class="nav">
        <li><a href="index.php" class="icon home"><span>Home</span></a></li>
        <li class="dropdown">
          <a href="">Parking Zones</a>
          <ul class="large">
            <li><a href="region-1.php">DN nagar street</a></li>
            <li><a href="region-2.php">Amboli naka</a></li>
            <li><a href="region-3.php">R mall</a></li>
            <li><a href="region-4.php">Infiniti mall</a></li>
			<li><a href="region-5.php">Rinci motors</a></li>
          </ul>
        </li>
		 
		<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
   {
   echo  "<li><a href=\"your-car.php\">Reserve</a></li>";
   }
   else
   {
    echo "<li><a href=\"admin/index.php\">Admin Panel</a></li>";
   }
    ?>
     <li><a href="contact.php">Contact</a></li> 	
       
      </ul>
    </nav>
	<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
   if( isset( $_SESSION['email'] ) )
      {
	   $name = $_SESSION["name"];
   echo "<p class=\"LogOut\">". $name. " "."<a href=\"process-log-out.php\">Log Out</a></p>";
   }
    
?>
	

  </header>
</section>
</body>

</html>