<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E7</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher la date du jour - 22 jours.</h1>
                <p>La date d'aujourd'hui est : <?=  date('m/d/Y');?><p/>
                <?php  
                $date = date_create();
                date_add($date, date_interval_create_from_date_string('-22 days'));
                ?>
                <p>La date du jour -22 jours est : <?=  date_format($date, 'm/d/Y');?></p>
                <p><a href="http://p9/exercice7">Previous Exercice</a></p> 
                <p><a href="http://p9/tp">TP</a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
