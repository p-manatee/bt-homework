<?php

class Database{
    private static $instance;
    private static $dbHost = "localhost";
    private static $dbName = "project-shop";
    private static $dbUser = "root";
    private static $dbPass = "";
		private function __construct(){}
		public static function getInstance(){
            $dns="mysql:host=".self::$dbHost.";dbname=".self::$dbName;
			if(!self::$instance){
				self::$instance = new PDO($dns,self::$dbUser,self::$dbPass); 
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
				
			}
			return self::$instance;
		}
}

?>