<?php
class User{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $age;
    private $gender;
    private $image;
    public function getId(){
        return $this->id;
    }
    // GETTERS
    public function getFirstName(){
        return $this->first_name;
    }
    public function getLastName(){
        return $this->last_name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getImage(){
        return $this->image;
    }
    // SETTERS
    public function setFirstName($firstName){
        $this->first_name = $firstName;
    }
    public function setLastName($lastName){
        $this->last_name = $lastName;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function setGender($gender){
        $this->gender = $gender;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public static function insertUser($firstName,$lastName,$email,$password,$age,$gender,$image){
        $conn = Database::getInstance();
        $query= "INSERT INTO users (first_name,last_name,email,password,age,gender,image) VALUES (:firstname,:lastname,:email,:password,:age,:gender,:image)";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':firstname',$firstName,PDO::PARAM_STR);
        $stmt->bindValue(':lastname',$lastName,PDO::PARAM_STR);
        $stmt->bindValue(':email',$email,PDO::PARAM_STR);
        $stmt->bindValue(':password',$password,PDO::PARAM_STR);
        $stmt->bindValue(':age',$age,PDO::PARAM_STR);
        $stmt->bindValue(':gender',$gender,PDO::PARAM_STR);
        $stmt->bindValue(':image',$image,PDO::PARAM_STR);
        $status = $stmt->execute();
        if ($status) {
            $lastInsertId = $conn->lastInsertId();
            $selectQuery= "SELECT first_name,last_name,if(image is not null,image,'./public/theme/img/blank-profile.png') as image FROM users WHERE id=:id";
            $stmtSelect = $conn->prepare($selectQuery);
            $stmtSelect->bindValue(':id',$lastInsertId,PDO::PARAM_STR);
            $statusSelect = $stmtSelect->execute();
            $res=$stmtSelect->fetchObject();
            if($statusSelect){
                return $res;
            }
        }
    }
}

?>