<?php
function comparaisonChampsFormulaire() {
  // Connexion à la BDD
  $dbh = DatabaseConnection::getInstance();
  // Sécurisation des entrées
  include("../includes/secured_form.php");
  // Requête pour comparer les informations de connexion
  $comparaison = $dbh->prepare('SELECT id, username, password FROM user WHERE username = ? AND password =  ?');
  $comparaison->bindparam(1,$_POST['pseudo']);
  $comparaison->bindparam(2,$_POST['password']);
  $comparaison->execute();
  //$comparaison->execute(array($_POST['pseudo'], $_POST['password']));
  return $comparaison;
}
