<?php

class Db{
    
private static $instace;

protected static function getInstance(){
    try {
        //self::$instace = new PDO("mysql:host=localhost;dbname=socialDB", "root", "root");
       self::$instace =  new PDO(
        "mysql:host=127.0.0.1;port=8889;dbname=socialDB;charset=utf8",
        "root",
        "root" // MAMP default password is "root"
    );
        self::$instace->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
      echo $err->getMessage();
    }
    return self::$instace;
}

protected static function disconnect(){
    self::$instace = null;
}


    
}