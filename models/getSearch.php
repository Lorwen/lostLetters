<?php
 function getSearch()
 {
   // Connexion à la BDD
   $dbh = DatabaseConnection::getInstance();
   // Sécurisation de la requête
   // include('includes/secured_form');
   // Requête pour récupérer le résultat de la recherche
   $req = $dbh->query(" SELECT * FROM article  WHERE title LIKE 'Personnages%' ") or die(print_r($dbh->errorInfo(), true));
   $result = $req->fetch(PDO::FETCH_ASSOC);
   return $result;
   var_dump($result); die;
 }
