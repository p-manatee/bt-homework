<?php
// // 1.Zadatak 
// Kreirati funkciju koja filtrira niz emailova i vraca samo emailove (za email smatrati da je ispravan ako sadrzi @).
function returnEmails($array){
    if(is_array($array)){
    $returnArray = array();
    foreach ($array as $element) {
        if(strpos($element,'@')){
            array_push($returnArray,$element);
        }
    }
    return $returnArray;
}else{
    return 'argument it is not array';
}
}
$a = 'string';
$testNiz = ['12321312','Marija','marija@googl.com','06434535','pera@pera.com'];
$mails = returnEmails($testNiz);
echo "<pre>";
print_r($mails);
echo "</pre>";

// 2.Zadatak 
// Kreirati funkciju koja vrsi racunske operacije svih elemenata prosledjenog niza. Funkcija prima 2 parametra: niz (podrazumevati da je niz brojeva) nad kojim se vrse operacije i karakter za operaciju koji je po defaultu = “+”;

function arrayCalculate($niz, $operand = '+'){
    
    $isNumber = true;
    if(is_array($niz) && count($niz) != 0){
        foreach ($niz as $element) {
            if(!is_numeric($element)){
                $isNumber = false;
            }
        }
    if(!$isNumber){
        return 'Array can only contain numbers!';
    }    
    if($operand == '+'){
        $returnSum = 0;
        foreach ($niz as $value) {
            $returnSum += $value;
        }
        return $returnSum;
    }elseif($operand == '-'){
        $returnSubstraction = $niz[0];
        if(count($niz)>1){
           for($i=1;$i<count($niz);$i++){
            $returnSubstraction -= $niz[$i];
           }
        }
        return $returnSubstraction;
        
     }
    elseif($operand == '*'){
        $returnAdd = 1;
         foreach ($niz as $value) {
         $returnAdd *= $value;
         }
         return $returnAdd;
     }
    elseif($operand == '/'){
        $returnDivision= $niz[0];
        $isZero = false;
        foreach ($niz as $value) {
            if($value == 0){
                $isZero = true;
            }
        }
        if($isZero){
            return 'Division by 0 is not acceptable';
        }
        if(count($niz)>1){
           for ($i=1; $i<count($niz) ; $i++) { 
               $returnDivision /=$niz[$i];
           }
        }
        return $returnDivision;
     }
    else{
         return 'Unesen Nevalidan operand';
     }

}else{
    return 'first argument must be an array,or array of minimum 1 element';
}
    }

$testNiz2 = [4,6];
echo arrayCalculate($testNiz2,'-');

// 3.Zadatak 
// Kreirati funkciju koja proverava da li u datom asocijativnom nizu postoji odredjeni kljuc. != array_key_exists().
function customArrayKeyExists($niz,$searchKey){
    $returnValue = false;
    if(is_array($niz) && count($niz) != 0){
        foreach ($niz as $key => $value) {
            if($key == $searchKey){
                $returnValue = true;
            }
        }
        return $returnValue;
    }else{
        return 'Invalid Array!';
    }
}

$food = [
    'fruit'=>'apple',
    'juice'=>'orange',
    'meat'=>'pork'
];

var_dump(customArrayKeyExists($food,'fruits'));
