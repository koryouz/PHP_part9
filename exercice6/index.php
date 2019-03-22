<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E6</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher le nombre de jour dans le mois de février de l'année 2016.</h1>
                <p>
                    <?php
                    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                    echo "Il y a {$number} jours en février de l'année 2016";
                    ?>
                </p>
                <p><a href="http://p9/exercice5">Previous Exercice</a> | <a href="http://p9/exercice7">Next Exercice </a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
