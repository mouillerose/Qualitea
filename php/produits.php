<?php session_start(); ?>

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
        <tr>
            <td> <?php $x=$_SESSION["categorie"][0][0];echo "<img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\">"; ?></td>
            <td> <?php echo $_SESSION["categorie"][1][0]; ?></td>
            <td> <?php echo $_SESSION["categorie"][2][0]; ?></td>
            <td> <?php echo $_SESSION["categorie"][3][0]; ?></td>
            <td><button onclick="moins('article1','quantite1')">-</button><input id="quantite1" class="qualite" type=texte readonly value=0 ><button onclick="plus('article1','quantite1')">+</button><br> <div class="panier"> <input  class="commande" type=button value="Ajouter au panier" > </div></td>
            <td id="article1" class="stock"><?php echo $_SESSION["categorie"][4][0]; ?></td>
        </tr>
        <tr>
            <td><?php $x=$_SESSION["categorie"][0][1];echo "<img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\">"; ?></td>
            <td><?php echo $_SESSION["categorie"][1][1]; ?></td>
            <td><?php echo $_SESSION["categorie"][2][1]; ?></td>
            <td><?php echo $_SESSION["categorie"][3][1]; ?></td>
            <td><button onclick="moins('article2','quantite2')">-</button><input id="quantite2" class="qualite" type=texte readonly value=0 ><button onclick="plus('article2','quantite2')">+</button><br> <div class="panier"> <input  class="commande" type=button value="Ajouter au panier" > </div></td>
            <td id="article2" class="stock"><?php echo $_SESSION["categorie"][4][1]; ?></td>
        </tr>
        <tr>
            <td><?php $x=$_SESSION["categorie"][0][2];echo "<img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\">"; ?></td>
            <td><?php echo $_SESSION["categorie"][1][2]; ?></td>
            <td><?php echo $_SESSION["categorie"][2][2]; ?></td>
            <td><?php echo $_SESSION["categorie"][3][2]; ?></td>
            <td><button onclick="moins('article3','quantite3')">-</button><input id="quantite3" class="qualite" type=texte readonly value=0 ><button onclick="plus('article3','quantite3')">+</button><br> <div class="panier">  <input  class="commande" type=button value="Ajouter au panier" > </div></td>
            <td id="article3" class="stock"><?php echo $_SESSION["categorie"][4][2]; ?></td>
        </tr>
        <tr>
            <td><?php $x=$_SESSION["categorie"][0][3];echo "<img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\">"; ?></td>
            <td><?php echo $_SESSION["categorie"][1][3]; ?></td>
            <td><?php echo $_SESSION["categorie"][2][3]; ?></td>
            <td><?php echo $_SESSION["categorie"][3][3]; ?></td>
            <td><button onclick="moins('article4','quantite4')">-</button><input id="quantite4" class="qualite" type=texte readonly value=0 ><button onclick="plus('article4','quantite4')">+</button> <br> <div class="panier"> <input  class="commande" type=button value="Ajouter au panier" > </div></td>
            <td id="article4" class="stock"><?php echo $_SESSION["categorie"][4][3]; ?></td>
        </tr>
        <tr>
            <td><?php $x=$_SESSION["categorie"][0][4];echo "<img id=\"article\" src=\"../img/$x\" alt=\"Thé vert Citron\">"; ?></td>
            <td><?php echo $_SESSION["categorie"][1][4]; ?></td>
            <td><?php echo $_SESSION["categorie"][2][4]; ?></td>
            <td><?php echo $_SESSION["categorie"][3][4]; ?></td>
            <td><button onclick="moins('article5','quantite5')">-</button><input id="quantite5" class="qualite" type=texte readonly value=0 ><button onclick="plus('article5','quantite5')">+</button> <br> <div class="panier"> <input  class="commande" type=button value="Ajouter au panier" > </div></td>
            <td id="article5" class="stock"><?php echo $_SESSION["categorie"][4][4]; ?></td>
        </tr>
        
    </table>
   
</section>

<?php include './footer.php'; ?>

<script src="../js/produits.js"></script>
</body>
</html>