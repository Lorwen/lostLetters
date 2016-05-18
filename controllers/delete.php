<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/deleteArticles.php');

// Faire la vérification de la session qui est remplit sinon redirection vers la page d'accueil
if(!empty($_SESSION['isConnected']))
{
	// si $_GET !empty
	if(!empty($_GET['id']))
	{
    $suppression = deleteArticles();
  }
	// retour à la page d'accueil
	header('Location: c-index.php');
}
else
 {
	session_destroy();
	$_error="Une erreur est survenue, veuillez vous reconnecter.";
	header('Location: c-index.php');
 }
