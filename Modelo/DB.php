<?php

class DB{
 private static $host= "localhost";
 private static $usuario= "root";
 private static $password= "123";
 private static $dbName= "mi_tienda";

 private static $conn= null;
 public static function getConnection(){
     if(self::$conn === null){
         try{
             self::$conn= new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbName, self::$usuario, self::$password);
             self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }catch(PDOException $e){
             echo "Error: " . $e->getMessage();
         }
     }
     return self::$conn;
 }
}

?>