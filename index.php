<?php
$Nom = htmlspecialchars($_POST['Nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$choix = htmlspecialchars($_POST['choix']);
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 7 exercice 6</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 7 exercice 6</h1>
                    <h3 align="center">Exercice 6</h3>
                    <p align="center">Avec le formulaire de l'exercice 5, Si des données sont passées 
                        en POST ou en GET, le formulaire ne doit pas être affiché.</p>
                    <p align="center">Par contre les données transmises doivent l'être. 
                        Dans le cas contraire, c'est l'inverse. Utiliser qu'une seule page.</p>
                </div>
            </div>
            <?php if (!isset($_POST['valider'])) { ?>
                <form method="POST">
                    <div align="center">
                        <select name="choix">
                            <option value="Homme">Mr</option>
                            <option value="Femme">Mme</option>
                        </select>
                    </div>
                    <div align="center"><input type="text" placeholder="Votre nom" name="Nom" /></div>
                    <div align="center"><input type="text" placeholder="Votre prénom" name="prenom" /></div>
                    <div align="center"><input type="submit" name="valider" value="Valider" /></div>
                </form>
                <?php
            } else {
                if (isset($Nom) && !empty($Nom) AND isset($prenom) && !empty($prenom) AND isset($choix) && !empty($choix)) { // On teste si les paramètres nom et prénom sont bien présent et si oui, on les affiche en echo ci-dessous
                    echo '<p align="center">Ton nom est: "<b>' . $_POST['Nom'] . '</b>" ,ton prénom est: "<b>' . $prenom . ' </b>" et tu es un(e) "<b>' . $choix . ' </b>".</p>';
                } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                    echo '<p align="center">Désolé, il manque un paramètre !</p>';
                }
            }
            ?>
        </div>
    </body>
</html>
