<?php
$num = 0;
for($num = 0; $num <= 50; $num++) {
  if($num %3==0){
    echo "Fizz";
  }elseif($num %5==0){
    echo "Buzz";
  }elseif($num %15==0){
    echo "FizzBuzz";
  }else{
    echo $num;
  }
}