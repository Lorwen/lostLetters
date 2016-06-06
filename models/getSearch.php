<?php
 function getSearch()
 {
   // Connexion à la BDD
   $dbh = DatabaseConnection::getInstance();
   // Sécurisation de la requête
   // include('includes/secured_form');
   // Requête pour récupérer le résultat de la recherche
   $mot_cle = $_POST['search'];
   $query=$dbh->prepare("SELECT * FROM article WHERE title LIKE ?");
   if ($query->execute(array("%".$mot_cle."%")))
   {
     $result = $query->fetchAll(PDO::FETCH_ASSOC);
   }
   return $result;
 }
