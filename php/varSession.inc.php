<?php
// on créé un tableau de chaque colonne du tableau html

//Thé vert

$tv01 = array('image'=>"the_vert_citron.jpg",'nom'=>"Thé vert citron / 100g",'ref'=>"tv01",'prix'=>"prix",'stock'=>10);
$tv02 = array('image'=>"the_vert_fruitsrouges.jpg",'nom'=>"Thé vert Fruits Rouges / 100g",'ref'=>"tv02",'prix'=>"prix",'stock'=>10);
$tv03 = array('image'=>"the_vert_jasmin.jpg",'nom'=>"Thé vert Jasmin / 100 g",'ref'=>"tv03",'prix'=>"prix",'stock'=>10);
$tv04 = array('image'=>"the_vert_matcha.jpg",'nom'=>"Thé vert Matcha / 100g",'ref'=>"tv04",'prix'=>"prix",'stock'=>10);
$tv05 = array('image'=>"the_vert_sencha.jpg",'nom'=>"Thé vert Sencha / 100g",'ref'=>"tv05",'prix'=>"prix",'stock'=>10);


//Thé noir

$tn01 = array('image'=>"the_noir_assam.jpg",'nom'=>"Thé noir Assam / 100g",'ref'=>"tn01",'prix'=>"prix",'stock'=>10);
$tn02 = array('image'=>"the_noir_darjeeling.jpg",'nom'=>"Thé noir Darjeeling / 100g",'ref'=>"tn02",'prix'=>"prix",'stock'=>10);
$tn03 = array('image'=>"the_noir_earlgrey.jpg",'nom'=>"Thé noir Earl Grey / 100 g",'ref'=>"tn03",'prix'=>"prix",'stock'=>10);
$tn04 = array('image'=>"the_noir_fruitsdesbois.jpg",'nom'=>"Thé noir Fruits des bois / 100g",'ref'=>"tn04",'prix'=>"prix",'stock'=>10);
$tn05 = array('image'=>"the_noir_rose.jpg",'nom'=>"Thé noir à la Rose / 100g",'ref'=>"tn05",'prix'=>"prix",'stock'=>10);

//Infusion

$if_images=array("inf_boutonsrose.jpg","inf_camomille.jpg","inf_gingembrecitronmiel.jpg","inf_menthereglisse.jpg","inf_noel.jpg");

$if_noms=array("Infusion aux boutons de rose","Infusion de Camomille","Infusion Gingembre, Citron, Miel","Infusion Menthe-Réglisse","Infusion de Noël");

$if_ref=array("if01","if02","if03","if04","if05");

$if_prix=array("prix","prix","prix","prix","prix");

$if_stock=array(10,10,10,10,10);


$if01 = array('image'=>"inf_boutonsrose.jpg",'nom'=>"Infusion aux boutons de Rose / 100g",'ref'=>"if01",'prix'=>"prix",'stock'=>10);
$if02 = array('image'=>"inf_camomille.jpg",'nom'=>"Infusion Camomille / 100g",'ref'=>"if02",'prix'=>"prix",'stock'=>10);
$if03 = array('image'=>"inf_gingembrecitronmiel.jpg",'nom'=>"Infusion Gingembre, Citron, Miel / 100 g",'ref'=>"if03",'prix'=>"prix",'stock'=>10);
$if04 = array('image'=>"inf_menthereglisse.jpg",'nom'=>"Infusion Menthe & Réglisse / 100g",'ref'=>"if04",'prix'=>"prix",'stock'=>10);
$if05 = array('image'=>"inf_noel.jpg",'nom'=>"Infusion de Noël / 100g",'ref'=>"if05",'prix'=>"prix",'stock'=>10);


//on créé les variables de sessions utilisées dans l'url de code

$_SESSION['the_vert']=array($tv01,$tv02,$tv03,$tv04,$tv05, 'the_vert', "Thé Vert");
$_SESSION['the_noir']=array($tn01,$tn02,$tn03,$tn04,$tn05, 'the_noir', "Thé Noir");
$_SESSION['infusion']=array($if01,$if02,$if03,$if04,$if05,'infusion', "Infusion");

//Choix des variables de session en fonction de l'url


$_SESSION['categorie']=array($_SESSION['the_vert'],$_SESSION['the_noir'],$_SESSION['infusion']);

/*foreach($data->utilisateur as $user){
       // echo "pseudo :".$user->username."<br>\n";
       // echo "mdp :".$user->password."<br>\n";
        if ( ($user->username==$_POST["pseudo"]) && ($user->password==$_POST["password"]) ){
            $boleen = true;
            break;
        }
    }
$data = simplexml_load_file('utilisateur.xml');*/

