<?php
function counting($commentaries)
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();

  // Sécurisation
  include("../includes/secured_form.php");

  // Comptage du nombre de commentaires
  $count = $commentaries->rowcount();

  return $count;
}
