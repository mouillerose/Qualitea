<?php session_start();
$_SESSION['logged']=false;
if (!(isset($_SESSION['panier']))){
    $_SESSION['panier']=array();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Accueil</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>

<?php
$data = simplexml_load_file('./users.xml');
$booleen=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['login']) && !empty($_POST['identifiant']) && !empty($_POST['motdepasse'])){
    
	$mdp=$_POST['motdepasse'];
	$idf=$_POST['identifiant'];
    foreach($data->children() as $user){

         if ( ($user->id==$idf) && ($user->pw==$mdp) ){
             $booleen = true;
             break;
         }
     }}
if($booleen){
        $_SESSION['logged']=true;
		$_SESSION['identifiant']=$idf;
		header ("location: ./index.php?id=".$_SESSION['identifiant']);
			}
			else{
				$msg="Mauvais identifiant ou mot de passe !";
				
				}}

?>


<?php include './php/header.php'; ?>
<?php include './php/side_menu.php'; ?>

<section id="milieu">
    <h1>Connexion</h1>
    <form id="form_contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td> <label for="identifiant">Identifiant : </label> </td>
                <td> <input type="text" id="identifiant" name="identifiant" autocomplete="on" required> </td>
            </tr>
            <tr>
                <td><label for="motdepasse">Mot de passe : </label> </td>
                <td><input type="password" id="motdepasse" name="motdepasse" autocomplete="off" required></td>
            </tr>
            <tr><td><input type="submit" name="login" value="Se connecter" id="bouton_connexion"></td></tr>
            <tr><td><?php if(isset($msg)){ echo "<p style=\"color:#ED2F2F\">".$msg."</p>";}; ?></td></tr>

    </table>
        
    </form>
</section>

<?php include './php/footer.php'; ?>

</body>
</html>