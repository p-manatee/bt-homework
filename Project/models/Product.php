<?php
    class Product{
        private $id;
        private $title;
        private $description;
        private $price;
        private $barcode;
        private $stock;
        private $image;
        private $category_id;
        // Constructor
        // public function __construct($product)
        // {
        //     $this->id = $product->id;
        //     $this->title = $product->title;
        //     $this->description = $product->description;
        //     $this->price = $product->price;
        //     $this->barcode = $product->barcode;
        //     $this->stock = $product->stock;
        //     $this->image = $product->image;
        //     $this->category_id = $product->category_id;
        // }
        // SETTERS
        public function setId($id){
            $this->id = $id;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        public function setDescription($description){
            $this->description = $description;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function setBarcode($barcode){
            $this->barcode = $barcode;
        }
        public function setStock($stock){
            $this->stock = $stock;
        }
        public function setImage($image){
            $this->image = $image;
        }
        public function setCategoryId($category_id){
            $this->category_id = $category_id;
        }

        // GETTERS
        public function getId(){
            return $this->id;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getBarcode(){
            return $this->barcode;
        }
        public function getStock(){
            return $this->stock;
        }
        public function getImage(){
            return $this->image;
        }
        public function getCategory(){
            return $this->category_id;
        }
        

        // GET ALL PRODUCTS
        public static function getAllProducts($searchTerm="",$orderBy="",$currentPAgeNum=1)
        {   
            $limit=6;
            $order ="";
            $search="";
            if(!is_numeric($currentPAgeNum)){
                $currentPAgeNum=1;
            }
            if($currentPAgeNum==1){
            $offset = 0;
        }else{
            $offset = ($currentPAgeNum-1)*$limit;
        }
        if($orderBy!=""){
            if($orderBy=="price-asc"){
                $order ="ASC";
            }
            if($orderBy=="price-desc"){
                $order ="DESC";
            }
        }
        if($searchTerm!=""){
            $search=$searchTerm;
        }
            
            $allProducts = array("products"=>array(),"number-of-products"=>0);
            $conn = Database::getInstance();
            $query = "SELECT * FROM products";
            if($search!=""){
                $query.=" WHERE title like CONCAT( '%', :title, '%') OR description like CONCAT( '%', :description, '%')";
            }
            if($order!=""){
                $query.=" ORDER BY price $order";
            }
            $query.=" LIMIT $limit OFFSET $offset";
            // echo $query;
            $stmt = $conn->prepare($query);
            if($search!=""){
                $search1=$search;
            $stmt->bindValue(':title',$search,PDO::PARAM_STR);
            $stmt->bindValue(':description',$search1,PDO::PARAM_STR);
            
            }
            $status = $stmt->execute();
            if ($status) {
                while ($rows = $stmt->fetchObject()) {
                    $product = new Product();
                    $product->setId($rows->id);
                    $product->setTitle($rows->title);
                    $product->setDescription($rows->description);
                    $product->setPrice($rows->price);
                    $product->setBarcode($rows->barcode);
                    $product->setStock($rows->stock);
                    $product->setImage($rows->image);
                    $product->setCategoryId($rows->category_id);
                    // $allProducts["products"][] = new self($rows);
                    $allProducts["products"][] = $product;
                }
                
            }
            // Lets count all products that match the statement in the database
            $query2 = "SELECT COUNT(*) FROM products";
            if($search!=""){
                $query2.=" WHERE title like CONCAT( '%', :title1, '%') OR description like CONCAT( '%', :description1, '%')";
            }
            $stmet2 = $conn->prepare($query2);
            if($search!=""){
                $search2=$search;
                $search3=$search;
            $stmet2->bindValue(':title1',$search2,PDO::PARAM_STR);
            $stmet2->bindValue(':description1',$search3,PDO::PARAM_STR);
            
            }
            $status2 = $stmet2->execute();
            $res=$stmet2->fetchColumn();
            if($status2){
                $allProducts["number-of-products"] = $res;
            }
            return $allProducts;
        }
        // GET POPULAR PRODUCTS
        public static function getPopularProducts(){
            $popularProducts = [];
            $conn = Database::getInstance();
            $query = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
            $stmt = $conn->prepare($query);
            $status = $stmt->execute();
            if ($status) {
                while ($rows = $stmt->fetchObject()) {
                    // $popularProducts[] = new self($rows);
                    $product = new Product();
                    $product->setId($rows->id);
                    $product->setTitle($rows->title);
                    $product->setDescription($rows->description);
                    $product->setPrice($rows->price);
                    $product->setBarcode($rows->barcode);
                    $product->setStock($rows->stock);
                    $product->setImage($rows->image);
                    $product->setCategoryId($rows->category_id);
                    // $allProducts["products"][] = new self($rows);
                    $popularProducts[] = $product;
                }
            }
            return $popularProducts;
        }
        // GET ONE PRODUCT BY ID
        public static function getProductById($id){
            $conn = Database::getInstance();
            $query = "SELECT p.id,p.price,p.image,p.title, p.description, p.barcode, p.stock, p.category_id,cat.title as category,cat.id as cat_id from products p INNER JOIN categories cat ON p.category_id = cat.id WHERE p.id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':id',$id,PDO::PARAM_STR);
            $status = $stmt->execute();
            $res=$stmt->fetchObject();
            if($status){
                return $res;
            }
        }
        // GET RELATED PRODUCTS
        public static function getRelatedProducts($id,$catID){
            $relatedProducts=[];
            $conn = Database::getInstance();
            $query = "SELECT * FROM products where category_id=:catID and id <> :ID ORDER by rand() limit 3";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':catID',$catID,PDO::PARAM_STR);
            $stmt->bindValue(':ID',$id,PDO::PARAM_STR);
            $status = $stmt->execute();
            if ($status) {
                while ($row = $stmt->fetchObject()) {
                    $relatedProducts[] = $row;
                }
            }
            return $relatedProducts;
        }
        // GET PREVIOUS RELATED PRODUCT BASE ON PRODUCT ID
        public static function getPreviousProductID($id){
            $conn = Database::getInstance();
            $id1=$id;
            $query = "SELECT id from products where id<:id and category_id= (SELECT category_id from products WHERE id = :id1) order by id desc limit 1;";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':id',$id,PDO::PARAM_STR);
            $stmt->bindValue(':id1',$id1,PDO::PARAM_STR);
            $status = $stmt->execute();
            $res = $stmt->fetchColumn();
            if($stmt->rowCount()==1){
                $previousId = $res;
            }else{
                $query2 = "SELECT id from products Where category_id=(SELECT category_id from products WHERE id = :id) order by id desc limit 1;";
                $stmt1 = $conn->prepare($query2);
                $stmt1->bindValue(':id',$id,PDO::PARAM_STR);
                $status1 = $stmt1->execute();
                $res2 = $stmt1->fetchColumn();
                if($stmt1->rowCount()==1){
                    $previousId = $res2;
                }
            }
            return $previousId;        
        }
        // GET NEXT RELATED PRODUCT BASE ON PRODUCT ID
        public static function getNextProductID($id){
            $conn = Database::getInstance();
            $id1=$id;
            $query = "SELECT id from products where id>:id and category_id= (SELECT category_id from products WHERE id = :id1) order by id asc limit 1;";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':id',$id,PDO::PARAM_STR);
            $stmt->bindValue(':id1',$id1,PDO::PARAM_STR);
            $status = $stmt->execute();
            $res = $stmt->fetchColumn();
            if($stmt->rowCount()==1){
                $nextId = $res;
            }else{
                $query2 = "SELECT id from products Where category_id=(SELECT category_id from products WHERE id = :id) order by id asc limit 1;";
                $stmt1 = $conn->prepare($query2);
                $stmt1->bindValue(':id',$id,PDO::PARAM_STR);
                $status1 = $stmt1->execute();
                $res2 = $stmt1->fetchColumn();
                if($stmt1->rowCount()==1){
                    $nextId = $res2;
                }
            }
            return $nextId;        
        }
     }
    
?>