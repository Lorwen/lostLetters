<?php

function setRegister()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation du formulaire
  include('../includes/secured_form.php');
  // Ecriture dans la base de donnée
  $register = $dbh->prepare("INSERT INTO user (username, email, password) VALUES(?, ?, ?)");
  $register->bindParam(1, $_POST['pseudo']);
  $register->bindParam(2, $_POST['email']);
  $register->bindParam(3, sha1($_POST['password']));
  $register->execute();
  //$register = $req->execute(array($_POST['pseudo'], $_POST['email'], sha1($_POST['password'])));

  return $register;
}
