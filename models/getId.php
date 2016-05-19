<?php

function getID()
{
  // Connexion à la BDD
  $bdh = DatabaseConnection::getInstance();

  // Sécurisation
  include('../includes/secured_form.php');

  // Requête de récupération de l'id sélectionné
  $req = $bdh->query("SELECT id FROM article WHERE article.id = '$_GET[id]'");
  $id = $req->fetch(PDO::FETCH_ASSOC);

  return $id;
}
