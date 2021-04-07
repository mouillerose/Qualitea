<?php session_start(); ?>
<?php $cat=$_GET['categorie'];
if (!(isset($_SESSION['logged']))){
    $_SESSION['logged']=false;
}
if (!(isset($_SESSION['panier']))){
    $_SESSION['panier']=array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Thés Verts</title>
    <link rel="stylesheet" href="./css/the_noir.css">
</head>

<?php include "./php/varSession.inc.php"; ?>

<?php include './php/header.php'; ?>
<?php include './php/side_menu.php'; ?>

<?php /*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom=$_POST['nomObjet'];
    $ref=$_POST['refObjet'];
    $quantite=$_POST['quantite'];
    $article=array('ref'=>$ref,'nom'=>$nom,'quantite'=>$quantite);  
}
array_push($_SESSION['panier'],$article);*/
?>

   
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
            <td> <img id=\"article\" src=\"./img/$x\" alt=\"Thé vert Citron\"> </td>
            <td> " . $_SESSION[$cat][$i]['ref'] . "</td>
            <td> " . $_SESSION[$cat][$i]['nom'] . "</td>
            <td> " . $_SESSION[$cat][$i]['prix']. "</td>
            <td><form method=\"post\" action=\"./panier.php\">
            <button type=\"button\" onclick=\"moins('article1','" . $_SESSION[$cat][$i]['ref'] . "')\">-</button>
            <input id=\"" . $_SESSION[$cat][$i]['ref'] . "\" name=\"nombre\" class=\"qualite\" type=texte style=\"width: 150px;\" readonly value=0 >
            <button type=\"button\" onclick=\"plus('article1','" . $_SESSION[$cat][$i]['ref'] . "')\">+</button><br> <div class=\"panier\">
            <input  class=\"commande\" type=submit value=\"Ajouter au panier\" > </div>
            <input type=\"hidden\" name=\"refObjet\" value=\"". $_SESSION[$cat][$i]['ref']."\">
            <input type=\"hidden\" name=\"nomObjet\" value=\"". $_SESSION[$cat][$i]['nom']."\">
            </form></td>
            <td id=\"article1\" class=\"stock\"> ". $_SESSION[$cat][$i]['stock'] . "</td>
            </tr>";
        }
        ?>
        
    </table>
   
</section>

<?php include './php/footer.php'; ?>

<script src="./js/produits.js"></script>
</body>
</html>