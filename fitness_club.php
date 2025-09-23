<?php
    $input = readline();
    $numbers = array_map('intval', explode(' ', $input));
    
    $ch = 0;
    $nech = 0;
    $sum = 0;
    
    foreach ($numbers as $u) {
        if ($u % 2 == 0) {
            $ch++;
        } else {
            $nech++;
        }
        $sum += $u;
    }
    
    $srznach = ($ch + $nech) > 0 ? $sum / ($ch + $nech) : 0;
    
    echo "Количество четных чисел: $ch" . PHP_EOL;
    echo "Количество нечетных чисел: $nech" . PHP_EOL;
    echo "Среднее значение: $srznach" . PHP_EOL;
?>
