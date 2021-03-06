<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/recoverArticles.php');
include_once('../models/counting.php');
include_once('../models/recoverCommentary.php');
include_once('../models/getArticles.php');

// Inclusion du menu de navigation
include_once('c-nav.php');

// Afficher l'article modifier ou sélectionné
$results = recoverArticles();

// Récupération des commentaires
$commentaries = recoverCommentary($results);

// Comptage des comentaires
$countage = counting($commentaries);

// Afficher les commentaires


// Affichage
require ('../views/v-display.php');
