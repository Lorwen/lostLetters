<?php

function setComments($id)
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation
  include('../includes/secured_form.php');
  // Requête d'écriture dans la BDD
  $req = $dbh->prepare("INSERT INTO comments(id_article, author, content) VALUES (?, ?, ?");
  var_dump($id['id']);
  var_dump($_POST);
  $comments = $req->execute(array($id['id'], $_POST['pseudo'], $_POST['text_comment']));
  var_dump($comments);die;
  return $comments;
}
