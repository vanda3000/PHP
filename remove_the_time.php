//Write a function that takes the website date/time in its original string format and returns the shortened format. ()


<?php

function remove_the_time($date){
	$shdate = preg_replace('/,\s*\d+[ap]m$/', '', $date);
	echo $shdate;
}

remove_the_time('Friday May 2, 10am');
?>
