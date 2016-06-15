<?php
// Inclusion de fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/getSearch.php');

if(!empty($_POST['bouton2']))
{
  if(!empty($_POST['search']))
  {
    // Appeller la fonction getSearch
    $search = getSearch();
    }
}
