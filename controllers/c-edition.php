<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/setArticles.php');

// Faire la vérification de la session qui est remplit sinon redirection vers la page d'accueil
if(!empty($_SESSION['isConnected']))
{
	var_dump($_SESSION);
	var_dump($_POST);
	//si le bouton valider est vrai
	if(!empty($_POST['bouton']))
	{
		var_dump($_POST);
		//si les champs sont remplient
		if(!empty($_POST['title']) && !empty($_POST['text_article']))
		{
			var_dump($_POST);
      // Appel de la fonction setArticles
      $printed = setArticles();
      // Redirection sur la page d'accueil
    //  header('Location: /controllers/c-index.php');
		}
		else
		{
			var_dump($_POST);
		}
	}
}
else
{
	session_destroy();
	$_error="Une erreur est survenue, veuillez vous reconnecter.";// Voir comment je le passe sur index.php
	//header('Location: /');
}

// Affichage
require ('../views/v-edition.php');
