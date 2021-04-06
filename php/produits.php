<?php session_start(); ?>
<?php $cat=$_GET['categorie'];?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Thés Verts</title>
    <link rel="stylesheet" href="../css/the_noir.css">
</head>

<?php include "./varSession.inc.php"; ?>

<?php include './header.php'; ?>
<?php include './side_menu.php'; ?>

   
<section id="milieu">
    <button id="reste_stock" onclick="reste_stock()">Afficher/Cacher Stock</button>
    <table>
        <thead>
            <tr>
              <th width="10%"><p id="categorie_table">Aperçu</p></th>
              <th width="10%"><p id="categorie_table">Référence</p></th>
              <th width="40%"><p id="categorie_table">Type</p></th>
              <th width="7%"><p id="categorie_table">Prix</p></th>
              <th width="25%"><p id="categorie_table"></p></th>
              <th class="stock"><p id="categorie_table">Stock</p></th>
            </tr>
          </thead>
        
        <?php 
        $taille=count($_SESSION[$cat]);
        for ($i=0;$i<$taille-2;$i++){
            $x=$_SESSION[$cat][$i]['image'];
            echo "<tr>
            <td> <img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\"> </td>
            <td> " . $_SESSION[$cat][$i]['ref'] . "</td>
            <td> " . $_SESSION[$cat][$i]['nom'] . "</td>
            <td> " . $_SESSION[$cat][$i]['prix']. "</td>
            <td><button onclick=\"moins('article1','quantite1')\">-</button><input id=\"quantite1\" class=\"qualite\" type=texte style=\"width: 150px;\" readonly value=0 ><button onclick=\"plus('article1','quantite1')\">+</button><br> <div class=\"panier\"> <input  class=\"commande\" type=button value=\"Ajouter au panier\" > </div></td>
            <td id=\"article1\" class=\"stock\"> ". $_SESSION[$cat][$i]['stock'] . "</td>
            </tr>";
        }
        ?>
        
    </table>
   
</section>

<?php include './footer.php'; ?>

<script src="../js/produits.js"></script>
</body>
</html>