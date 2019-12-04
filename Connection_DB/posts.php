<?php 
require('config.php');
require('DB.php');
$query=mysqli_query($conn,'select * from posts');
//FETCH DATA
$posts=mysqli_fetch_all($query,MYSQLI_ASSOC);
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
		<h2>Posts :</h2>
<?php foreach($posts as $post) {?>
  <div class="well">
  	<h3> <?php echo $post['title'];?></h3>
  	<small>Created on <?php echo $post['created_at'];?>by
  		<?php echo $post['author'];?>
  	</small>
  	<p><?php echo $post['body'];?></p>
  	<a href="<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id'];?>" class="btn btn-default">Read More</a>
  	</div>
 <?php }?>
  </div>
</body>
</html>