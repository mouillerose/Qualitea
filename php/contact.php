<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QualiTea - Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>



<?php include './header.php'; ?>
<?php include './side_menu.php'; ?>

<section id="milieu">
    <h1>Demande de contact</h1>
    <form id="form_contact">
        <table>
            <tr>
                <td> <label for="nom">Nom:</label> </td>
                <td> <input type="text" id="nom" name="nom" autocomplete="on" required minlength="4"> </td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom:</label> </td>
                <td><input type="text" id="prenom" name="prenom" autocomplete="on" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" autocomplete="on" required></td>
            </tr>
            <tr>
                <td><label for="genre">Genre:</label></td>
                <td>
        <input type="radio" id="homme" name="genre" value="homme">
        <label for="homme">Homme</label>
        <input type="radio" id="femme" name="genre" value="femme">
        <label for="femme">Femme</label>
        <input type="radio" id="autre" name="genre" value="autre">
        <label for="autre">Autre</label>
                </td>
            </tr>
            <tr>
                <td><label for="naissance">Date de naisssance:</label></td>
                <td><input type="date" id="naissance" name="naissance" required></td>
            </tr>
            <tr>
                <td><label for="cars">Métier :</label></td>
                <td><select id="metier" name="metier" required>
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
                <td><input type="text" id="objet" name="objet" required></td>
            </tr>
            <tr>
                <td><label for="message">Message :</label></td>
                <td><textarea name="message" rows="10" cols="30" required></textarea></td> 
            </tr>
            <tr><td><input type="submit" value="Envoyer" id="bouton_envoi"></td></tr>
    </table>
        
    </form>
</section>

<?php include './footer.php'; ?>

</body>
</html>