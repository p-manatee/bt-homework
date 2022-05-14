<?php
function numberOfTrucks($totalFuel,$consumptionPerTruck,$condition = false){
    $arrayReturn = [];
    if(!$condition){
    $trucksNumber = $totalFuel/$consumptionPerTruck;
    array_push($arrayReturn,'false');
    array_push($arrayReturn, floor($trucksNumber));
        // Razlog zasto vracam array a ne samo jednu vrednsot je , zelim da na osnovu parametara u array-u vrsim uslovni ispis poruke
    return $arrayReturn;
    
    }else {
        $fuelLeft = $totalFuel - floor($totalFuel/$consumptionPerTruck)*$consumptionPerTruck;
        array_push($arrayReturn,'true');
        array_push($arrayReturn,$fuelLeft );
        return $arrayReturn;
    }
}

$trucks =  numberOfTrucks(103,4);
$message='';
 if($trucks[0] == 'false'){
    $message = "Broj kamiona koji moze da predje zadatu rutu je: ". $trucks[1];
 }else{
    $message = "Ostatak goriva je: ". $trucks[1]." L";
 }

 echo $message;