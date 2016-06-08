<?php
  function setArticles()
  {
    // Connexion à la BDD
    $dbh = DatabaseConnection::getInstance();
    //htlmspecialchars et expressions régulières
    include("../includes/secured_form.php");
    //requête d'écriture dans la BDD
    $printed = $dbh->prepare("INSERT INTO article(user_id, title, content) VALUES(?, ?, ?)");
    $printed ->execute(array( $_SESSION['isConnected']['0']['id'], $_POST['title'], $_POST['text_article']));

    return $printed;
    var_dump($printed);die;
  }
