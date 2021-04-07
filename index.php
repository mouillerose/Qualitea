<?php session_start(); 

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
    <title>QualiTea - Accueil</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

<?php include 'php/header.php'; ?>
<?php include 'php/side_menu.php'; ?>

<section id="milieu">
        <img src="img/image_accueil.png" alt="Rien de mieux qu'un thé de qualité" id="image_accueil">
</section>

<?php include 'php/footer.php'; ?>

</body>
</html>