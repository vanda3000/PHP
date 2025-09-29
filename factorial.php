//вычисление факториала с 1 до 12
<?php
function factorial($num) {
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	mb_internal_encoding('UTF-8');
	
	echo 'Факториал ' . $num . ' равен ';
	$res=1;
	if ($num==1){$res=0;}
	else if ($num==0 or $num>12){
		throw new RangeException("Число должно быть в пределах с 1 до 12");
	}
	else {
		while ($num != 0){
			$res=$res*$num;
			$num--;
		}
	}
	echo $res;
}

factorial(13)

?>
