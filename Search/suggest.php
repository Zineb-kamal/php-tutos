<?php
//People Array
$people[]="hanane";
$people[]="Sreve";
$people[]="Kathy";
$people[]="Evan";
$people[]="Hal";
$people[]="zineb";
$people[]="kamal";
//Get query String
$q=$_REQUEST['q'];
$suggestion="";
//Get Suggestions
if($q!=="")
{
  $q=strtolower($q);
  $len=strlen($q);
	foreach ($people as $person) {
		if(stristr($q, substr($person,0 ,$len))){
			if($suggestion==="")
			{
				$suggestion=$person;
			}else{
				$suggestion.=",$person";
			}
		}
		# code...
	}
}
echo $suggestion===""?"no suggestion":$suggestion;