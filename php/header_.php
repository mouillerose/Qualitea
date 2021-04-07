<?php include './varSession.inc.php' ;?>
<header> 
<nav id="top">
<img src="../img/logo.png" alt="logo QualiTea">
<ul id="ul_top">
    <li><a href="../index.php">Accueil</href></a></li>
    <?php 
    $taille=count($_SESSION['categorie']);

    foreach ($_SESSION['categorie'] as $x){
        $y=$x[5];
        $z=$x[6];
        echo "<li><a href=\"./produits.php?categorie=$y\">$z</href></a></li>";
    }

    ?>
    <li><a href="./contact.php" >Contact</href></a></li>
    <li><a href="./connexion.php">Connexion</href></a></li>
</ul>
</nav>
</header>