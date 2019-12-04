<?php
if(isset($_POST['submit']))
{
	session_start();
	echo $_SESSION['input']=htmlentities($_POST['input']);
	header("location:page2.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="" href="../assets/css/bootstrap.min.css">
	<title>Parite2</title>
</head>
<body>
  <div class="container">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<input type="text" name="input"class="form-control"></input>
		<input type="submit"  value="submit" class="btn btn-primary " name="submit">
	</form>
  </div>

</body>
</html>