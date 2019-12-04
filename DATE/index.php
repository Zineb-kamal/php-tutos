<?php
 echo date('d');//DAY
 echo '<br>';
 echo date('m');//MONTH
 echo '<br>';
 echo date('y');//YEAR
 echo '<br>';
 echo date('l');//DAY OF THE WEEK
 echo '<br>';


 //echo date('y/m/d');
 //echo date('m-d-y');
  
  /*echo date('h');//HOUR
  echo date('i');//MIN
  echo date('s');//SECONDS
  echo date('a');// AM or PM*/

// SET TIME Zone
  //date_default_timezone_set('America/New_York');
  //echo date('h:i:sa');

  $timestamp=mktime(10,14,9);
  //echo $timestamp;
  //echo date('m/d/y h:i:sa',$timestamp);
  
  $timestamp2=strtotime('7:00pm March 22 2016');
  $timestamp3=strtotime('tomorrow');
  $timestamp4=strtotime('next Sunday');
  $timestamp5=strtotime('+2 Months');


$dt=date('y/m/d');

$dt2=strtotime('next Sunday');
  echo date('m/d/y h:i:sa',$dt2);
?>