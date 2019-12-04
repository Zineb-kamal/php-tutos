<?php 
if(isset($_POST['submit']))
{
 $name=htmlentities($_POST['name'])	;
 setcookie('name',$name,time()+3600);
 header('location:index2.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php  echo $_SERVER['PHP_SELF'];?>">
		<div>
			<label for="name">Name :</label>
			<input type="text" name="name">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
		</div>
		<button type="submit" name="submit">Submit</button>
	</form>
	

</body>
</html>