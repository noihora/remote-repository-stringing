<?php
$a=0;

while($a<=50){
    if($a % 15 == 0) {
        echo "FizzBuzz"."<br/>";
      } elseif ($a % 3 == 0) {
        echo "Fizz"."<br/>";
      } elseif ($a % 5 == 0) {
        echo "Buzz"."<br/>";
      }echo $a."<br/>";
        $a+=1;}