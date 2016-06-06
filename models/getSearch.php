<?php
 function getSearch()
 {
   // Connexion à la BDD
   $dbh = DatabaseConnection::getInstance();
   // Sécurisation de la requête
   // include('includes/secured_form');
   // Requête pour récupérer le résultat de la recherche
   $mot_cle="Personnages";
   $query=$dbh->prepare("SELECT * FROM article WHERE mot LIKE ?");
   $result = $query->execute(array("%".$mot_cle."%"));
   return $result;
 }
