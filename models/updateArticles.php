<?php

function updateArticles()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  //htlmspecialchars et expressions régulières
  include("../includes/secured_form.php");
  // Mise à jour de l'article
  $updated = $dbh->prepare("UPDATE article SET title = ?, content = ? WHERE article.id= ?") or die(print_r($dbh->errorInfo(), true));
  $updated ->execute(array($_POST['title'],$_POST['text_article'],$_GET['id']));

  return $updated;
}
