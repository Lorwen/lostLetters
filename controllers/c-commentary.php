<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/getId.php');
include_once('../models/setComments.php');

// Si le bouton est activé
if(!empty($_POST['bouton']))
{
  // Si les deux champs sont remplis
  if(!empty($_POST['pseudo']) && !empty($_POST['text_comment']))
  {
    // Fonction de récupération de l'id sélectionnné
    $id = getId();
    // Fonction d'écriture dans la BDD
    $comments = setComments($id);
    // Redirection sur la page d'accueil
    header('Location: c-index.php');
  }
  // Si le champs "pseudo" est v-index
  else if (empty($_POST['pseudo']))
  {
    $error='Le champs "pseudo" est vide';
  }
  // Si le champs "mot de passe" est vide
  else if (empty($_POST['mdp']))
  {
    $error='Le champs "mot de passe" est vide';
  }
}
// Affichage
require ('../views/v-commentary.php');
