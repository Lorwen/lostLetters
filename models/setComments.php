<?php

function setComments($id)
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation
  include('../includes/secured_form.php');
  // Requête d'écriture dans la BDD
  $req = $dbh->prepare("INSERT INTO comments(id_article, author, content) VALUES (?, ?, ?)");
  $req->bindparam(1, $id['id']);
  $req->bindparam(2, $_SESSION['isConnected']['0']['username']);
  $req->bindparam(3, $_POST['text_comment']);
  $req->execute();
  return $req;
}
