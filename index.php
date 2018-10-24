<?php
/*
 *	We have an array. Find the second largest element, after the maximum. 
 *	Example: array(1, 2, 3, 4, 5, 5) - the maximum element is 5, after the maximum is 4.
 **/
$arr = array(10,1,2,3,4,5,10,5,8,5,7,8,9,7,2,9);

function first_way($arr) {
	$maxarr = [];
	foreach($arr as $elem){
		if( $elem < max($arr)) {
			$maxarr[] = $elem ;
		}
	}
	echo "first way: ";
	echo max($maxarr);
	echo "<br>";
}

function second_way($arr) {
	$arr = array_unique($arr);
	unset($arr[array_search(max($arr),$arr)]);
	echo "second way: ";
	echo max($arr);
}

first_way($arr);
second_way($arr);