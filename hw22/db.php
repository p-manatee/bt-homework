<?php
class DB {
    private static $dbHost = "localhost";
    private static $dbName = "homeworks";
    private static $dbUser = "root";
    private static $dbPass = "";
    public static function dbConnect(){
        
        $dns="mysql:host=".self::$dbHost.";dbname=".self::$dbName;
        $pdo = new PDO($dns,self::$dbUser,self::$dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
?>