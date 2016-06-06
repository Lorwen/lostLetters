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

    // Si les données issues de la BDD sont identiques à celles du formulaire
    //  $results = $comparaison->fetch(PDO::FETCH_ASSOC);
    if(!empty($comparaison))
    {
      // Comparaison des données BDD avec les entrées du formulaire de connexion
      if($comparaison['0']['username'] == $_POST['pseudo'] && $comparaison['0']['password'] == sha1($_POST['password']))
      {
        // Mettre les informations dans la session
        $_SESSION['isConnected'] = $comparaison;
      }
      else {
        //gestion des erreurs
        echo ("Login incorrect. Veuillez recommencer.");
      }
    }
  }
  if(empty($_POST['pseudo'])){
    $error="Le champ pseudo doit être obligatoirement remplit.";
  }
  else if (empty($_POST['password'])){
    $error="Le champ mot de passe doit être obligatoirement remplit";
  }
}
include_once('c-research.php');
