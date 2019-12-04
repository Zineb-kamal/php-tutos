<?php 
   session_start();
   $_SESSION['input']="jawad kamal";
   print_r($_SESSIN);
   $name=$_SESSION["input"];
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
 <?php echo '<h4>'.$name.'</h4>';?>
<a href="page3.php">Go to page3</a>
</body>
</html>