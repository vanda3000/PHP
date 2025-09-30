/*Реализовать класс ParkingLot для управления парковкой — рядом из size мест (по 1 метру каждое).
Мотоцикл занимает 1 место, автомобиль — 2, фургон — 3 (всегда подряд).
Машины паркуются как можно ближе к началу (доку).
После парковки машина не перемещается.
Нужно реализовать два метода:
park(vehicle) — припарковать, вернуть true/false.
retrieve(license) — убрать машину по номеру, вернуть true/false.
*/

class ParkingLot {
  public $size;
	public $spots;
  
  public function __construct($size) {
    $this->size = $size;
		$this->spots =  array_fill(0, $size, null);
  }
  
  public function park(Vehicle $vehicle): bool {
    if ($vehicle instanceof Bike) {
        $need_size = 1;
    } else if ($vehicle instanceof Car) {
        $need_size = 2;
    } else if ($vehicle instanceof Van) {
        $need_size = 3;
    }

    for ($i = 0; $i <= $this->size - $need_size; $i++) {
        $parking = true;
        for ($j = 0; $j < $need_size; $j++) {
            if ($this->spots[$i + $j] !== null) {
                $parking = false;
                break;
            }
        }
        if ($parking) {
            for ($j = 0; $j < $need_size; $j++) {
                $this->spots[$i + $j] = $vehicle;
            }
            return true;
        }
    }
    return false;
  }
  
  public function retrieve(string $license): bool {
    $leaving = false;
		$numb_spot=-1;
		for ($i=0; $i<$this->size; $i++){
      if ($this->spots[$i] !== null && $this->spots[$i]->license === $license){
				$numb_spot = $i;
				break;
			} 
		}
		if ($numb_spot==-1) {return false;} 
		
		if ($this->spots[$i] instanceof Bike) {
			$need_size = 1;
		} else if ($this->spots[$i] instanceof Car) {
			$need_size = 2;
		} else if ($this->spots[$i] instanceof Van) {
			$need_size = 3;
		}
		for ($i = $numb_spot; $i < $numb_spot + $need_size && $i < $this->size; $i++) {
        $this->spots[$i] = null; 
    }
    return true;
  }
}
