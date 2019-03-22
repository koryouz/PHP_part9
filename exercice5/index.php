<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E5</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</h1>

                <p>
                    <?php
                    $datetime1 = new DateTime('now');
                    $datetime2 = new DateTime('2016-05-16');
                    $interval = $datetime1->diff($datetime2);
                    echo 'Nombre de jours écoulées entre les deux dates : '.$interval->format('%a jours');
                    ?>
                </p>
                // Jours écoulées entre aujourd'hui et le 16 mai 2016. //

                <p><a href="http://p9/exercice4">Previous Exercice</a> | <a href="http://p9/exercice6">Next Exercice </a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
