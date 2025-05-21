<?php

function outputTitle($Title){
   $output = null;

   if($Title){
    $output ="<h4>$Title je naslov te strani </h4>";
   } 

   return $output;
}

function sestej(int $a=0, int $b=0){
    if(is_numeric($a) && is_numeric($b) && ($a && $b)){
 return $a + $b;
    }
   else return 0;
}

/* imamo funkcijo kalkulator s parametri $a, $b, in vrednost (seštevanje, odštevanje, množenje, deljenje)*/

function calculator(int $a, int $b, $operacija){
    $output = null;

    if($operacija == 'seštevanje'){
        $output = $a+$b;
    } else if($operacija == 'odštevanje'){
        $output = $a-$b;
    }else if($operacija == 'deljenje'){
        $output = $a/$b;
    } else if($operacija == 'množenjee'){
        $output = $a*$b;
    } else{
        echo "Operacija ne obstaja";
    }
    return $output;
}

?>