<?php 
#substr
#returns a position of a string

 //$str= substr('hello', 1);
//str(string,pos,posfinal)
//$str= substr('hello', 1,3);
 //$str= substr('hello', -1);
 //echo $str;


#strlen()
#returns the length of a string

//$str= strlen('hello');

#strpos()
#Finds the position of the first occurence of a sub string

//$str= strpos('hello','o');

#trim()
#Strips whitespace

//$str= ' hello';
//$trimed=trim($str);
//var_dump($trimed);

#strtolower
#Makes everything lowercase
#strtoupper
#Makes everything uppercase

//$str= strtolower('Hello');

#ucwrds()
#Capitalize every word

//$str= ucwords('hello');
//echo $str;

#str_replace()
#Replace all occurences of a search string wuth a replacement

//$text='helllo world';
//$output=str_replace('world', 'everyone', $text);
//echo $output;

#is_string()
#check if string

/*$text='helllo world';
$output=is_string($text);

echo $output;

$values=array(true,false,'abc',33,'33',23);
foreach ($values as  $value) {
	if(is_string($value)){
		echo $value;
	}
}*/

#gzcompress()
#Compresss a string

//$str='ffjhfuufo hhffdp  hghuisuuosdkodi)dpidsdkpsdpisdklsdpsodkdddpspdksdosidjsdsodjdsioddàipk';
$Compresss=gzcompress($str);
$original=gzuncompress($Compresss);
echo $original;

?>