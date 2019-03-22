<?php
$months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Novembre', 'Octobre', 'Decembre'];
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>PHP TP</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post" action="index.php">
                    <select name="months">
                        <?php
                        $add = 1;
                        foreach ($months as $value) {
                            ?><option value="<?= $add ?>"><?= $value ?></option><?php
                            $add++;
                        }
                        ?>
                    </select>
                    <select name="year">
                        <?php for ($year = 2020; $year >= 1970; $year--) {
                            ?><option><?php echo $year; ?></option><?php }
                        ?>
                    </select>
                    <input type="submit" value="submit"/>
                </form>
                <?php if (isset($_POST['year']) && isset($_POST['months'])) { ?>
                    <p><a href="http://p9/tp">RETURN</a></p> <?php
                    $number = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['year']);
                    $numbDate = date('w', mktime(0, 0, 0, $_POST['months'], 1, $_POST['year']));
                    $total = $numbDate + $number;
                    ?><h1>Calendrier du <?= $months[$_POST['months'] - 1] . ' ' . $_POST['year']; ?></h1>
                    <table>
                        <tr>
                            <th>Lundi</th>
                            <th>Mardi</th>
                            <th>Mercredi</th>
                            <th>Jeudi</th>
                            <th>Vendredi</th>
                            <th>Samedi</th>
                            <th>Dimanche</th>       
                        </tr> 
                        <?php
                        $idNumb = 0;
                        $dateNumb = 0;
                        for ($line = 0; $line <= 5; $line++) {
                            ?><tr> 
                                <?php
                                for ($column = 0; $column <= 6; $column++) {
                                    $idNumb++;
                                    ?><td id="<?= $idNumb ?>" class="<?php
                                    if ($idNumb <= $numbDate || $idNumb >= $total) {
                                        echo 'grey';
                                    }
                                    ?>"><?php
                                            if ($idNumb >= $numbDate && $idNumb < $total) {
                                                $dateNumb++;
                                                echo $dateNumb;
                                            }
                                            ?></td><?php
                                }
                                ?></tr><?php }
                            ?>
                    </table><?php }
                        ?>
                <p><a href="http://p9/">HOME</a></p> 
            </div>
        </div>
    </body>
</html>