<?php session_start();
if (!(isset($_SESSION['panier']))){
    $_SESSION['panier']=array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Accueil</title>
    <link rel="stylesheet" href="./css/the_noir.css">
</head>
<body>

<?php include 'php/header.php'; ?>
<?php include 'php/side_menu.php'; ?>

<section id="milieu">
<table>
        <thead>
            <tr>
              <th width="30%"><p id="categorie_table">Référence</p></th>
              <th width="50%"><p id="categorie_table">Article</p></th>
              <th width="20%"><p id="categorie_table">Quantité</p></th>
            </tr>
          </thead>
    <?php

 
if (($_SERVER["REQUEST_METHOD"] == "POST") && ($_POST['nombre']!=0) ) {
    $nom=$_POST['nomObjet'];
    $ref=$_POST['refObjet'];
    $nombre=$_POST['nombre'];
    $truc=array('ref'=>strval($ref),'nom'=>strval($nom),'nombre'=>strval($nombre));
    array_push($_SESSION['panier'],$truc);
};



if (!(empty($_SESSION['panier']))){
    foreach($_SESSION['panier'] as $article){
        echo "<tr>
            <td> " . $article['ref'] . "</td>
            <td> " . $article['nom'] . "</td>
            <td> " . $article['nombre']. "</td>
            </tr>";
    }
}
/*
    $taille=count($_SESSION['panier']);
    for($i=0;$i<$taille;$i++){
        print_r($_SESSION['panier']);
        echo "<tr>
            <td> " . $_SESSION['panier'][$i]['ref'] . "</td>
            <td> " . $_SESSION['panier'][$i]['nom'] . "</td>
            <td> " . $_SESSION['panier'][$i]['nombre'] . "</td>
            </tr>";
        
    }*/
    ?>
    </table>
</section>

<?php include 'php/footer.php'; ?>

</body>
</html>