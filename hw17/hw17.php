<?php
// 1.Zadatak 
// Kreirati funkciju search_users($users, $searchContent = “”) koja iz niza asocijativnog niza trazi elemente i vraca niz filtriranih korisnika. Korisnici se pretrazuju ili po imenu ili po prezimenu.

/**
 * @param $niz array
 * @param $searchContetn string
 * @return mixed
 */
function search_users(array $niz, string $searchContent =''):mixed {
    if($searchContent==''){
        return $niz;
    }
    else {
      $returnArray =[];
      
      foreach ($niz as $key => $value) {
         if(strpos(strtolower($value['name']),strtolower($searchContent))!==false || strpos(strtolower($value['last_name']),strtolower($searchContent))!==false ){
             array_push($returnArray,$value);
             
         }   
      }
      return $returnArray;

    }
}

$testNiz = [
    [
	"name" => "Pera",
	"last_name" => "Miric",
	"img" =>"..."
    ],
    [
	"name" => "Mitar",
	"last_name" => "Peric",
	"img" =>"..."
    ],
    [
    "name" => "Ana",
    "last_name" => "Stankovic",
    "img" =>"..."
    ]
    ];

$call = search_users($testNiz,'pera');
echo "<pre>";
print_r($call);
echo "</pre>";




?>