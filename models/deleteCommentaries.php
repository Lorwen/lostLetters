<?php

function deleteCommentaries()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();

  // Requête de suppression du/des commentaire(s)
  $req = $dbh->exec("DELETE FROM comments WHERE comments.id_article= ".$_GET['id']) or die(print_r($dbh->errorInfo(), true));
}
