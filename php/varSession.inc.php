<?php
// on créé un tableau de chaque colonne du tableau html

//Thé vert

$tv_images=array("the_vert_citron.jpg","the_vert_fruitsrouges.jpg","the_vert_jasmin.jpg","the_vert_matcha.jpg","the_vert_sencha.jpg");

$tv_noms=array("Thé vert citron / 100g","Thé vert fruits rouges / 100g","Thé vert Jasmin / 100g","Thé vert Matcha / 100g","Thé vert Sencha / 100g");

$tv_ref=array("tv01","tv02","tv03","tv04","tv05");

$tv_prix=array("prix","prix","prix","prix","prix");

$tv_stock=array(10,10,10,10,10);

//Thé noir

$tn_images=array("the_noir_assam.jpg","the_noir_darjeeling.jpg","the_noir_earlgrey.jpg","the_noir_fruitsdesbois.jpg","the_noir_rose.jpg");

$tn_noms=array("Thé noir Assam/ 100g","Thé noir Darjeeling / 100g","Thé noir Earl Grey / 100g","Thé noir aux fruits des bois / 100g","Thé noir à la Rose/ 100g");

$tn_ref=array("tn01","tn02","tn03","tn04","tn05");

$tn_prix=array("prix","prix","prix","prix","prix");

$tn_stock=array(10,10,10,10,10);

//Infusion

$if_images=array("inf_boutonsrose.jpg","inf_camomille.jpg","inf_gingembrecitronmiel.jpg","inf_menthereglisse.jpg","inf_noel.jpg");

$if_noms=array("Infusion aux boutons de rose","Infusion de Camomille","Infusion Gingembre, Citron, Miel","Infusion Menthe-Réglisse","Infusion de Noël");

$if_ref=array("if01","if02","if03","if04","if05");

$if_prix=array("prix","prix","prix","prix","prix");

$if_stock=array(10,10,10,10,10);

//on créé les variables de sessions utilisées dans l'urldecode

$the_vert=array($tv_images,$tv_ref,$tv_noms,$tv_prix,$tv_stock);
$the_noir=array($tn_images,$tn_ref,$tn_noms,$tn_prix,$tn_stock);
$infusion=array($if_images,$if_ref,$if_noms,$if_prix,$if_stock);

//Choix des variables de session en fonction de l'url

$cat=$_GET['categorie'];
if ($cat == "the_vert") {
    $_SESSION["categorie"]=$the_vert;
  }
elseif ($cat== "the_noir"){
    $_SESSION["categorie"]=$the_noir;
}
elseif ($cat=="infusion"){
    $_SESSION["categorie"]=$infusion;
};
?>