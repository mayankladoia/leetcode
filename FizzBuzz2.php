<?php

echo "<b>Initial Requirement:</b> <br/><br/>";
echo "<u>FizzBuzz Output:</u> <br/>";

FizzBuzz();

function FizzBuzz(){

    for($i=1;$i<=100;){

        $tempFizz = fmod($i, 3);
        $tempBuzz = fmod($i, 5);

        if($tempFizz == 0 && $tempBuzz == 0){
            echo "FizzBuzz"."<br/>";
        }else{
            if($tempFizz==0){
                echo "Fizz"."<br/>";
            }elseif($tempBuzz==0){
                echo "Buzz"."<br/>";
            }else{
                echo $i."<br/>";
            }
        }

        $i++;
    }
}

echo "<br/><br/> <b>Extra Credit Requirement:</b> <br/><br/>";
echo "<u>FizzBuzz Output: </u><br/>";

FizzBuzzExtra();

function FizzBuzzExtra(){

    for($i=1;$i<=100;){

        if(strpos($i,'3') !== FALSE && strpos($i,'5') !== FALSE){
            echo "FizzBuzz"."<br/>";
        }else{
            if(strpos($i,'3') !== FALSE){
                echo "Fizz"."<br/>";
            }elseif(strpos($i,'5') !== FALSE){
                echo "Buzz"."<br/>";
            }else{
                echo $i."<br/>";
            }
        }

        $i++;
    }
}

?>