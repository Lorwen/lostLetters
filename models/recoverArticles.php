<?php

function recoverArticles()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Récupération de l'article sélectionné
  $recup = $dbh->query("SELECT id, date, title, content FROM article WHERE title = '$_GET[title]' ") or die(print_r($dbh->errorInfo(), true));
  $result = $recup->fetch(PDO::FETCH_ASSOC);
  return $result;
}
