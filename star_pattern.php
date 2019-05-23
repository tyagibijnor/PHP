<?php
/*
Name:Navneet Tyagi
*/
$n=10;
function pattern1($n){
	for ($i=0; $i < $n; $i++) {
	echo str_repeat('*',$i);
	echo "<br>"; 
	}
}

function pattern2($n){
	$j=$n;
	for ($i=0; $i < $n; $i++) {
	echo str_repeat('&nbsp;&nbsp;',$i);
	echo str_repeat('*',$j);
	echo "<br>";
	$j--; 
	}
}

function pattern3($n){
	$j=$n;
	for ($i=0; $i < $n; $i++) {
		if($j<1) break;
	echo str_repeat('&nbsp;&nbsp;',$i);
	echo str_repeat('*',$j);
	echo "<br>";
	$j-=2; 
	}
}

function pattern4($n){
	$j=$n;
	for ($i=0; $i < $n; $i++) {
		if($j<1) break;
	echo str_repeat('*',$j);
	echo str_repeat('&nbsp;&nbsp;',$i);
	echo "<br>";
	$j--; 
	}
}


function pattern5($n){
	$j=$n;
	for ($i=0; $i < $n; $i++) {
		if($j<1) break;
	echo str_repeat('*',$j);
	echo str_repeat('&nbsp;&nbsp;',$i);
	echo "<br>";
	$j-=2; 
	}
}


pattern1($n);
pattern2($n);
pattern3($n);
pattern4($n);
pattern5($n);

?>