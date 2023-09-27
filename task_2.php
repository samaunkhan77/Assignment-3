<?php

function removeEvenNumbers($numbres){
    $result=array_filter($numbres, function($number){
        return $number%2!=0;
    });

    print_r($result);
    
}

$numbers=range(1,10);

removeEvenNumbers($numbers);

?>