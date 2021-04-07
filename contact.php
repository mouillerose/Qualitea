<?php session_start();
if (!(isset($_SESSION['panier']))){
  $_SESSION['panier']=array();
};
if (!(isset($_SESSION['logged']))){
  $_SESSION['logged']=false;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Contact</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>



<?php include './php/header.php'; ?>
<?php include './php/side_menu.php'; ?>

<?php
// define variables and set to empty values
$nomErr = $prenomErr = $emailErr = $genreErr = $objetErr = $messageErr = $dateErr = "";
$nom = $prenom = $email = $genre = $objet = $message = $date = $profession = "";
$isError = false;
$errors=array(false,false,false,false,false,false,false);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = test_input($_POST["nom"]);
  $prenom = test_input($_POST["prenom"]);
  $email = test_input($_POST["email"]);
  $objet = test_input($_POST["objet"]);
  $message = test_input($_POST["message"]);
  //$genre = test_input($_POST["genre"]);
  $date = test_input($_POST["date"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isError=false;
    if (empty($_POST["nom"])) {
      $nomErr = "Veuillez indiquer votre nom";
      $errors[0]=true;
    } else {
      $nom = test_input($_POST["nom"]);
      $errors[0]=false;
      if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
        $nameErr = "Caractères spéciaux interdits";
      }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Veuillez développer votre demande";
        $errors[1]=true;
      } else {
        $message = test_input($_POST["message"]);
        $errors[1]=false;
      }

      if (empty($_POST["date"])) {
        $dateErr = "Veuillez indiquer votre date de naissance";
        $errors[2]=true;

      } else {
        $date = test_input($_POST["date"]);
        $errors[2]=false;
      }

    if (empty($_POST["prenom"])) {
        $prenomErr = "Veuillez indiquer votre prénom";
        $errors[3]=true;

      } else {
        $prenom = test_input($_POST["prenom"]);
        $errors[3]=false;
        if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
            $nameErr = "Caractères spéciaux interdits";
          }
      }
  
    if (empty($_POST["email"])) {
      $emailErr = "Veuillez indiquer votre email";
      $errors[4]=true;

    } else {
      $email = test_input($_POST["email"]);
      $errors[4]=false;
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'email invalide";
      }
    }
  

    if (empty($_POST["objet"])) {
        $objetErr = "Veuillez indiquer un objet";
        $errors[5]=true;

      } else {
        $objet = test_input($_POST["objet"]);
        $errors[5]=false;
      }
    
  
    if (empty($_POST["genre"])) {
      $genreErr = "Veuillez indiquer votre genre";
      $errors[6]=true;

    } else {
      $genre = test_input($_POST["genre"]);
      $errors[6]=false;
    }
    foreach ($errors as $x){
        if ($x){
            $isError=true;
        }
    }
    if(!$isError ){
        $to = "mouilleros@eisti.eu"; 
        $from = $_POST['email'];
        $first_name = $_POST['prenom'];
        $last_name = $_POST['nom'];
        $subject = "Form submission : " . $_POST['objet'];
        $contenu = $first_name . "\n" . $last_name . "\nGenre : " . $_POST['genre'] . "\nNé(e) le : " . $_POST['date'] . "\n\n" . $_POST['message'];
        $headers = "From:" . $from ."\r\n";
        mail($to,$subject,$contenu,$headers);
    }
  }
  
  
?>

<section id="milieu">
    <h1>Demande de contact</h1>
    <form id="form_contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
            <tr>
                <td> <label for="nom" >Nom:</label> </td>
                <td> <input type="text" id="nom" name="nom" pattern="[a-z]*(( |-|')[a-z]*)*" autocomplete="on" value="<?php echo $nom;?>"> <span style="color:red" class="error"> * <?php echo $nomErr;?></span></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom:</label> </td>
                <td><input type="text" id="prenom" name="prenom" pattern="[a-z]*(( |-|_)([dD]')?[a-z]*)*" autocomplete="on" value="<?php echo $prenom;?>"><span style="color:red" class="error"> * <?php echo $prenomErr;?></span></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" autocomplete="on" value="<?php echo $email;?>"><span style="color:red" class="error"> * <?php echo $emailErr;?></span></td>
            </tr>
            <tr>
                <td><label for="genre">Genre:</label></td>
                <td>
        <input type="radio" id="homme" name="genre" value="homme" <?php if (isset($genre) && $genre=="homme") echo "checked";?>>
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="genre" value="femme" <?php if (isset($genre) && $genre=="femme") echo "checked";?>>
        <label for="femme">Femme</label>
        <input type="radio" id="autre" name="genre" value="autre" <?php if (isset($genre) && $genre=="autre") echo "checked";?>>
        <label for="autre">Autre</label>
        <span class="error" style="color:red">* <?php echo $genreErr;?></span>
                </td>
            </tr>
            <tr>
                <td><label for="naissance">Date de naisssance:</label></td>
                <td><input type="date" id="naissance" name="date" value="<?php echo $date;?>"> <span style="color:red" class="error"> * <?php echo $dateErr;?></span></td>
            </tr>
            <tr>
                <td><label for="cars">Métier :</label></td>
                <td><select id="metier" name="profession" required>
            <option value=None>---</option>
            <option value="chomage">Chomage ou sans emploi</option>
            <option value="etudiant">Etudiant</option>
            <option value="salarie">Salarié</option>
            <option value="entrepreneur">Entrepreneur</option>
            <option value="profession">Profession Libérale</option>
            <option value="aucun">Aucun/Je ne souhaite pas le partager</option>
        </select>
                </td>
            </tr>
            <tr>
                <td><label for="objet">Objet :</label></td>
                <td><input type="text" id="objet" name="objet" value="<?php echo $objet;?>"><span style="color:red" class="error"> * <?php echo $objetErr;?></span></td>
            </tr>
            <tr>
                <td><label for="message">Message :</label></td>
                <td><textarea name="message" rows="10" cols="30"><?php echo $message;?></textarea><span style="color:red" class="error"> * <?php echo $messageErr;?></span></td> 
            </tr>
            <tr><td><input type="submit" name="submit" value="Envoyer" id="bouton_envoi"></td></tr>
    </table>
        
    </form>
</section>

<?php include './php/footer.php'; ?>

</body>
</html>