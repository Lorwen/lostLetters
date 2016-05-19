<?php
function recoverCommentary($results)
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();

  // Sécurisation du formulaire
  include('../includes/secured_form.php');

  // Récupération des commentaires
  $commentaries = $dbh->prepare("SELECT author, date, content FROM comments WHERE id_article =? ORDER BY date ASC LIMIT 10");
  $commentaries ->execute(array($results['id']));

  return $commentaries;
}
