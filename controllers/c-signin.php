<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/setRegister.php');

// Vérification que tous les champs obligatoires sont remplis
if(!empty($_POST['bouton']))
{
  if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['vérification']))
  {
    // Vérification que les deux champs mot de passe sont identiques
    if($_POST['password'] == $_POST['vérification'])
    {
      // Ecriture dans la BDD
        $req = setRegister();
      // Redirection vers la page d'accueil
        header('Location: c-index.php');
    }
    // Si les mots de passe sont différents
    else {
      $error = 'Une erreur est survenue lors de la saisie du mot de passe.';
    }
  }
  // Champs pseudo vide
  else if(empty($_POST['pseudo']))
  {
    // Message d'erreur
    $error = 'Le champ \'pseudo\' doit être obligatoirement remplit';
  }
  // Champs email vide
  else if(empty($_POST['email']))
  {
    // Message d'erreur
    $error = 'Le champ \'email\' doit être obligatoirement remplit';
  }
  // Champs password vide
  else if(empty($_POST['password']))
  {
    // Message d'erreur
    $error = 'Le champ \'mot de passe\' doit être obligatoirement remplit';
  }
  // Champs vérification vide
  else if(empty($_POST['vérification']))
  {
    // Message d'erreur
    $error = 'Le champ \'mot de passe\' doit être obligatoirement remplit une seconde fois';
  }
}

// Affichage
require ('../views/v-signin.php');
