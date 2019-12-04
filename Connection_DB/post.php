<?php 
require('config.php');
require('DB.php');
//GET ID
$id=mysqli_real_escape_string($conn,$_GET['id']);
$query=mysqli_query($conn,'select * from posts where id='.$id);
//FETCH DATA
$post=mysqli_fetch_all($query,MYSQLI_ASSOC);
//FREE DATA
mysqli_free_result($query);
//Close COnn
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
    <a href="<?php echo ROOT_URL;?>" class="btn btn-default">Back</a>
		<h2>Post :</h2>
  <div class="well">
  	<h3> <?php echo $post['title'];?></h3>
  	<small>Created on <?php echo $post['created_at'];?>by
  		<?php echo $post['author'];?>
  	</small>
  	<p><?php echo $post['body'];?></p>
  	
  	</div>
 
  </div>
</body>
</html>