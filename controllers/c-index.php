<?php
session_start();

// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/getArticles.php');

if(!empty($_POST['bouton']))
{
  var_dump($comparaison);
} 
// Sélectionner les articles
$articles = getArticles();

// Affichage
require ('../views/v-index.php');
