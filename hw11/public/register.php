<?php

if(isset($_GET['register'])){
    if(!isset($_GET['name']) || empty($_GET['name'])){
        
        exit("Niste uneli Ime!");
    }else{
        $fname=$_GET['name'];
    }
    if(!isset($_GET['lname']) || empty($_GET['lname'])){
        
        exit("Niste uneli Prezime!");
    }else{
        $lname=$_GET['lname'];
    }
    if(!isset($_GET['gender']) || empty($_GET['gender'])){
        
        exit("Niste uneli Pol!");
    }else{
        $gender = $_GET['gender'];
    }
    if(!isset($_GET['email']) || empty($_GET['email'])){
        
        exit("Niste uneli Email!");
    }else{
        $email = $_GET['email'];
    }
    if(!isset($_GET['pass']) || empty($_GET['pass'])){
        
        exit("Niste uneli Password!");
    }else{
        $pass = $_GET['pass'];
    }
    $greeting;
    if($gender){
        if($gender == 'Male'){
            $greeting = 'Postovani';
        }
        if($gender == 'Female'){
            $greeting = 'Postovana';
        }
    }
    
    
    //konacan ispis
    echo "$greeting $fname $lname <br>
    Uspesno ste se registrovali na nasem sajtu.<br>
    Vasa lozinka je: $pass<br>
    Vas username je: $email<br>
    ";
    if(isset($_GET['courses'])){
        echo "Vasi odabrani kursevi su:<br> ";
        $coursesArray = $_GET['courses'];
        
            foreach($coursesArray as $course){
                echo $course."<br>";
            }
        
    }
   
    
}
