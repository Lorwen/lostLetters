<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/recoverArticles.php');

// Afficher l'article modifier ou sélectionné
$result = recoverArticles();
// Affichage
require ('../views/v-display.php');
