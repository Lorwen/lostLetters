<?php
// Connexion à la BDD
$ini_array =  parse_ini_file("../config.ini");
$dbh = new PDO('mysql:host=localhost;dbname=les lettres perdues;charset=utf8',$ini_array['login'],$ini_array['pwd']);

// Renvoie la liste des aticles sélectionnés
function getArticles()
{
  // Connexion à la BDD
  global $dbh;
  // Requête de sélection
  $articles = $dbh->query("SELECT id, date, title, content FROM article ORDER BY date DESC") or die(print_r($dbh->errorInfo(), ture));
  // Renvoie de la valeur
  return $articles;
}

function getLogs() {
  // Connexion à la BDD
  global $dbh;
  // Sécurisation des entrées
  include("includes/secured_form.php");
  // Requête pour récupérer les informations de connexion
  $req = $dbh-> prepare('SELECT id, username, password FROM user WHERE username = ? AND password =  ?');
  $logs = array($_POST['pseudo'], $_POST['password']);

  return $logs;
}
