<?php 
    function minutes($m) { 
        if (strpos($m, '11') !== false || strpos($m, '12') !== false || strpos($m, '13') !== false || strpos($m, '14') !== false) {
            $minutesName = " минут";
        } elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
            $minutesName = " минуты";
        } elseif (($m % 10) == 1) {
            $minutesName = " минута";
        } else {
            $minutesName = " минут";
        }
        
        return $minutesName;
    }    

    function goods($t) { 
        if (substr($t, -2) == 11 || substr($t, -2) == 12 || substr($t, -2) == 13 || substr($t, -2) == 14) {
            $goodsName = " товаров";
        } elseif ((($t % 10) >= 2) && (($t % 10) <= 4)) {
            $goodsName = " товара";
        } elseif (($t % 10) == 1) {
            $goodsName = " товар";
        } else {
            $goodsName = " товаров";
        }
        
        return $goodsName;
    }
    
    for ($t = 0; $t < 2000; $t++) {
        $n = goods($t);
        echo $t.$n."<br>";
    }

    for ($m = 0; $m < 2000; $m++) {
        $n = minutes($m);
        echo $m.$n."<br>";
    }
?>