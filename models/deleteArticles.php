<?php

function deleteArticles()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();

  //requête de suppression de l'article
  $req=$dbh->exec("DELETE FROM article WHERE article.id= ".$_GET['id']) or die(print_r($dbh->errorInfo(), true));
  
}
