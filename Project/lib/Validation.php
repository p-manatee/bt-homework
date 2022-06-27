<?php
    class Validation{
        /**
        * Set of functions that validate input fields
        */
        public static function validateFirstName($firstName){
            $returnArray=array();
             if(empty($firstName) || $firstName=""){
                 $returnArray['NameError'] = 'First name can not be empty!';
             }
             return $returnArray;
        }

        public static function validateLastName($lastName){
            $returnArray=array();
             if(empty($lastName) || $lastName=""){
                 $returnArray['LastNameError'] = 'Last name can not be empty!';
             }
             return $returnArray;
        }

        public static function validateEmail($email){
            $returnArray=array();
             if(empty($email) || $email="" || !str_contains($email,"@") || str_contains($email," ")){
                 $returnArray['EmailError'] = 'Email can not be empty,it must contain @ nad can not have spaces in between!';
             }
             return $returnArray;
        }

        public static function validateCity($city){
            $returnArray=array();
             if(empty($city) || $city=""){
                 $returnArray['CityError'] = 'City name can not be empty!';
             }
             return $returnArray;
        }

        public static function validatePhone($phone){
            $returnArray=array();
             if(empty($phone) || $phone="" || strlen($phone)<9 || strlen($phone)>11 || !is_numeric($phone) ){
                 $returnArray['PhoneError'] = 'Phone can not be empty, number of digits is between 9 and 11 and it must contain only numbers!';
             }
             return $returnArray;
        }

        public static function validateStreet($street){
            $returnArray=array();
             if(empty($street) || $street=""){
                 $returnArray['StreetError'] = 'Street can not be empty!';
             }
             return $returnArray;
        }

        public static function validateZip($zip){
            $returnArray=array();
          
             if(empty($zip) || $zip="" || str_contains($zip," ")){
                 $returnArray['ZipError'] = 'Zip can not be empty,and can not have spaces in between!';
             }
             return $returnArray;
        }

        public static function validatePolicy($policy){
            $returnArray=array();
             if(empty($policy) || $policy=""){
                 $returnArray['PolicyError'] = 'In order for this purhase to be completed you must agree to our terms of service!';
             }
             return $returnArray;
        }


    }
?>