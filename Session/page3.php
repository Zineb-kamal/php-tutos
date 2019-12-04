<?php 
   session_start();
   unset($_SESSION["input"]);
   $name=isset($_SESSION["input"]) ? $_SESSION["input"] : "Nowww??" ;
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
</body>
</html>