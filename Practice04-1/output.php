<?php
    require("input.php");
    
    for($i=0;$i<=99;$i++){
        if($million_array[$i]%3==0 & $million_array[$i]%5==0){
            echo "FizzBuzz";
        }
        elseif($million_array[$i]%3==0){
            echo "Fizz";
        }
        elseif($million_array[$i]%5==0){
            echo "Buzz";
        }
        else{
            print_r($million_array[$i]);
        }echo PHP_EOL;
    }
?>