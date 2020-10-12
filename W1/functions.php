<?php 

function drivingAge($age){
   
    if ($age < '16') 
    {
     
        echo 'If you are' . ' ', $age , ' ' . 'you need an adult to drive.';

    } else 
    {
        echo 'If you are' . ' ', $age , ' ' . 'you are old enough to drive without an adult.';
    }
}



function fizzBuzz($i){
   
    if ($i % 2 === 0){
        echo 'fizz';
    }
    elseif ($i % 3 === 0){
        echo 'buzz';
    }elseif ($i % 2 & $i % 3){
        echo 'fizzbuzz';
    }else{
        echo $i;
    }
    echo "<br>";
}


  ?>



