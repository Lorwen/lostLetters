<?php
function comparaisonChampsFormulaire() {
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation des entrées
  include("../includes/secured_form.php");
  // Requête pour comparer les informations de connexion

  $sth = $dbh->prepare("SELECT id, username, password, admin FROM user WHERE username = ? AND password = ? ");
  $sth->execute(array($_POST['pseudo'], sha1($_POST['password'])));
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);

  return $result;
}
