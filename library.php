<?php
$return = 'return';
$k=0;
while ($return!=NULL){
    $k++;
    $return = readline();
    if (trim($return)===''){
        continue;
    }
    
    $array = explode(" ", $return);
    
    $days = $array[0];
    $cost = $array[1];
    
    if ($days<=7){
        $fine = $cost*(0.05)*$days;
        echo "Возврат ".$k.": штраф ".$fine.PHP_EOL;
    } else {
        $fine = $cost*7*(0.05)+$cost*($days-7)*(0.1);
        echo "Возврат ".$k.": штраф ".$fine.PHP_EOL;
    }

    
}
?>
