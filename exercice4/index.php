<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP P8E4</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1> Consigne : Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.</h1>
                <p>Timestamp du jour :  <?php echo strtotime('now').' secondes'; ?> </p>
                // Secondes écoulées entre le 1er janvier 1970 et ajourd'hui //
                
                <p>Timestamp du mardi 2 août 2016 à 15h00 :  <?php echo strtotime('tuesday 2 august 2016 15:00:00').' secondes';?></p>
                // Secondes écoulées entre le 1er janvier 1970 et le mardi 2 août 2016 à 15h00 //
                
                <p><a href="http://p9/exercice3">Previous Exercice</a> | <a href="http://p9/exercice5">Next Exercice </a></p> 
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>
