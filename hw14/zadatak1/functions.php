<?php 

//funkcija koja racuna broj cifara u broju
function countDigits($num){
    //za slucaj da je prosledjen string radim castovanje i (int)
    $num = (int)$num;
    $count = 0;
  
    while($num != 0){
      $num = (int)($num / 10);
      $count++;
    }
    return $count;
  }
  