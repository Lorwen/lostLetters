<?php

function setRegister()
{
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation du formulaire
  include(../includes/secured_form.php);
  // Ecriture dans la base de donnée
  $req = $dbh->prepare("INSERT INTO user(username, email, password) VALUES(? ,? ,?)");
  $register = $req->execute(array($_POST['username'], $_POST['email'], shal($_POST['password'])));

  return $register;
}
