<?php
/*
@Navneet Tyagi
These are for Star Pattern Program 
*/
$n=10;
function pattern1($n){
	global $n;
	for ($i=0; $i < $n; $i++) {
	echo str_repeat('*',$i);
	echo "<br>"; 
	}
}

function pattern2($n){
	global $n;
	$j=$n;
	for ($i=0; $i < $n; $i++) {
	echo str_repeat('&nbsp;&nbsp;',$i);
	echo str_repeat('*',$j);
	echo "<br>";
	$j--; 
	}
}
pattern1($n);
pattern2($n);
/*
Output :
*
**
***
****
*****
******
*******
********
*********
*/

?>