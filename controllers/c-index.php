<?php
// Démarrer la session
session_start();
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/getArticles.php');

// Inclusion du menu de navigation
include_once('c-nav.php');
    //var_dump($_SESSION)
// Sélectionner les articles
$articles = getArticles();

// Affichage
require ('../views/v-index.php');
