<?php
define("PI",3.14);
// Funkcija za racunanje povrsine pravougaonog bazena
function rectangleArea($a,$b){
    $area=$a*$b;
    return $area;
}
// Funkcija za racunanje povrsine okruglog bazena
function circleArea($r){
    $area=pow($r,2)*PI;
    return $area;
}

//Funkcija za racunanje povrsine pravougaonog bazena sa polukrugom
function plazmaArea($a,$b){
    $r = $b/2;
    $rectangle = rectangleArea($a,$b);
    $halfCircle = circleArea($r)/2;
    $area = $rectangle + $halfCircle;
    return $area;

}
// Funkcija za racunanje povrsine sva 3 bazena

function poolsArea($plazmaA,$plazmaB,$a,$b,$r){
    $plazmaArea = plazmaArea($plazmaA,$plazmaB);
    $rectangle = rectangleArea($a,$b);
    $circle = circleArea($r);
    $allPoolsArea = $plazmaArea + $rectangle +$circle;
    return $allPoolsArea;
}
//Ispis
echo "Povrsina pravougaonika je:". rectangleArea(10,2)."<br>";
echo "Povrsina kruga je:". circleArea(5)."<br>";
echo "Povrsina Plazma bazena je:". plazmaArea(10,4)."<br>";
echo"-----------------------------------------------------<br>";
echo "Povrsina svih bazena je :".number_format(poolsArea(10,4,10,2,5),2);