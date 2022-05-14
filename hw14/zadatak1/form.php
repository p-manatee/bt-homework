<?php
require_once 'functions.php';

//Cela skritpa se parsuje samo ukoliko je setovan post[submit]
if(isset($_POST['submit'])){
//Provera da li se na fajl form.php dolazi sa form.html ukoliko to nije slucaj korisnik se vraca na pocetnu stranu(form.html)
    if(!isset($_POST['day']) || empty($_POST['day'])){
        die('Ova forma zahteva odabran dan!');
    }//Provera da li je dan broj i da li je veci od nule a manji od 32
    else{
        if(!is_numeric($_POST['day'])){
            die('Dan mora biti broj!');
        }
        if($_POST['day']<=0){
            die('Dan ne moze biti nula ili negativna vrednost');
        }
        if($_POST['day']>31){
            die('Mesec ima najvise 31 dan!');
        }
    }
    // Ukoliko su prosle sve provere vrsi se smestanje vednosti is superglobalen promenljive GET u varijablu
    $day = $_POST['day'];
   
// Ista provera za MESEC
    if(!isset($_POST['month']) || empty($_POST['month'])){
        die('Ova forma zahteva odabran Mesec!');
    }//Provera da li je dan broj i da li je veci od nule a manji od 32
    else{
        if(!is_numeric($_POST['month'])){
            die('Mesec mora biti broj!');
        }
        if($_POST['month']<=0){
            die('Mesec ne moze biti nula ili negativna vrednost');
        }
        if($_POST['month']>12){
            die('Gdina ima 12 meseci!');
        }
    }

     // Ukoliko su prosle sve provere vrsi se smestanje vednosti iz superglobalne promenljive GET u varijablu
     $month = $_POST['month'];

    // Ista provera za GODINE
    if(!isset($_POST['year']) || empty($_POST['year'])){
        die('Ova forma zahteva odabranu Godinu!');
    }//Provera da li Godina veca od 1973
    else{
        if(!is_numeric($_POST['year'])){
            die('Godina mora biti broj!');
        }
        if($_POST['year']<1973){
            die('Godina mora biti visa od 1972');
        }
       //pozivam funkciju iz functions.php koja racuna broj cifara u broju, jer zelim da vrsim proveru za godine koje imaju 4 cifre
      if(countDigits($_POST['year']) != 4){
          die('Za godine uzimamo u obzir samo one sa 4 cifara');
      } 
    }

     // Ukoliko su prosle sve provere vrsi se smestanje vednosti is superglobalen promenljive GET u varijablu
     $year = $_POST['year'];


    //Radimo proveru po danima i mesecima
    //Februar, uracunavamo i prestupne godine

    if($month == 2){
        if($year%4==0 && $day>29){
            die('U prestupnoj godini Februar ima 29 dana!');
        }
        if($year%4!=0 && $day>28){
            die('Februar ima 28 dana!');
        }
    }

    // Januar,Mart,Maj,Jyl,Avgust,Oktobar i Decembar ima 31 dan to je vec pokriveno
    //Pa se ovde radi provera za 30 dana za mesece April, Jun,Septembar, Novembar
    if(($month==4 || $month==6 || $month==9 || $month==11) && $day>30){
        die('ovaj mesec ima 30 dana!');
    }
    


    // Forma je prosla sve validacije za uneseni datum pa se ovde radi konacan ispis poruke korisniku
    echo "Datum je validan, odabran datum je: <br>";
     echo "Dan: ".$day."<br>";
     echo "Mesec: ".$month."<br>";
     echo "Godina: ".$year."<br>";

}
// Korisnik koji nije dosao sa form.html se redirektuje na tu stranu
else {
    header('Location: form.html');
}