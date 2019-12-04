<?php 
 //setcookie('name','jawad',time()+(86400*30));
 /*if(count($_COOKIE)>0)
 {
 	echo " there are ".count($_COOKIE)." cookies <br>";
 }else{
 	echo "there are no cookies saved <br>";
 }
 
  if(isset($_COOKIE['name'])){
  	echo 'User '.$_COOKIE['name'];
  }else{
  	echo'Use ';}*/
 $user=['name'=>'brad','age'=>32,'email'=>'zineb@gmail.com'];
 $info=serialize($user);
 setcookie('info',$info);
 //echo $info;
 $user=unserialize($_COOKIE['info']);
 echo $user['name'];




?>