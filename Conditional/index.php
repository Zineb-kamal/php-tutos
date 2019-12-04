<?php  
  $loggedIn=true;
  //echo ($loggedIn) ? 'You are logged in':'You are Not logged';
  $islogged=($loggedIn==true) ? true:false;
 // echo $islogged;

 $age=20;
 $score=15;

 //echo 'Your score is:'.($score >10 ? ($age>10 ? 'Average':'Exceptional'):($age>10 ? 'Horrible':'Average'));

?>
<div>
	<?php if($loggedIn){?>
		<h1>Welcome User</h1>
	<?php	}?>
	<?php else{?>
		<h1>Welcome Guest</h1>
	<?php	}?>
	
</div>

<div>
	<?php if($loggedIn):?>
		<h1>Welcome User</h1>
	
	<?php else:?>
		<h1>Welcome Guest</h1>
	<?php	endif;?>
</div>