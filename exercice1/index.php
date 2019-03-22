<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P9E1</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Consigne : Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</h1>
                <p>
                    <?php
                    date_default_timezone_set('UTC');

                    echo 'La date d\'aujourd\'hui est : ' . date('m/d/Y');
                    ?>
                </p>
                <p><a href="http://p9/exercice3">Next exercice</a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
