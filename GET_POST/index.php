<?php
if(isset($_GET['name'])){
	$name=$_GET['name'];
  //echo $_GET['name'];
}
/*if(isset($_POST['name']))
{
	//echo $_POST['name'];
	//echo htmlentities($_POST['name']);
	print_r($_POST);
	var_dump($_POST);
}
if(isset($_REQUEST['name']))
{
	echo $_REQUEST['name'];
	//echo htmlentities( $_REQUEST['name']);
	print_r( $_REQUEST);
	//var_dump( $_REQUEST);
}
echo $_SERVER['QUERY_STRING'];*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="index.php">
		<div>
			<label for="name">Name :</label>
			<input type="text" name="name">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
		</div>
		<button type="submit">Submit</button>
	</form>
	<ul>
		<li><a href="index.php?name=brad">BRAD</a>
        </li>
        <li><a href="index.php?name=zineb">ZINEB</a>
        </li>
     </ul>
     <h1><?php echo "{$name}'s Profile";?></h1>

</body>
</html>