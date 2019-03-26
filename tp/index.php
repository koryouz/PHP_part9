<?php
$monthsArray = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];
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
                <form method="post" action="">
                    <select name="months">
                        <?php
                        $addMonths = 1;
                        foreach ($monthsArray as $month) {
                            ?><option <?php
                            if (isset($_POST['year']) && isset($_POST['months'])) {
                                if ($_POST['months'] == $addMonths) {
                                    echo 'selected';
                                }
                            }
                            ?> value="<?= $addMonths ?>"><?= $month ?></option><?php
                                $addMonths++;
                            }
                            ?>
                    </select>
                    <select name="year">
                        <?php
                        $addYear = 1;
                        for ($year = 2020; $year >= 1970; $year--) {
                            ?><option
                            <?php
                            if (isset($_POST['year']) && isset($_POST['months'])) {
                                if ($_POST['year'] == $addYear) {
                                    echo 'selected';
                                }
                            }
                            ?> value="<?= $addYear ?>"><?php echo $year; ?></option><?php
                                $addYear++;
                            }
                            ?> 
                    </select>
                    <input type="submit" value="submit"/>
                </form>
                <p><a href="http://p9/tp">RETURN</a></p>
                <?php
                if (isset($_POST['year']) && isset($_POST['months'])) {
                    $dateCalcul = 2021 - $_POST['year'];
                    $number = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['year']);
                    $date = $dateCalcul . '-' . $_POST['months'] . '-01';
                    $unixTimestamp = strtotime($date);
                    $dayOfWeek = date("N", $unixTimestamp);
                    $total = $dayOfWeek + $number;
                    ?><h1>Calendrier du <?= $monthsArray[$_POST['months'] - 1] . ' ' . $dateCalcul; ?></h1>
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
                                    if ($idNumb < $dayOfWeek || $idNumb >= $total) {
                                        echo 'grey';
                                    }
                                    ?>"><?php
                                            if ($idNumb >= $dayOfWeek && $idNumb < $total) {
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