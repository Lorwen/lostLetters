<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/deleteArticles.php');
include_once('../models/deleteCommentaries.php');

// Faire la vérification de la session qui est remplit sinon redirection vers la page d'accueil
if(!empty($_SESSION['isConnected']))
{
	// si $_GET !empty
	if(!empty($_GET['id']))
	{
    $suppression = deleteArticles();
		$delete = deleteCommentaries();
  }
	// retour à la page d'accueil
	header('Location: /index.html');
}
else
 {
	session_destroy();
	$_error="Une erreur est survenue, veuillez vous reconnecter.";
	header('Location: /index.html');
 }
