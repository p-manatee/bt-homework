<?php
$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"]; 
//  a) Najpre u ovaj postojeci niz dodati vase ime
$name ="Laza";
if(!in_array($name,$hwArray)){
  
    array_push($hwArray,$name);
}
// b) Nakon toga dodati ime vase/g rodjaka/e na trecem mestu u nizu.---- ZNACI INDEX 2

$cousin = "Milos";
if(!in_array($cousin,$hwArray)){
  array_splice($hwArray,2,0,$cousin);        
}

// c) Nakon toga prebrojte koliko ucenika ima
$arrayCount = count($hwArray);
echo "Broj ucenika je $arrayCount <br>";
// d) Zatim dodati novog clana na pocetak niza
$newStudent = "Ana";
if(!in_array($newStudent,$hwArray)){
    array_unshift($hwArray,$newStudent);
}
print_r($hwArray);
// e) Zatim obrisati Danila iz niza
foreach($hwArray as $key=>$value){
    if($value == 'Danilo'){
        // unset($hwArray[$key]);
        array_splice($hwArray,$key,1);
    }
}
echo "<br> Niz bez Danila je";
print_r($hwArray);

// f) Zatim skloni sve duplirane clanove niza
$hwArray = array_unique($hwArray);
echo "<br> Niz bez duplikata je";
print_r($hwArray);
// f) 1 . Moja funkcija za ciscenje duplikata

function noDuplicates(array $array){
    $returnArray=array();
    foreach($array as $a){
        foreach ($returnArray as $value) {
            if($a==$value){
                continue 2;
            }
        }
        $returnArray[]=$a;
    }
    return $returnArray;
}

$myFunc = noDuplicates($hwArray);
echo "<br>MOJA FUJKCIJA___";
echo "<pre>";
print_r($myFunc);
echo "</pre>";

// ZADATAK 2 ----------------------------------------------------------------
$data = array(
    array(
    "name" => "Pera",
	"last_name" => "Peric",
	"age" => 28,
	"gender" => "male",
	"avg_rating" => 7.5,
	"married" => false,
	"courses" => ["laravel", "react", "jQuery"]
    ),
    array(
    "name" => "Laza",
    "last_name" => "Lazarevic",
    "age" => 38,
    "gender" => "male",
    "avg_rating" => 6,
    "married" => false,
    "courses" => ["php", "js", "salesforce"]
    ),
    array(
    "name" => "Ana",
    "last_name" => "Uskovic",
    "age" => 31,
    "gender" => "female",
    "avg_rating" =>8,
    "married" => false,
    "courses" => ["js", "laravel", "jQuery"]
    ),
    array(
    "name" => "Marija",
    "last_name" => "Makic",
    "age" => 28,
    "gender" => "female",
    "avg_rating" => 10,
    "married" => true,
    "courses" => ["Bootsrtap", "react", "jQuery"]
     ),
    array(
    "name" => "Darko",
    "last_name" => "Manic",
    "age" => 38,
    "gender" => "male",
    "avg_rating" => 7.5,
    "married" => true,
    "courses" => ["marketing", "wordPress", "jQuery"]
     ),
); 
$counter = 1;
foreach ($data as $student) {
    $message = '';
    $married = ($student['gender']=='male')?'ozenjen':'udata';
    $isIsntMarried = ($student['married']==true)?'jeste '.$married:'nije '.$married;
    $courses = '';
    if(is_array($student['courses'])){
        foreach($student['courses'] as $course){
            $courses.= $course.", ";
        }
    }
    //posto je zadnji zarez prvo cu da trimujem string sa desne strane i da skinem zadnji zarez
    $courses = rtrim($courses);
    if($courses[strlen($courses)-1]==','){
        $courses = substr($courses,0,strlen($courses)-1);
    }
    $message.=$student['name']." ".$student['last_name']." ima ".$student['age']." godina i ".$isIsntMarried.". Ima prosecnu ocenu ".$student['avg_rating'].", a kurseve koje trenutno slusa su :".$courses;
    echo $counter . ". ".$message,"<br>";
    $counter++;
}