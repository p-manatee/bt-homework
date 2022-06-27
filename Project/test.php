<?php
session_start();
    require_once 'models/Database.php';
    require_once 'models/Product.php';

 
 $allProducts = Product::getAllProducts();
 $popularProducts = Product::getPopularProducts();
//  var_dump($allProducts);
//  var_dump($popularProducts);

 $oneProduct = Product::getProductById('17');
//  var_dump($oneProduct);
//  if($oneProduct){
//     echo "jee";
//  }else{
//     echo "nee";
//  }

 $conn = Database::getInstance();
 $id = 30;
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
//  echo $stmt->rowCount();
//  var_dump($res);
echo $previousId;
