<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/recoverArticles.php');
include_once('../models/counting.php');
include_once('../models/recoverCommentary.php');

// Afficher l'article modifier ou sélectionné
$results = recoverArticles();

// Récupération des commentaires
$commentaries = recoverCommentary($results);

// Comptage des comentaires
$countage = counting($commentaries);

// Affichage
require ('../views/v-display.php');
