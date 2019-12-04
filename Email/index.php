<?php
//CHeck for Submit
$msg="";
$alert="";
if(filter_has_var(INPUT_POST, 'submit')) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//Check Required Fields
	if(!empty($name) && !empty($email) && !empty($message)){
		if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
			$msg="Please use a valid email";
            $alert="alert-danger";
		}else{
			//Passed
			$toEmail="zinebkamal073@gmail.com";
			$toSubject='Contact Request from'.$name;
			$body='<h2>Contact Request</h2>
	               <h4>Name </h4><p>'.$name.'</p>
	               <h4>Email </h4><p>'.$email.'</p>
	               <h4>Message </h4><p>'.$message.'</p>';
	        //Email Headers
	        $Headers="MIME-Version: 1.0"."\r\n";
	        $Headers.="Content-Type:text/html;charset=UTF-8"."\r\n";
	        //Additional Headers
	        $Headers.="From:".$name."<".$email.">"."\r\n";
	        //sent email
	            if(mail($toEmail, $toSubject, $body,$Headers)){
	        	    $msg="Your email has been sent";
		            $alert="alert-success";
	            }else{
                    $msg="Your Email was not sent";
                    $alert="alert-danger";}
	           }
	}else{
      $msg="Please fill in all fields";
      $alert="alert-danger";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-default bg-dark">
    	<div class="container">
    		<div class="navbar-header ">
    		<a href="" class="navbar-brand text-muted">My Website</a>
    	</div>
    	</div>
    	<
    </nav>
    <div class="container">
    	<?php
    	 if($msg!=""){
    	 	echo '<div class="container"><div class="row " >
    		<div class="col-md-6 offset-3"><div class="alert '.$alert.' ">'.$msg.'</div></div></div>
    	</div>';
    	}
    	?>
    	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    		<div class="form-group">
    			<label for="name">Name :</label>
    			<input type="text" name="name"class="form-control" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
    		</div>
    		<div class="form-group">
    				<label for="email">Email :</label>
    				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
    		</div>
    		<div class="form-group">
    			<label for="message">Message :</label>
    			<textarea  name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?>"</textarea> 
    		</div>
    		<button type="Submit" class="btn btn-success "name="submit" >Envoyer</button>	
    	</form>
    </div>
</body>
</html>