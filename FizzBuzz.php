<?php

for ($i = 1; $i<=100; $i++){
 if ($i %15 === 0){
     echo "FizzBuzz";
    }
   else if ($i% 3 === 0){
        echo "Fizz";
    }elseif ($i === 0){
        echo "Buzz";
    }else{
     echo $i;
    }
    echo PHP_EOL;
}
