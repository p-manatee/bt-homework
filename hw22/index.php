<?php
require_once 'db.php';

class User {
    private $db;
    public function connectToDb(){
        $this->db = Db::dbConnect();
    } 
    public function insertUser($name,$email,$password,$emailVerifiedAt=NULL,$createdAt=""){
        $this->connectToDb();
        $sql = "INSERT INTO users (name,email,password,email_verified_at,created_at) VALUES (:name,:email,:password,:emailVerifiedAt,:createdAt);";
        $stmt = $this->db->prepare($sql);
        $passwordHash = password_hash($password,PASSWORD_BCRYPT,['cost'=>12]);
        if ($createdAt=="") {
            $createdAt =  date('Y-m-d h:i:s');
        }
        $stmt->bindValue(':name',$name);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':password',$passwordHash);
        $stmt->bindValue(':emailVerifiedAt',$emailVerifiedAt);
        $stmt->bindValue(':createdAt',$createdAt);
        $stmt->execute();
        
    }
}


try {
    $user1 = new User();
    $user1->insertUser("Pera","pera@pera.com","1234");
    $user2 = new User();
    $user2->insertUser("Laza","laza@laza.com","1234");
    $user3 = new User();
    $user3->insertUser("Zika","zika@zika.com","1234");
    $user4 = new User();
    $user4->insertUser("Mika","mika@mika.com","1234");
    $user5 = new User();
    $user5->insertUser("Ana","ana@uskovic.com","1234");
    $user6 = new User();
    $user6->insertUser("MArija","marija@google.com","1234");
    $user7 = new User();
    $user7->insertUser("Jasna","jasna@google.com","1234");
    $user8 = new User();
    $user8->insertUser("Natasa","nata@google.com","1234");
    $user9 = new User();
    $user9->insertUser("Ivana","ika@google.com","1234");
    $user10 = new User();
    $user10->insertUser("Stefanija","stefi@google.com");
    
} 
catch( PDOException $Exception ) {
    echo $Exception->getMessage();
}
catch (\Throwable $th) {
    echo $th->getMessage();
}




?>