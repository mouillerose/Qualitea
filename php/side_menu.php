<?php include './php/varSession.inc.php' ;?>
<section id="cote">
    <nav id="ul_side">
    <h2 style="color:#427a51">QualiTea</h2>
    <ul id="side">
            <li id="bouton_accueil"><a href="./index.php" style="color:#427a51">Accueil</href></a></li>
            <?php 
            $taille=count($_SESSION['categorie']);

                foreach ($_SESSION['categorie'] as $x){
                    $y=$x[5];
                    $z=$x[6];
                    echo "<li><a href=\"./produits.php?categorie=$y\" style=\"color:#427a51\">$z</href></a></li>";
                }
            
    ?>
            <li id="bouton_contact"><a href="./contact.php" style="color:#427a51">Contact</href></a></li>
    </ul>
    </nav>
</section>