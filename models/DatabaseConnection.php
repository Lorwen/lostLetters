<?php
class DatabaseConnection
{
  private static $_instance = null;

   public static function getInstance()
   {
     // Si $_instance n'est pas remplit (donc c'est a première fois dans le script que l'on se connecte)
     if(is_null(self::$_instance))
     {
       // Connexion à la BDD
       $ini_array =  parse_ini_file("../config.ini");
       self::$_instance = new PDO('mysql:host=localhost;dbname=les lettres perdues;charset=utf8',$ini_array['login'],$ini_array['pwd']);
     }
     // On retourne l'instance (ou pas) que l'on vient de créer
     return self::$_instance;
   }
}
