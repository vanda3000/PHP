/*Write a function that checks whether all elements in a multidimensional array are square numbers. 
The function should be able to take any number of array elements and any number of dimensions.
Your function should return true if all elements are square numbers and false if not.*/

function is_square($array) {
  $ans = FALSE;
  if (count($array)==0){return null;}
	foreach ($array as $el){
		if (is_array($el)){
			is_square($el);
		} else {
			$res = sqrt($el);
			if ($res==(int)$res){
				$ans = TRUE;
			}
			else {$ans = FALSE;}
		}
	}
	
	return $ans;  
}
