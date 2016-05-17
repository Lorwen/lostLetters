<?php
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/comparaisonChampsFormulaire.php');

/*----- LOGIN -----*/

// Si l'utilisateur a validé le formulaire
if(!empty($_POST['bouton']))
{
  //  Vérification si les champs requis sont dûment remplit
  if(!empty($_POST['pseudo'])&&!empty($_POST['password']))
  {
    // Appelle de la fonction de comparaison
    $comparaison = comparaisonChampsFormulaire();
    // Si les données issues de la BDD sont identiques à ceux du formulaire
    $results = $comparaison->fetch(PDO::FETCH_ASSOC);
    // Comparaison des données BDD avec les entrées du formulaire de connexion
    if($results['username']==$_POST['pseudo'] && $results['password']==$_POST['password'])
    {
      // Mettre les informations dans la session
      $_SESSION['isConnected'] = $results;
    }
  }
}
