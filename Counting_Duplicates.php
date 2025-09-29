/*Write a function that will return the count of distinct case-insensitive alphabetic 
characters and numeric digits that occur more than once in the input string. 
The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.*/

<?php

function duplicateCount($String) {
    $string = strtolower($String);
	
	$k = 0;
	
	foreach (count_chars($string, 1) as $i){
		if ($i>1){
			$k++;
		}
	}
  return $k;
}
