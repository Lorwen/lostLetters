<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/setArticles.php');

// Faire la vérification de la session qui est remplit sinon redirection vers la page d'accueil
if(!empty($_SESSION['isConnected']))
{
	//si le bouton valider est vrai
	if(!empty($_POST['bouton']))
	{
		//si les champs sont remplient
		if(!empty($_POST['title']) && !empty($_POST['text_article']))
		{
      // Appel de la fonction setArticles
      $printed = setArticles();
      // Redirection sur la page d'accueil
    	header('Location: /index.html');
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
