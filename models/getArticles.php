<?php
function getArticles()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  
  // Requête de sélection
  $articles = $dbh->query("SELECT id, date, title, content FROM article ORDER BY date DESC") or die(print_r($dbh->errorInfo(), true));
  // Renvoie de la valeur
  return $articles;
}
