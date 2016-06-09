<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/recoverArticles.php');
include_once('../models/updateArticles.php');
// Faire la vérification de l'authentification correcte de la session sinon redirection vers la page d'accueil
if(!empty($_SESSION['isConnected']))
{
  // si $_GET !empty
  if(!empty($_GET['id']))
  {
    // Récupération del'article
    $selectedArticle = recoverArticles();

    //requête de modification de l'article
    if(!empty($_POST['bouton']))
    {
      $updates = updateArticles();
      // Redirection sur la page d'affichage de l'article complet
      header('Location: /article/detail/'.$_GET['id']);
    }
  }
  else
  {
    header('Location: /index.html');
  }
}
else
{
  session_destroy();
  $_error="Une erreur est survenue, veuillez vous reconnecter.";
  header('Location: /index.html');
}

// Affichage
require ('../views/v-modify.php');
