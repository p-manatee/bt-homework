<?php
    // Napisati u SQL-u upite ka bazi:
    // 1 Za dobijanje svih boja koje su aktivne (status = 1), a dobiti ih sortirane po datumu kreiranja.
    // 1
    $sqlString1 = "SELECT * FROM colors WHERE clr_status=1 ORDER BY clr_created_at DESC;";
    // 2 Za dobijanje 5 bilo kojih bolja.
    // 2
    $sqlString2 = "SELECT * FROM colors ORDER BY rand() limit 5;";
    // 3 Za upis nove boje u bazu (proizvoljno odaberite vrednosti).
    // 3
    $sqlString3 = "INSERT INTO colors(id,clr_name,clr_hex_value,clr_status,clr_created_at, clr_updated_at) VALUES (NULL,'Orange','#FFA500','1',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);";
    // 4 Za promenu statusa. Sve boje koje su neaktivne postaviti da su aktivne (status = 0 => 1).
    // 4
    $sqlString4 = "UPDATE colors SET clr_status=1 WHERE clr_status=0; ";
    // 5 Za brisanje boje koja ima id 5. 
    // 5
    $sqlString5 = "DELETE FROM colors WHERE id=5;";
    // 6 Za bonus obrisati boju koja je najranije promenjena.
    // 6
    $sqlString6 = "DELETE FROM colors WHERE clr_updated_at = (SELECT MAX(clr_updated_at) from colors);";



    // 2.Zadatak
    // Odraditi prvu stvar iz PHP-a preko PDO klase.
    // OBZIROM DA JA IMAM NEKO SOLIDNO PREDZNANJE IZ PDO I CLASA, iskoristicu zadatak broj 2 kao vezbu za test pa cu da odradim sa klasama i pdo -om

    
    class DB {
        private static $dbHost = "localhost";
        private static $dbName = "homeworks";
        private static $dbUser = "root";
        private static $dbPass = "";
        public static function dbConnect(){
            
            $dns="mysql:host=".self::$dbHost.";dbname=".self::$dbName;
            $pdo = new PDO($dns,self::$dbUser,self::$dbPass);
            return $pdo;
        }
    }



    class Colors {
        private $db;
        private $id;
        private $allColors=[];
        private $colorName;
        private $hexValue;
        private $status;
        private $createdAt;
        private $updatedAt;

        //connect to db
        public function connectToDb(){
            $this->db = DB::dbConnect();
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        } 
        //function that gets all colors form database and inserts instances of class colors in array allColors
        public function getColorsFromDb(){
            $this->connectToDb();
            $sqlString = "SELECT * FROM colors WHERE clr_status=1 ORDER BY clr_created_at DESC";
            $colors = $this->db->query($sqlString);
            // var_dump($colors);
            foreach ($colors as $color) {
                // var_dump($color);
                // echo "<hr>";
                $newColor = new Colors();
                $newColor->setId($color->id);
                $newColor->setColorName($color->clr_name);
                $newColor->setHexValue($color->clr_hex_value);
                $newColor->setStatus($color->clr_status);
                $newColor->setCreatedAt($color->clr_created_at);
                $newColor->setUpdatedAt($color->clr_updated_at);
                $this->allColors[]=$newColor;
            }
        }


        // getters
        public function getAllColors(){
            return $this->allColors;
        }
        public function getDb(){
            return $this->db;
        }
        public function getId(){
            return $this->id;
        }
        public function getColorName(){
            return $this->colorName;
        }
        public function getHexValue(){
            return $this->hexValue;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getCreatedAt(){
            return $this->createdAt;
        }
        public function getUpdatedAt(){
            return $this->updatedAt;
        }

        // setters
        public function setId($id){
            $this->id=$id;
        }
        public function setColorName($name){
            $this->colorName = $name;
        }
        public function setHexValue($hex){
            $this->hexValue = $hex;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function setCreatedAt($created){
            $this->createdAt = $created;
        }
        public function setUpdatedAt($updated){
            $this->updatedAt = $updated;
        }
        

    }

 $colors = new Colors();
 $colors->getColorsFromDb();
 $allColors = $colors->getAllColors();
//  echo($allColors[0]->getColorName());
 foreach ($allColors as $color) {
     
    echo "Color name: ".$color->getColorName();
    echo " <span style='height:10px;width:50px;background-color:".$color->getHexValue().";display:inline-block;'></span>";
    echo "<br>";
 }

?>