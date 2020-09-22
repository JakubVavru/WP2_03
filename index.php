<?php 
$eur = filter_input(INPUT_POST, 'eur');
$czk = 27 ;
$sub = filter_input(INPUT_POST, 'odeslat');
$switch =  filter_input(INPUT_POST, 'switch');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (isset($sub)) {
    if ($switch == 2) { ?>
        <?= $eur ?> Eur je <?= $eur * $czk ?> Kč
        <?php
    } elseif ($switch == 1) { ?>
        <?= $eur ?> Kč je <?= $eur / $czk ?> Eur
        <?php
    }


} else { ?>
    <form action="index.php" method="post">
Peníze: <input type="text" name="eur" id="eur"> <br>
        CZK to EUR: <input type="radio" name="switch" value="1" id="switch"><br>
        EUR to CZK: <input type="radio" name="switch" value="2" id="switch"><br>
        <input type="submit" value="odeslat" name="odeslat">
    </form>
<?php
} ?>

</body>
</html>