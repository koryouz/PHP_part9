<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E2</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</h1>
                <p>
                    <?php
                    date_default_timezone_set('UTC');

                    echo 'La date d\'aujourd\'hui est : ' . date('m-d-y');
                    ?>
                </p>
                <p><a href="http://p9/exercice1">Previous Exercice</a> | <a href="http://p9/exercice3">Next Exercice </a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
