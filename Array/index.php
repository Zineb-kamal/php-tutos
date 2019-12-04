<?php
 #Array -Variable that holds multipe values
 /* 
   -Indexed
   -Association
   -Muti-dimensional
 */
 //Indexed
    //$people= array('zineb','kamal','hafsa');
    //echo $people[2];
    //$people=['zineb','kamal','hafsa'];
     //echo $people[2];
    //$ids=array(23,34,22);
    //echo $ids[0];
    //print_r($people);
    //echo  '<br>';
    //var_dump($people);
 //Associative arrays
    $people=array('zineb'=>22,'hamza'=>21,'hayat'=>25);
    //echo $people['zineb'];
    $ads=[22=>'zineb',21=>'hayat'];
    //echo $ads[22];
 //Miltu-Dimensional
  $tab=array(
  	  array('houda',20,13),
  	  array('hayat',40,13),
  	  array('yahya',25,13)
  );
  echo $tab[1][1];
?>