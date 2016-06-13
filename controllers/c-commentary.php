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
  if(!empty($_POST['text_comment']))
  {
    // Fonction de récupération de l'id sélectionnné
    $id = getId();
    // Fonction d'écriture dans la BDD
    $comments = setComments($id);
    // Redirection sur la page d'accueil
    header('Location: /index.html');
  }
  // Si le champs "mot de passe" est vide
  else if (empty($_POST['text_comment']))
  {
    $error='Le champs "commentaire" est vide';
  }
}
// Affichage
require ('../views/v-commentary.php');
