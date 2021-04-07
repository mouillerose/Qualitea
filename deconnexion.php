<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION['panier']);
   session_unset(); 
   session_destroy(); 
   
   header('Refresh: 1; URL = connexion.php');
?>