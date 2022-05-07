<?php
    if(isset($_POST['submit'])){
        if(isset($_POST['age'])){   
            if(empty($_POST['age'])){
            exit('Unos godina je obavezan!');
        }else{
            $age = $_POST['age'];   
        }
        }
        if(isset($_POST['occupation'])){
            if(empty($_POST['occupation'])){
                exit('Unos zanimanja je obavezan!');    
        }else{
            $occupation = $_POST['occupation'];   
        }
        }
        if(isset($_POST['weight'])){
            if(empty($_POST['weight'])){
                exit('Unos tezine je obavezan!');    
        }else{
            $weight = $_POST['weight'];   
        }
        }
        // handle logic here!
        $fitnees_ratio;
        $age_ratio;
        //conditionally set fitness ratio
        if($occupation == 'programer' ||  $occupation == 'administrativni radnik' || $occupation == 'menadzer'){
             $fitnees_ratio = 100;
        }else if($occupation == 'policajac' ||  $occupation == 'vojnik'){
            $fitnees_ratio = 200;
        }else if($occupation == 'sportista'){
            $fitnees_ratio = 300;
        }else{
            $fitnees_ratio = 150;
        }
        //conditionally set age ratio
        if($age >0 && $age <=3){
            $age_ratio = 1.9;
        }
        else if($age >=4 && $age <=10){
            $age_ratio = 1.5;
        }
        else if($age >=11 && $age <=18){
            $age_ratio =1.2;
        }
        else if($age >=19 && $age <=26){
            $age_ratio =1;
        }
        else if(($age >=27 && $age <=30) || ($age >=50 && $age <=60)){
            $age_ratio =0.8;
        }
        else if(($age >=31 && $age <=35) || ($age >=45 && $age <=49)){
            $age_ratio =0.7;
        }
        else if(($age >=36 && $age <=44) || ($age >60)){
            $age_ratio =0.6;
        }
        
     
        $max_calories = $fitnees_ratio * $weight * $age_ratio;

        echo "Maksimalni broj kalorija za vas u toku dana je: $max_calories";
     
    }
        


?>