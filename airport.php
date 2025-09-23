<?php
$flight = 'return';
$k=0;
$z=0;
$n=0;
$flights =[];
while ($flight!=NULL){
    $flight = readline();
    if (trim($flight)===''){
        continue;
    }
    
    $array = explode(" ", $flight);
    
    $number = $array[0];
    $time = $array[1];
    $status = $array[2];
    
    $flights[] = [
        'number' => $number,
        'time' => $time,
        'status' => $status
    ];       
}
echo "\nЗадержанные и отмененные рейсы:\n";
foreach ($flights as $flight) {
    if ($flight['status'] === 'задержан' || $flight['status'] === 'отменен') {
        if ($flight['status'] === 'задержан'){$z++;}
        else{$n++;}
        echo "Рейс {$flight['number']}, время вылета: {$flight['time']}\n";
    }elseif ($flight['status']=='вылетел'){
        $k++;
    }
}
echo PHP_EOL."Количество рейсов в каждом состоянии:".PHP_EOL."Вылетел: ".$k.PHP_EOL."Задержан: ".$z.PHP_EOL."Отменен: ".$n.PHP_EOL;

?>




