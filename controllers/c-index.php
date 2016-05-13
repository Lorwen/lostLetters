<?php
session_start();

// Inclusion des fonctions du modèle
include_once('../models/functions.php');

// Sélectionner les articles
$articles = getArticles();

// Affichage
require ('../views/v-index.php');
