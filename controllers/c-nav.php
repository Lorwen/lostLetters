<?php
// Inclusion des fonctions du modèle
include_once('../models/functions.php');
// login
$error='';
// Si l'utilisateur a validé le formulaire
if(!empty($_POST['bouton']))
{
  echo "bouton";
  //  Vérification de la présence du login dans la base de donnée
  if(!empty($_POST['pseudo']) && !empty($_POST['password']))
  {
    $login = getLogs();
    var_dump($login); die;
    if($req->execute($login))
    {
      if($req->rowcount()>0)
      {
        //dans le cas où la requête est vrai
        $login = $req->fetch(PDO::FETCH_ASSOC);
        // assignation des informations récoltées dans la session
        $_SESSION['isConnected'] = $login;
        //redirection vers la page d'index
        header('Location: /');
      }
      //si le compte n'est pas reconnu par la bdd
      else
      {
        $error='Le pseudonyme ou le mot de passe incorrect.';
      }
    }
  }
  else if (empty($_POST['pseudo']))
  {
    $error='Le champ "pseudo" est vide';
  }
  else if (empty($_POST['password']))
  {
    $error='Le champ "mot de passe" est vide';
  }
}
require('../views/v-nav.php');
