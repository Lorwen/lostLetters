<?php

function setComments($id)
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation
  //include('../includes/secured_form.php');
  // Requête d'écriture dans la BDD
  $req = $dbh->prepare("INSERT INTO comments(id_article, author, content) VALUES (?, ?, ?)");
  $req->execute(array($id['id'], $_SESSION['isConnected']['0']['username'], html_entity_decode($_POST['text_comment'])));

  return $req;
}
