<?php
// Inclusion des fonctions du modèle
include_once('../models/DatabaseConnection.php');
include_once('../models/getLogs.php');
// login

// Si l'utilisateur a validé le formulaire
if(!empty($_POST['bouton']))
{
      //  Vérification si les champs requis sont dûment remplit
      if(!empty($_POST['pseudo'])&&!empty($_POST['password']))
      {
        // Comparaison des données BDD avec les entrées formulaire de connexion
        $comparaison = comparaisonChampsFormulaire();
      }

}
require('../views/v-nav.php');
