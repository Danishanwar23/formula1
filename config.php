<?php
  class config {
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
          // self::$pdo = new PDO('mysql:host=localhost;dbname=formula_one', 'root', 'root',
          self::$pdo = new PDO('mysql:host=localhost:3306;dbname=anwarchaudhry_fast_one', 'anwarchaudhry', 'Ledacdu93',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
?>
