<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016). Bonus : Le faire en français.</h1>
                <p>
                    <?php
                    date_default_timezone_set('Europe/Paris');
                    setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); // OK
                    echo "Date du jour : ", strftime("%A %d %B %Y");
                    ?>
                </p>
                <p><a href="http://p9/exercice2">Previous Exercice</a> | <a href="http://p9/exercice4">Next Exercice </a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
