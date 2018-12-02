<?php
    
    //Enter your code here, enjoy!
    
    function hello($s) {
        
        if ($s < 2) { return null;}
        $array = [];
        
        $array[10] = floor($s/10);
        $mod10 = $s % 10;
        if ($s > 10 && ($mod10 === 1 || $mod10 === 3)) {
            $array[10]--;
        }
        $s -= $array[10]*10;
        
        $array[5] = floor($s/5);
        $mod5 = $s % 5;
        if (($s > 5 && $s != 7 && $s != 9)  && ( $mod5 < 5 || $mod5 === 6 || $mod5 === 8 )) {
            $array[5]--;
        }
        $s -= $array[5]*5;
        
        if ($s % 2 === 1 ) {
            return null;
        }
        $array[2] = floor($s/2);
        
        return $array;
        
    }
    
    
    
    
    
    var_dump(hello(22));
