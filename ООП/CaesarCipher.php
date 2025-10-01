/*Write a class that, when given a string, will return an uppercase string with each letter shifted forward in 
the alphabet by however many spots the cipher was initialized to.

For example:
$c = new CaesarCipher(5);
$c->encode('Codewars'); // returns 'HTIJBFWX'
$c->decode('BFKKQJX'); // returns 'WAFFLES'
If something in the string is not in the alphabet (e.g. punctuation, spaces), simply leave it as is.
The shift will always be in range of [1, 26].
*/

class CaesarCipher{
	public $shift;
	public function __construct($shift){
		$this->shift = $shift;
	}
	
	public function encode($string){
		for ($i=0;$i<strlen($string);$i++){
    		if (ctype_alpha($string[$i])){
	        	$string[$i] = strtoupper($string[$i]);
	        	if ((ord($string[$i])+$this->shift)>90){
					$string[$i]=chr(ord($string[$i])+$this->shift-26);
				} else{
					$string[$i]=chr(ord($string[$i])+$this->shift);
				}
    		}
		}
		return $string;
	}
	
	public function decode($string){
		for ($i=0;$i<strlen($string);$i++){
			if (ctype_alpha($string[$i])){
        $string[$i] = strtoupper($string[$i]);
				if ((ord($string[$i])-$this->shift)<65){
					$string[$i]=chr(ord($string[$i])-$this->shift+26);
				} else{
					$string[$i]=chr(ord($string[$i])-$this->shift);
					
				}
			}
		}
		return $string;
	}
	

}
