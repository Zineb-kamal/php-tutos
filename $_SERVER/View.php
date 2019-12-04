<?php include('index.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<h3 class="text-info">Server Info :</h3>
  	<?php if($server):?>
  	<ul class="list-group">
  	<?php foreach($server as $key =>$value):?>
  		<li class="list-group-item">
  			<strong><?php echo $key;?> :</strong>
  			<?php echo $value;?>
  		</li>
  	  <?php endforeach;?>
    </ul>
<?php endif; ?>
<h3 class="text-info">Client Info :</h3>
  	<?php if($client):?>
  	<ul class="list-group">
  	<?php foreach($client as $key =>$value):?>
  		<li class="list-group-item">
  			<strong><?php echo $key;?> :</strong>
  			<?php echo $value;?>
  		</li>
  	  <?php endforeach;?>
    </ul>
<?php endif; ?>
  </div>
</body>
</html>