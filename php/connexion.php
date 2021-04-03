<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Accueil</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>



<?php include './header.php'; ?>
<?php include './side_menu.php'; ?>

<section id="milieu">
    <h1>Connexion</h1>
    <form id="form_contact">
        <table>
            <tr>
                <td> <label for="identifiant">Identifiant : </label> </td>
                <td> <input type="text" id="identifiant" name="identifiant" autocomplete="on" required> </td>
            </tr>
            <tr>
                <td><label for="motdepasse">Mot de passe : </label> </td>
                <td><input type="password" id="motdepasse" name="motdepasse" autocomplete="off" required></td>
            </tr>
            <tr><td><input type="submit" value="Se connecter" id="bouton_connexion"></td></tr>
    </table>
        
    </form>
</section>

<?php include './footer.php'; ?>

</body>
</html>
