<?php
  session_start();
  // Déconnexion et destruction de la session_start
  session_unset();
  session_destroy();
  // Redirection à la page d'Accueil
  header('Location: /index.html');
 ?>
