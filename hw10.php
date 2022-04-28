<?php

// Task 1

$num1 = 200;
$num2 = 80;
$sum = $num1 + $num2;
$substraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
echo '<div style="border:2px solid gray;padding:20px; width:50%; margin:20px auto">';
echo "<h2>Zadatak 1</h2>";
echo "Suma brojeva $num1 i $num2 je: $sum <hr>";
echo "Razlika brojeva $num1 i $num2 je: $substraction <hr>";
echo "Proizvod brojeva $num1 i $num2 je: $multiplication <hr>";
echo "Kolicnik brojeva $num1 i $num2 je: $division <hr>";
echo "</div>";

// End of Task 1


// Task 2

$rand = mt_rand(0, 6);
echo '<div style="border:2px solid gray;padding:20px;width:50%;margin:20px auto"">';
echo "<h2>Zadatak 2</h2>";
switch ($rand) {
    case 0:
        echo "Danas je Nedelja!";
        break;
    case 1:
        echo "Danas je Ponedeljak!";
        break;
    case 2:
        echo "Danas je Utorak!";
        break;
    case 3:
        echo "Danas je Sreda!";
        break;
    case 4:
        echo "Danas je Cetvrtak!";
        break;
    case 5:
        echo "Danas je Petak!";
        break;
    case 6:
        echo "Danas je Subota!";
        break;
}
echo "</div>";

//End of Task 2


// Task 3

$a=2;
$b=6;
$c=9;
echo '<div style="border:2px solid gray;padding:20px;width:50%;margin:20px auto"">';
echo "<h2>Zadatak 3</h2>";
printf("Zbir brojeva %d, %d i %d je : %d ",$a,$b,$c,$a+$b+$c);
echo "</div>";

// End of Task 3



//Sa Funkcijama za prvi zadatak ne bih znao koje funkcije za matematicke operacije mislim rucno mnozenje, deljenje i ostalo zavrsava posao

//TASK 2 ... uzecu rucno dva random broja umesto mt_rand funkcije i uradicu sa if else posto sam u prethodnom slucaju uradio sa case switch

$rand2 = 4;
echo '<div style="border:2px solid gray;padding:20px;width:50%;margin:20px auto"">';
echo "<h2>Zadatak 2 sa if else</h2>";
if($rand2 == 0){
    echo "Danas je Nedelja!";
}else if($rand2 == 1){
    echo "Danas je Ponedeljak!";
}
else if($rand2 == 2){
    echo "Danas je Utorak!";
}
else if($rand2 == 3){
    echo "Danas je Sreda!";
}
else if($rand2 == 4){
    echo "Danas je Cetvrtak!";
}
else if($rand2 == 5){
    echo "Danas je Petak!";
}
else if($rand2 == 6){
    echo "Danas je Subota!";
}
echo "</div>";

//Task 3 iskoristicu mt_rand posto sam u prethodnom primeru koristio hard cod vrednosti a za ispis cu raditi rucno posto sam koristio printf u prethodnom primeru
$x= mt_rand(1,10);
$y= mt_rand(1,10);
$z= mt_rand(1,10);
$sum2= $x+$y+$z;
echo '<div style="border:2px solid gray;padding:20px;width:50%;margin:20px auto"">';
echo "<h2>Zadatak 3 sa echo i mt_rand</h2>";

echo "Zbir brojeva $x, $y i $z je $sum2";

echo "</div>";